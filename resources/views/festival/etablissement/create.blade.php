@extends('paterne')

@section('titre', '- Etablissements')

@section('content')

<br><p class='textArianne' align='center'><a  href = "{{route('index')}}"> Accueil </a> -> <a href = "{{route('etablissement.index')}}">
Liste des établissements </a> -> Création d'un établissement</p><br> 

{!! Form::open(['route' => 'etablissement.store', 'method' => 'post']) !!}
   <table width='85%' align='center' cellspacing='0' cellpadding='0' 
   class='content-table'>
      <thead>
      <tr>
         <th colspan='3'>Nouvel établissement</th>
      </tr>
      </thead>

      <tr>
         <td> Nom*: </td>
         <td>{{ Form::text('nom', '', ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Adresse*: </td>
         <td>{{ Form::text('adresseRue', '', ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Code postal*: </td>
         <td>{{ Form::number('codePostal', '', ['class' => 'form-control']) }}</td>
      </tr>
      <tr >
         <td> Ville*: </td>
         <td>{{ Form::text('ville', '', ['class' => 'form-control']) }}</td>
      </tr>
      <tr >
         <td> Téléphone*: </td>
         <td>{{ Form::number('telephone', '', ['class' => 'form-control']) }}</td>
      </tr>
      <tr >
         <td> E-mail: </td>
         <td>{{ Form::email('adresseElectronique', '', ['class' => 'form-control']) }}</td>
      </tr>
      <tr >
         <td> Type*: </td>
         <td>
            {{ Form::label('type','Oui') }}
            {{ Form::radio('type','1' )}}
            {{ Form::label('type','Non ') }}
            {{ Form::radio('type', '0', true)}}
           </td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td colspan='2' ><strong>Responsable:</strong></td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td> Civilité*: </td>
            <td> {{ Form::select('civiliteResponsable', $civiliteResponsable) }}
               &nbsp; &nbsp; &nbsp; &nbsp; Nom*: 
               {{ Form::text('nomResponsable', '', ['class' => 'form-control']) }}
               &nbsp; &nbsp; &nbsp; &nbsp; Prénom: 
               {{ Form::text('prenomResponsable', '', ['class' => 'form-control']) }}
            </td>
         </tr>
          <tr >
            <td> Nombre chambres offertes*: </td>
            <td>
            {{ Form::number('nombreChambresOffertes', '', ['class' => 'form-control']) }}
         </td>
         </tr>
            <tr>
         <td align="right">
         </td>
         <td align="left">{{Form::submit('Valider', ['class' => 'buttonTab'])}}<input class="buttonCréa" type="reset" value="Annuler" name="annuler">
         </td>
      </tr>
      <tr>
         <td colspan="2" align="center"><a class="buttonRetour" href="listeEtablissements.php">Retour</a>
         </td>
      </tr>
   </table>
  
   {!! Form::close() !!}

@endsection