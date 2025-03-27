<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Bateaux</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f4f7f6;
            color: #2c3e50;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .header {
            background-color: #17325b;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .header h3 {
            font-size: 18px;
            font-weight: 300;
            opacity: 0.9;
        }

        .ferry-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 800px;
            padding: 40px;
            border: 1px solid #e0e0e0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 90vh;
            margin: 20px 0;
        }

        .ferry-title {
            color: #17325b;
            border-bottom: 3px solid #17325b;
            padding-bottom: 10px;
            margin-bottom: 30px;
            text-align: center;
            width: 100%;
        }

        .ferry-image {
            max-width: 100%;
            max-height: 50vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
            margin: 30px 0;
        }

        .ferry-details {
            width: 100%;
            margin-top: auto;
        }

        .ferry-details table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
        }

        .ferry-details th {
            background-color: #17325b;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .ferry-details td {
            padding: 15px;
            text-align: center;
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
        }

        .ferry-details td:nth-child(even) {
            background-color: #f1f1f1;
        }

        .equipment-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .equipment-list li {
            background-color: #17325b;
            color: white;
            padding: 5px 10px;
            margin: 3px;
            border-radius: 20px;
            font-size: 12px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $titre }}</h1>
        <h3>Date : {{ $date }}</h3>
    </div>

    @foreach($ferrys as $ferry)
    <div class="ferry-container">
        <h2 class="ferry-title">Nom du Bateau : {{ $ferry->nom }}</h2>
        
        @if(!empty($ferry->photo))
        <img src="{{ public_path('sicile/'.$ferry->photo) }}" alt="Photo du bateau" class="ferry-image">
        @else
        <p class="no-image">Aucune image disponible</p>
        @endif
        
        <div class="ferry-details">
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
                        <ul class="equipment-list">
                            @foreach($ferry->equipements as $equipement)
                                <li>{{ $equipement->libelle }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    @if (!$loop->last)
    <div class="page-break"></div>
    @endif
    @endforeach
</body>
</html>