<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suivi Maintenance</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="{{ url('/') }}">Suivi Maintenance</a>
        <div class="ms-auto">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-sm me-2">Tableau de bord</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm me-2">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">Inscription</a>
            @endauth
        </div>
    </nav>

    <div class="container py-5">
        <h1 class="display-5 mb-4">Bienvenue sur Suivi Maintenance</h1>
        <p class="lead">
            Gérer l'entretien de vos véhicules n'a jamais été aussi simple. Connectez-vous ou inscrivez-vous pour commencer à suivre vos vidanges et entretiens.
        </p>

        @guest
        <a href="{{ route('register') }}" class="btn btn-success me-2">Commencer maintenant</a>
        <a href="{{ route('login') }}" class="btn btn-outline-primary">J’ai déjà un compte</a>
        @endguest
    </div>
</body>
</html>
