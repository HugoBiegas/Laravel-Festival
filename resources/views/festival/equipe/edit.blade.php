@extends('paterne')

@section('titre', '- Equipes')

@section('content')

<br><p align='center' class='textArianne'><a  href = '{{route('index')}}'> Accueil </a> -> <a href = '{{route('equipe.index')}}'>
   Gestion d'équipes  </a> -> Modification d'équipe </p> <br>

   {!! Form::model($equipe, ['method' =>'PUT', 'route'=>['equipe.update', $equipe->id]]) !!}
   <table width='85%' cellspacing='0' cellpadding='0' align='center' 
   class='content-table'>
   
      <thead>
      <tr>
         <th colspan='3'>{{$equipe->nom}}({{$equipe->id}})</th>
      </tr>
      </thead>
      <tr>
         <td> Nom Equipe: </td>
         <td>{{ Form::text('nom', old('nom'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Nom Ligue: </td>
         <td>{{ Form::text('identiteResponsable', old('identiteResponsable'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Code postale: </td>
         <td>{{ Form::text('adressePostale', old('adressePostale'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Nombre de personnes: </td>
         <td>{{ Form::text('nombrePersonnes', old('nombrePersonnes'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Origine: </td>
         <td> {{ Form::text('nomPays', old('nomPays'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Utilise un stand: </td>
         <td>
            {{ Form::label('stand','Oui ') }}
            {{ Form::radio('stand','1', old('stand'))}}
            {{ Form::label('stand','Non ') }}
            {{ Form::radio('stand', '0', old('stand'))}}
           </td>
         </tr>
      <tr>
         <td align="right">
         </td>
         <td align="left"><input class="buttonTab" type="submit" value="Valider" name="valider"><input class="buttonCréa" type="reset" value="Annuler" name="annuler">
         </td>
      </tr>
      <tr>
         <td colspan="2" align="center"><a class="buttonRetour" href="gestionEquipe.php">Retour</a>
         </td>
      </tr>
         
   </table>
   
   
</form>
@endsection

{{-- // En cas de validation du formulaire : affichage des erreurs ou du message de 
// confirmation
if ($action=='validerModifEqu')
{
   if(($chambretotal[0]*3)<=$nombrePersonnes){
      
      <h5><center><strong>La modification a été effectuée</strong></center></h5>
   }else{
      
      <h5><center><strong>Modifications impossible !!!</strong></center></h5>
      <h5><center><strong> Si vous souhaitez enlever des personnes, il faut que vous déprogrammiez des chambres ! </strong></center></h5>
 
   }
} --}}

