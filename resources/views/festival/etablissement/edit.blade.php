@extends('paterne')

@section('titre', '- Etablissements')

@section('content')
<br><p align='center' class='textArianne'><a  href ="{{route('index')}}"> Accueil </a> -> <a href ="{{route('etablissement.index')}}" >
Liste des établissements </a> -> Modification d'un établissement</p> <br>

{!! Form::model($etablissement, ['method' =>'PUT', 'route'=>['etablissement.update', $etablissement->id]]) !!}
   <table width='85%' cellspacing='0' cellpadding='0' align='center' 
   class='content-table'>
   
      <thead>
      <tr>
         <th colspan='3'>{{$etablissement->nom}}({{$etablissement->id}})</th>
      </tr>
      </thead>
      <tr>
         <td> Nom*: </td>
         <td>{{ Form::text('nom', old('nom'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Adresse*: </td>
         <td>{{ Form::text('adresseRue', old('adresseRue'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Code postal*: </td>
         <td>{{ Form::number('codePostal', old('codePostal'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Ville*: </td>
         <td>{{ Form::text('ville', old('ville'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Téléphone*: </td>
         <td>{{ Form::number('telephone', old('telephone'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> E-mail: </td>
         <td>{{ Form::email('adresseElectronique', old('adresseElectronique'), ['class' => 'form-control']) }}</td>
      </tr>
      <tr>
         <td> Type*: </td>
         <td>
           {{ Form::label('type','Etablissement Scolaire ') }}
           {{ Form::radio('type','1', old('stand'))}}
           {{ Form::label('type','Autre ') }}
           {{ Form::radio('type', '0', old('stand'))}}
           </td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td colspan='2' ><strong>Responsable:</strong></td>
         </tr>
         <tr class='ligneTabNonQuad'>
            <td> Civilité*: </td>
            <td> {{ Form::select('civiliteResponsable', $civiliteResponsable,$etablissement->civiliteResponsable) }}
               Nom*: 
               {{ Form::text('nomResponsable', old('nomResponsable'), ['class' => 'form-control']) }}
               &nbsp; &nbsp; &nbsp; Prénom: 
               {{ Form::text('prenomResponsable', old('prenomResponsable'), ['class' => 'form-control']) }}
            </td>
         </tr>
         <tr>
            <td> Nombre chambres offertes*: </td>
            <td>{{ Form::number('nombreChambresOffertes', old('nombreChambresOffertes'), ['class' => 'form-control']) }}</td>
         </tr>
      <tr>
         <td align="right">
         </td>
         <td align="left">{{Form::submit('Valider', ['class' => 'buttonTab'])}}<input class="buttonCréa" type="reset" value="Annuler" name="annuler">
         </td>
      </tr>
      <tr>
         <td colspan="2" align="center"><a class="buttonRetour" href="{{url()->previous()}}">Retour</a>
         </td>
      </tr>
   </table>

{!!Form::close()!!}
@endsection