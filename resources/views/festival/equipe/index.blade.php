@extends('paterne')

@section('titre', '- Equipes')

@section('content')


<br>
<p align='center' class='textArianne'><a  href = "{{route('index')}}"> Accueil </a> ->  Gestion d'équipes </p> <br>

<!DOCTYPE html>
<html>
<head>
	<title>Gestion d'équipes</title>
</head>
<body>

   <p align='center'><a class='buttonCréa' href="{{ route('equipe.create') }}">
   Créer une équipe</a></p>
<h4 class='textArianne' align='center'>Le symbole * indique que l'on ne peux pas le supprimer car il a déjà des chambres d'attribuées<h4>

      @if (session('status'))
      <div class="alert alert-success">
          <br>
          <h4 align="center">{{ session('status') }}</h4>
      </div>
      @endif
      <table width='70%' cellspacing='0' cellpadding='0' align='center' 
      class='content-equipe'>

      <thead>
      <tr>
         <th><strong> Equipe</strong>&nbsp;
         </th>
         <th>&nbsp
         </th>
         <th><strong>Nom groupe</strong>&nbsp;
         </th>
         <th><strong>Stand</strong>&nbsp;
         </th>
         <th><strong>Modifications / Suppressions</strong>&nbsp;
         </th>
      </tr>
      </thead>

@foreach($equipes as $equipe)
      <tr class='content-table'>
            @if($equipe->nombrePersonnes == 0)
            @else
               @if($equipe->nombrePersonnes == 1)
                     <td>Solo ({{ $equipe->nombrePersonnes }}  personne) </td><td><a href="{{ route('equipe.show', $equipe->id) }}" class='buttonTab'>Détail</a>&nbsp&nbsp&nbsp</td>
               @else 
               @if($equipe->nombrePersonnes > 1)
                     <td>Équipe ({{ $equipe->nombrePersonnes }} personnes)</td><td> <a href="{{ route('equipe.show', $equipe->id) }}" class='buttonTab'>Détail</a>&nbsp</td>
            @endif
            @endif
            @endif
            <td>{{ $equipe->nom }}</td>
           @if ($equipe->stand == 1) 
				<td>&#x2714</td>
		@else
				<td>&#x274C</td>
		@endif
		<td><a class='buttonTab' href="{{ route('equipe.edit', $equipe->id) }}">Modifier</a> / 
         &nbsp

         @foreach($attributions as $attribution)
         @endforeach

            @if($attributions->contains('equipe_id', $equipe->id))
             *     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            @else
               <a class='buttonTab' href='suppressionEquipe.php?action=demanderSupprEqu&amp;id=$id'>Supprimer</a></td>
            @endif
@endforeach
</body>
</html>
@endsection