@extends('paterne')

@section('titre', '- Equipes')

@section('content')

<br><p class='textArianne' align='center'><a  href = '{{route('index')}}'> Accueil </a> -> <a href = '{{route('equipe.index')}}'>
Gestion d'équipes  </a> -> Détail de l'équipe</p><br>


   <table width='60%' cellspacing='0' cellpadding='0' align='center' class='content-table'>
      
      <thead>
      <tr>
         <th colspan='3'>{{$equipe->nom}}({{$equipe->id}})</th>
      </tr>
      </thead>
      <tr>
         <td  width='20%'> Nombres de personnes: </td>
         <td>{{$equipe->nombrePersonnes}}</td>
      </tr>
      <tr>
         <td  width='20%'> Nom de la ligue: </td>
         <td>{{$equipe->identiteResponsable}}</td>
      </tr>
            <tr>
         <td  width='20%'> Code postal: </td>
         <td>{{$equipe->adressePostale}}</td>
      </tr>
      <tr>
         <td> Origine : </td>
         <td>{{$equipe->nomPays}}</td>
      </tr>
      <tr>
         <td> Utilise un stand: </td>
         @if($equipe->stand==1)
         {
      <td> Oui </td>
         }
         @else
         {
      <td> Non </td>
         }
         @endif
      </tr>
   </table>
   
   <table align='center' cellspacing='15' cellpadding='0'>
      <tr>
         <td colspan='2' align='center'><a class='buttonRetour' href="{{url()->previous()}}">Retour</a>
         </td>
      </tr>

@endsection