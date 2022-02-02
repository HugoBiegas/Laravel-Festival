@extends('paterne')

@section('titre', '- Equipes')

@section('content')

@include("festival/_controlesEtGestionErreurs")
@include("festival/_gestionBase")

<?php
      $connexion = new PDO("mysql:host=localhost;dbname=festival", "festival", "secret");
echo "<br><p align='center' class='textArianne'><a  href = 'index.php'> Accueil </a> -> <a href = 'gestionEquipe.php'>
Gestion d'équipes  </a> -> Création d'équipes</p><br>";

$action=$_REQUEST['action'];
$sql="SELECT id FROM Groupe ORDER by id Desc LIMIT 0,1";
$sth=$connexion->query($sql);
$resultat=$sth->fetchall(PDO::FETCH_ASSOC);
foreach ($resultat as $row) {
    $code= $row['id'];
}
$codeCh = substr($code, 1,4);
$codeCh =$codeCh +1;
$code = "g" . str_pad($codeCh, 3, "0", STR_PAD_LEFT);
if ($action=='demanderCreEqu') 
{
   $id='';
   $nom='';
   $nombrePersonnes='';
   $nomPays='';
   $stand='';
   $identiteResponsable='';
   $adressePostale='';  
}
else
{
              $nom=$_REQUEST['nom'];
              $identiteResponsable=$_REQUEST['identiteResponsable'];
              $adressePostale=$_REQUEST['adressePostale'];
              $nombrePersonnes=$_REQUEST['nombrePersonnes'];
              $nomPays=$_REQUEST['nomPays'];
              $stand=$_REQUEST['stand'];

}
  $obtenirID=obtenirIDEquipe($connexion);
foreach ($obtenirID as $row)
{
  $id=$row['dernierID'];
  $id=$id+1;
}
?>

<form method='post' action='addEkip'>
@csrf


   <input type='hidden' value='validerCreEqu' name='action'>
   <table width='85%' align='center' cellspacing='0' cellpadding='0' 
   class='content-table'>
      <thead>
         <tr>
         <th colspan='3'><?php echo"Nouvelle Equipe(id :$code)" ?> <input type="hidden" name='id' value=<?php $code ?> /> </th>
         </tr>
      </thead>

      <tr>
         <td> Nom équipe: </td>
         <td><input type="text" name="nom" size="50" 
         maxlength="45" value="{{ old('name') }}">
         <span style="color:red">@error('nom'){{ $message }} @enderror</span>
      </td>

      </tr>
      <tr class="ligneTabNonQuad">
         <td> Nom de la ligue: </td>
         <td><input type="text" name="identiteResponsable" size="50" 
         maxlength="45" value="{{ old('identiteResponsable') }}"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Code postal: </td>
         <td><input type="number" name="adressePostale" min="0" value="{{ old('adressePostale') }}
          "></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Nombres Personnes: </td>
         <td><input type="number" name="nombrePersonnes" 
         min="0" value="{{ old('nombrePersonnes') }}"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Nom pays: </td>
         <td><input type="text" name="nomPays" size="40" 
         maxlength="35" value="{{ old('nomPays') }}"></td>
      </tr>
      <tr>
         <td> Stand: </td>
         <td>
            <?php
            if ($stand==1)
            {
               echo " 
               <input type='radio' name='stand' value='1' checked>  
               Oui
               <input type='radio' name='stand' value='0'>  Non";
             }
             else
             {
                echo " 
                <input type='radio' name='stand' value='1'> 
                Oui
                <input type='radio' name='stand' value='0' checked> Non";
              }
            ?>
           </td>
         </tr>
               <tr>
         <td align="right"></td>
         <td><input class="buttonTab" type="submit" value="Valider" name="valider"><input type="reset" class="buttonCréa" value="Annuler" name="annuler"></td>
      </tr>
      <tr>
         <td colspan="2" align="center"><a class="buttonRetour" href="gestionEquipe.php">Retour</a>
         </td>
      </tr>
   </table>
   <table class='content-table' align='center' cellspacing='15' cellpadding='0'>
   </table>
</form>

<?php
// En cas de validation du formulaire : affichage des erreurs ou du message de 
// confirmation
if ($action=='validerCreEqu')
{
                  $sql="SELECT id FROM Groupe ORDER by id Desc LIMIT 0,1";
            $sth=$connexion->query($sql);
            $resultat=$sth->fetchall(PDO::FETCH_ASSOC);
            foreach ($resultat as $row) {
                $code= $row['id'];
            }
            $codeCh = substr($code, 1,4);
            $codeCh =$codeCh +1;
            $id = "g" . str_pad($codeCh, 3, "0", STR_PAD_LEFT);
            $sql="SELECT nom FROM Groupe where nom='$nom'";
            $sth=$connexion->query($sql);
            $resultat=$sth->fetchall(PDO::FETCH_ASSOC);
            $cpt=0;
            foreach ($resultat as $row) {
              $cpt=$cpt+1;
            }
            if($cpt>0){
                echo '<script language="Javascript"> alert ("les donnée entrer son similaire as une autre équipe existante" )</script>';  
            }else{
              $nom=$_REQUEST['nom'];
              $identiteResponsable=$_REQUEST['identiteResponsable'];
              $adressePostale=$_REQUEST['adressePostale'];
              $nombrePersonnes=$_REQUEST['nombrePersonnes'];
              $nomPays=$_REQUEST['nomPays'];
              $stand=$_REQUEST['stand'];
              creerEquipe($connexion,$id,$nom,$identiteResponsable,$adressePostale,$nombrePersonnes,$nomPays,$stand);
                    echo "
      <h5><center>La création de l'équipe a été effectuée</center></h5>";
      }
}

?>
@endsection
