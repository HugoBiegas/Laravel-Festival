@extends('paterne')

@section('titre', '- Equipes')

@section('content')

@include("festival/_controlesEtGestionErreurs")
@include("festival/_gestionBase")
<?php
      $connexion = new PDO("mysql:host=localhost;dbname=festival", "festival", "secret");

echo "<br><p align='center' class='textArianne'><a  href = 'index.php'> Accueil </a> -><A href='gestionEquipe.php'>  Gestion d'équipes</a> -> Suppression d'équipe </p><br>";

// SUPPRIMER UN ÉTABLISSEMENT 

$id=$_REQUEST['id'];  

$lgEqu=obtenirDetailEquipe($connexion, $id);
foreach ($lgEqu as $row) {
   $nom=$row['nom'];
}

// Cas 1ère étape (on vient de listeEtablissements.php)

if ($_REQUEST['action']=='demanderSupprEqu')    
{
   echo "
   <br><center><h5 class='texteAccueil'>Souhaitez-vous vraiment supprimer l'équipe ? 
   <br><br>
   <a class='buttonCréa' href='suppressionEquipe.php?action=validerSupprEqu&amp;id=$id'>
   Oui</a>&nbsp; &nbsp; &nbsp; &nbsp;
   <a class='buttonCréa2' href='gestionEquipe.php?'>Non</a></h5></center>";
}

// Cas 2ème étape (on vient de suppressionEtablissement.php)

else
{
   supprimerEquipe($connexion, $id);
   echo "
   <br><br><center><h5>L'équipe $nom a été supprimé</h5>
   <a class='buttonRetour' href='gestionEquipe.php?'>Retour</a></center>";
}

?>
@endsection