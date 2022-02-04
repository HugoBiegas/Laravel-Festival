@extends('paterne')

@section('titre', '- Etablissements')

@section('content')

<br><p class='textArianne' align='center'><a href = "{{route('index')}}"> Accueil </a> -> <a href ="{{route('etablissement.index')}}">
Liste des établissements </a> -> Détail des établissements</p><br>

   
   <table width='60%' cellspacing='0' cellpadding='0' align='center' 
   class='content-table'>
      <thead>
      <tr>
         <th colspan='3'>{{$etablissement->nom}}</th>
      </tr>
      </thead>

      <tr>
         <td  width='20%'> Id: </td>
         <td>{{$etablissement->id}}</td>
      </tr>
      <tr>
         <td> Adresse: </td>
         <td>{{$etablissement->adresseRue}}</td>
      </tr>
      <tr>
         <td> Code postal: </td>
         <td>{{$etablissement->codePostal}}</td>
      </tr>
      <tr>
         <td> Ville: </td>
         <td>{{$etablissement->ville}}</td>
      </tr>
      <tr>
         <td> Téléphone: </td>
         <td>{{$etablissement->telephone}}</td>
      </tr>
      <tr>
         <td> E-mail: </td>
         <td>{{$etablissement->adresseElectronique}}</td>
      </tr>
      <tr>
         <td> Type: </td>
         @if($etablissement->type==1)
            <td> Etablissement scolaire </td>
         @else
            <td> Autre établissement </td>
         @endif
      </tr>
      <tr>
         <td> Responsable: </td>
         <td>{{$etablissement->civiliteResponsable}}&nbsp; {{$etablissement->nomResponsable}}&nbsp; {{$etablissement->prenomResponsable}}
         </td>
      </tr> 
      <tr>
         <td> Offre: </td>
         <td>{{$etablissement->nombreChambresOffertes}}&nbsp;chambre(s)</td>
      </tr>
   </table>
   <table align='center'>
      <tr>
         <td align='center'><a class='buttonRetour' href="{{url()->previous()}}">Retour</a>
         </td>
      </tr>
   </table>

@endsection