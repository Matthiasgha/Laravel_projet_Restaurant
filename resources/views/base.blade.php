<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{config('app.name')}} - @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body> 
    <header>
        <div>
            <img class="logo" src="{{asset('img/restaurant.png')}}" alt="">
        </div>
        <nav>
           <ul>
            <li><a href="{{route('home.index') }}">Acceuil</a></li>
            <li><a href="{{route('carte.index') }}">Carte</a></li>
            <li><a href="{{route('contact.index') }}">Contact</a></li>
           </ul>
    </header>
    @section('content')
    @show   
    @show
    <footer>
        <ul>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Tiktok</a></li>
        </ul>
        <ul>
            <li>Acme Food</li>
            <li>Copyright 2024</li>
            <li>Tous droits réservés</li>
            <li><a href="{{route('mentions.index') }}">Mentions légale</a></li>
        </ul>
    </footer> 
</body>
</html>