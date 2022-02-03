@extends('paterne')

@section('titre', '- Equipes')

@section('content')

<br><p align='center' class='textArianne'><a  href = '{{route('index')}}'> Accueil </a> -> <a href = '{{route('equipe.index')}}'>
   Gestion d'équipes  </a> -> Création d'équipes</p><br>
   
   <!DOCTYPE html>
   <html>
   <head>
      <title>Creation d'équipes</title>
   </head>
   <body>
   
   {!! Form::open(['route' => 'equipe.store', 'method' => 'post']) !!}
   
   {{ Form::label('nom','Nom équipe: ') }}
   {{ Form::email('nom', '', ['class' => 'form-control']) }}
   <br>
   {{ Form::label('indentiteResponsable','Nom de la ligue: ') }}
   {{ Form::text('indentiteResponsable', '', ['class' => 'form-control']) }}
   <br>
   {{ Form::label('adressePostale','Code postal:  ') }}
   {{ Form::text('adressePostale', '', ['class' => 'form-control']) }}
   <br>
   {{ Form::label('nombrePersonnes','Nombres Personnes:  ') }}
   {{ Form::text('nombrePersonnes', '', ['class' => 'form-control']) }}
   <br>
   {{ Form::label('nomPays','Nom pays:  ') }}
   {{ Form::text('nomPays', '', ['class' => 'form-control']) }}
   <br>
   {{ Form::label('stand','Stand ? Oui ') }}
   {{ Form::radio('stand','1' )}}
   {{ Form::label('stand','Non ') }}
   {{ Form::radio('stand', '0', true)}}
   <br>
   
   {{ Form::submit('Valider')}}
   {!! Form::close() !!}


</body>
</html>
@endsection
