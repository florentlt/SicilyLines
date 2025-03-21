<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/pdf.css">
    <title>Liste des Bateaux</title>
</head>
<body>
    <h1>{{ $titre }}</h1>
    <h3>Date : {{ $date }}</h3>

    @foreach($ferrys as $ferry)
    <div>
        <h2>Nom du Bateau : {{ $ferry->nom }}</h2>

        @if(!empty($ferry->photo))
        <img src="{{ public_path('sicile/'.$ferry->photo) }}" alt="Photo du bateau" style="width: 400px; height: auto;">
        @else
            <p>Aucune image disponible</p>
        @endif

        <table>
            <tr>
                <th>Longueur</th>
                <th>Largeur</th>
                <th>Vitesse</th>
                <th>Équipements</th>
            </tr>
            <tr>
                <td>{{ $ferry->longueur }} mètres</td>
                <td>{{ $ferry->largeur }} mètres</td>
                <td>{{ $ferry->vitesse }} nœuds</td>
                <td>
                    <ul>
                        @foreach($ferry->equipements as $equipement)
                            <li>{{ $equipement->libelle }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <!-- Saut de page après chaque bateau -->
    <div style="page-break-before: always;"></div>
@endforeach

</body>
</html>