<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <title>Se connecter</title>
</head>
<body>
    <!-- Header -->
    <header class="navbar">
        <div class="nav-left">
            <img src="../sicile/logo.png" alt="Logo" class="logo">
            <h1 class="site-title">SicilyLines</h1>
        </div>
        <div class="nav-right">
        </div>
    </header>
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Votre email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de Passe')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="Votre mot de passe" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <div class="flex flex-col items-center justify-center mt-4">
                <x-primary-button class="w-full bg-black text-white py-2 rounded-md flex justify-center">
                    {{ __('Se connecter') }}
                </x-primary-button>
                
                
    
                @if (Route::has('password.request'))
                    <a class="mt-3 text-sm text-black underline" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-guest-layout>
    <!-- Footer -->
    <footer class="footer">
        <p>© - SicilyLines 2024 Tous droits réservés</p>
        <div class="footer-links">
            <a href="#">Politique de confidentialité</a>
            <a href="#">Mentions légales</a>
        </div>
    </footer>
</body>
</html>