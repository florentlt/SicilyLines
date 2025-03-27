<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Gudea:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">

    <title>Les Bateaux</title>
</head>
<body>
    <header class="navbar">
        <div class="nav-left">
            <img src="../sicile/logo.png" alt="Logo" class="logo">
            <a href="{{ route('ferry.create') }}" style="margin-right: 10px;">Ajouter un bateau</a>
            <a href="{{ route('pdf') }}">Générer le PDF</a>
        </div>
        <div class="nav-right">
            <a class="accueil" href="{{ url('/') }}">Retour</a>
        </div>
    </header>
    <h1 class="page-title">Les Bateaux</h1>
    @foreach($ferrys as $ferry)
            <div class="card">
                <a href="{{ route('ferry.show', $ferry->id) }}" class="card-link">
                    <img src= "../sicile/{{ $ferry->photo }}">
                
                <div class="card-footer">
                    <h3>{{ $ferry->nom}}</h3>
                    <form action="{{ route('ferry.destroy', $ferry->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce bateau ?')">Supprimer</button>
                    </form>
                </div>
            </div>
        </a>
            @endforeach
            <footer class="footer">
                <p>© - SicilyLines 2024 Tous droits réservés</p>
                <div class="footer-links">
                    <a href="#">Politique de confidentialité</a>
                    <a href="#">Mentions légales</a>
                </div>
            </footer>
</body>
</html>