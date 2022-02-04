@extends('paterne')

@section('titre', '- Etablissements')

@section('content')

<br>

<p align='center' class='textArianne'><a  href = "{{route('index')}}"> Accueil </a> -> Liste des Etablissements</p>
<br> 
   <p align='center'><a class='buttonCréa' href="{{ route('etablissement.create') }}">
   Créer un etablissement</a></p>
   @if (session('status'))
   <div class="alert alert-success">
       <br>
       <h4 align="center">{{ session('status') }}</h4>
   </div>
   @endif
<table width='70%' cellspacing='0' cellpadding='0' align='center' 
class='content-table'>
   <thead>
   <tr>
      <th colspan='4'>Etablissements</th>
   </tr>
   </thead>
 
   @foreach($etablissements as $etablissement)
		<tr class='content-table'>
         <td width='52%'>{{$etablissement->nom}}</td>
         
         <td width='16%' align='center'> 
         <a class='buttonTab' href="{{ route('etablissement.show', $etablissement->id) }}">
         Voir détail</a></td>
         
         <td width='16%' align='center'> 
         <a class='buttonTab' href="{{ route('etablissement.edit', $etablissement->id) }}">
         Modifier</a></td>

         @foreach($attributions as $attribution)
         @endforeach

            @if($attributions->contains('etablissement_id', $etablissement->id))
               <td width='16%'>{{ $attribution->sum('nombreChambres') }} / {{$etablissement->nombreChambresOffertes}} Attributions</td>
               @else
               <td width='16%' align='center'> 
                  <a class='buttonTab' href='suppressionEtablissement.php?action=demanderSupprEtab&amp;id=$id'>
                  Supprimer</a></td>
            @endif


      </tr>
      @endforeach
   
</table>
@endsection