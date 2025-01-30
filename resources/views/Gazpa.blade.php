<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en Espagne pour déguster un authentique gazpacho, une soupe froide emblématique de la cuisine espagnole.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Gazpacho en Espagne</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu */
            color: white;
            padding: 30px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 48px;
        }

        header p {
            font-size: 18px;
            font-style: italic;
        }

        /* Section principale */
        .main-content {
            padding: 40px 20px;
            text-align: center;
        }

        .main-content h2 {
            font-size: 36px;
            color: #3498db; /* Bleu */
        }

        .main-content p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }

        /* Liste des restaurants */
        .restaurant-list {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .restaurant {
            background-color: #fff;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .restaurant:hover {
            transform: translateY(-5px);
        }

        .restaurant h3 {
            font-size: 24px;
            color: #3498db; /* Bleu */
            margin-bottom: 10px;
        }

        .restaurant h3 a {
            text-decoration: none;
            color: #3498db; /* Bleu */
            transition: color 0.3s ease;
        }

        .restaurant h3 a:hover {
            color: #1abc9c; /* Vert clair */
        }

        .restaurant p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }

        .restaurant p span {
            font-weight: bold;
            color: #333;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 16px;
        }

        footer a {
            color: #3498db; /* Bleu */
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Les 5 Meilleurs Restaurants de Gazpacho en Espagne</h1>
        <p>Découvrez les meilleurs endroits en Espagne pour déguster un gazpacho rafraîchissant et authentique.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Gazpacho Frais et Savoureux</h2>
        <p>Le gazpacho, cette soupe froide andalouse, est un délice rafraîchissant parfait pour les journées chaudes. Voici une sélection des meilleurs restaurants où le savourer :</p>

        <div class="restaurant-list">
            <div class="restaurant">
                <h3><a href="/restaurant/la-azotea">La Azotea</a></h3>
                <p><span>Adresse :</span> Calle Zaragoza, 5, 41001 Séville</p>
                <p><span>Contact :</span> +34 954 22 74 35</p>
                <p>Un restaurant réputé pour son gazpacho andalou onctueux et bien assaisonné.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/la-barra-de-sandoval">La Barra de Sandoval</a></h3>
                <p><span>Adresse :</span> Paseo de la Castellana, 57, 28046 Madrid</p>
                <p><span>Contact :</span> +34 917 81 80 00</p>
                <p>Un établissement moderne servant un gazpacho revisité avec une touche gastronomique.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/bar-tomate">Bar Tomate</a></h3>
                <p><span>Adresse :</span> Calle Fernando el Santo, 26, 28010 Madrid</p>
                <p><span>Contact :</span> +34 917 02 38 70</p>
                <p>Un lieu branché où déguster un gazpacho traditionnel accompagné de tapas.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/los-gatos">Los Gatos</a></h3>
                <p><span>Adresse :</span> Calle de Jesús, 2, 28014 Madrid</p>
                <p><span>Contact :</span> +34 914 29 30 67</p>
                <p>Un bar typique où le gazpacho est préparé selon la recette andalouse traditionnelle.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/el-pimpi">El Pimpi</a></h3>
                <p><span>Adresse :</span> Calle Granada, 62, 29015 Málaga</p>
                <p><span>Contact :</span> +34 952 22 54 03</p>
                <p>Un lieu emblématique de Malaga proposant un gazpacho frais et plein de saveurs.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
