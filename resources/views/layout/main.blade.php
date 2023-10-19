<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body> 
        @yield('rodape')
        <footer>
            <p>Aluno SENAI &copy; 2023</p>
        </footer>
    </body>
</html>