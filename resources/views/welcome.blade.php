<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Rockr Blog</title>     
        <link rel="stylesheet" href="{{ asset('css/material.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
       <div id="app">
            <App></App> 
       </div>
       <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
