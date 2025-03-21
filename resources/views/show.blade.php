<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Gudea:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/show.css">
    <title>Description de {{$ferry->nom}}</title>
</head>
<body>
    <header class="navbar">
        <div class="nav-left">
            <img src="../sicile/logo.png" alt="Logo" class="logo">
        </div>
        <div class="nav-right">
            <a class="accueil" href="{{ url('/ferry') }}">Retour</a>
        </div>
    </header>

    <main class="container">
        
        <div class="content">
            <div class="image-container">
                <h1 class="page-title">Description du bateau</h1>
                <img src="../sicile/{{ $ferry->photo }}" alt="Bateau">
            </div>

            <div class="info">
                <h2>Information</h2>
                <hr>
                <p>
                    Le bateau mesure {{$ferry->longueur}} mètres de longueur pour {{$ferry->largeur}} mètres de largeur, 
                    il peut atteindre une vitesse de {{$ferry->vitesse}} nœuds, et est équipé d'un 
                    {{ implode(', ', $ferry->equipements->pluck('libelle')->toArray()) }}.
                </p>
                
                
                <h2>Fiche Technique</h2>
                <hr>
                <ul>
                    <li>Longueur : {{$ferry->longueur}} mètres</li>
                    <li>Largeur : {{$ferry->largeur}} mètres</li>
                    <li>Vitesse : {{$ferry->vitesse}} nœuds</li>
                </ul>

                <h2>Liste des équipements</h2>
                <hr>
                <ul>
                    @foreach($ferry->equipements as $equipement)
        <li>- {{$equipement->libelle}}</li>
    @endforeach
                </ul>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>© - SicilyLines 2024 Tous droits réservés</p>
        <div class="footer-links">
            <a href="#">Politique de confidentialité</a>
            <a href="#">Mentions légales</a>
        </div>
    </footer>
</body>
</html>