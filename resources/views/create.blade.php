<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Gudea:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/create.css">
    <title>Création d'un Bateau</title>
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
                <img src="../sicile/palerme.jpg" alt="Bateau">
            </div>

<div>
    <div>
        
        <form action="{{ route('ferry.store') }}" method="POST" enctype="multipart/form-data">
            <h2 class="page-title">Création d'un Bateau</h2>
            @csrf
            <div>
                <label class="label-form" for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Nom du ferry" value="{{ old('nom') }}">
                @error('nom')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="label-form" for="longueur">Longueur</label>
                <input type="text" name="longueur" id="longueur" placeholder="Longueur en mètres" value="{{ old('longueur') }}">
                @error('longueur')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="label-form" for="largeur">Largeur</label>
                <input type="text" name="largeur" id="largeur" placeholder="Largeur en mètres" value="{{ old('largeur') }}">
                @error('largeur')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="label-form" for="vitesse">Vitesse</label>
                <input type="text" name="vitesse" id="vitesse" placeholder="Vitesse en noeuds" value="{{ old('vitesse') }}">
                @error('vitesse')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="label-form" for="photo">Télécharger la photo</label>
                <input type="file" name="photo" id="photo" placeholder="Choisissez un fichier" value="{{ old('photo') }}">
                @error('photo')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <label class="label-form">Equipements</label>
            <div>
                @foreach ($equipements as $equipement)
                    <input type="checkbox" name="equipement_id[]" value="{{ $equipement->id }}">
                    <label>{{ $equipement->libelle }}</label><br>
                @endforeach
            </div>  

            <div>
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
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