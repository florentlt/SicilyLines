<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sicilylines</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/welcome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Gudea:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <div class="nav-left">
            <img src="../sicile/logo.png" alt="Logo" class="logo">
            <h1 class="site-title">SicilyLines</h1>
        </div>
        <div class="nav-right">
            @if (Route::has('login'))
              <div>
                @auth
                  <a href="{{ url('/ferry') }}" class="">Accès page</a>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="">Se déconnecter</button>
                  </form>
                @else
                  <a href="{{ route('login') }}" class="">Se connecter</a>
          
                  {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">S'inscrire</a>
                  @endif --}}
                @endauth
              </div>
            @endif
          </div>
    </header>
    
    <div class="container">
        <div class="title">Bienvenue sur SicilyLines</div> 
        <div class="slide">
            <div class="item" style="background-image: url(../sicile/port-digue.jpg);"></div>
            <div class="item" style="background-image: url(../sicile/arene.jpg);"></div>
            <div class="item" style="background-image: url(../sicile/falaise.jpg);"></div>
            <div class="item" style="background-image: url(../sicile/palerme.jpg);"></div>
            <div class="item" style="background-image: url(../sicile/mer_fond.jpg);"></div>
            <div class="item" style="background-image: url(../sicile/plage_maison.jpg);"></div>
        </div>

        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <script src="../js/welcome.js"></script>
</body>
</html>