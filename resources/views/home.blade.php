<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="resources/css/navbar.css">
    </head>
    <body class="">
        <div class="navbar">
            @include('navbar')
            <?php 
                $user = "min";
             ?>
            <h1>Home {{$user}}</h1>
        </div>
    </body>
</html>
