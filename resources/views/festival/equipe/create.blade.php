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
      -   <table width='85%' align='center' cellspacing='0' cellpadding='0' 
         class='content-table'>
            <thead>
               <tr>   
               <th colspan='3'> Créer une nouvelle équipe </th>
               </tr>
            </thead>
      
            <tr>
               <td> {{ Form::label('nom','Nom équipe: ') }} </td>
               <td>{{ Form::text('nom', '', ['class' => 'form-control']) }}
            </td>
      
            </tr>
            <tr class="ligneTabNonQuad">
               <td> {{ Form::label('indentiteResponsable','Nom de la ligue: ') }} </td>
               <td>{{ Form::text('indentiteResponsable', '', ['class' => 'form-control']) }}</td>
            </tr>
            <tr class="ligneTabNonQuad">
               <td> {{ Form::label('adressePostale','Code postal:  ') }} </td>
               <td>{{ Form::number('adressePostale', '', ['class' => 'form-control']) }}</td>
            </tr>
            <tr class="ligneTabNonQuad">
               <td> {{ Form::label('nombrePersonnes','Nombres Personnes:  ') }} </td>
               <td>{{ Form::number('nombrePersonnes', '', ['class' => 'form-control']) }}</td>
            </tr>
            <tr class="ligneTabNonQuad">
               <td> {{ Form::label('nomPays','Nom pays:  ') }} </td>
               <td>{{ Form::text('nomPays', '', ['class' => 'form-control']) }}</td>
            </tr>
            <tr>
      

               {!! Form::close() !!}
               

                  <td> Stand ? </td>
                  <td>
                     {{ Form::label('stand','Oui') }}
                     {{ Form::radio('stand','1' )}}
                     {{ Form::label('stand','Non ') }}
                     {{ Form::radio('stand', '0', true)}}
                    </td>
                  </tr>
                        <tr>
                  <td align="right"></td>
                  <td>{{ Form::submit('Valider', ['class' => 'buttonTab'])}}<input type="reset" class="buttonCréa" value="Annuler" name="annuler"></td>
               </tr>
               <tr>
                  <td colspan="2" align="center"><a class="buttonRetour" href="{{ url()->previous() }}">Retour</a>
                  </td>
               </tr>
            </table>

</body>
</html>



         
@endsection