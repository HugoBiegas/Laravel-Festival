<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<!-- TITRE ET MENUS -->
<html lang="fr">
<head>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	{{asset('css/cssGeneral.css'); }}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('header')
    </head>
    <body>
    	@yield('content')

    </body>
</html>