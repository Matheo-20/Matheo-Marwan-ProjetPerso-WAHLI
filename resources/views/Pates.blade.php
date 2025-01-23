<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants de pâtes en Italie, où la tradition rencontre l'excellence culinaire.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Pâtes en Italie</title>
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

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleurs Restaurants de Pâtes en Italie</h1>
        <p>Découvrez l'excellence des pâtes italiennes</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Gourmand au Cœur de l'Italie</h2>
        <p>Les pâtes, symbole de la cuisine italienne, se déclinent en mille saveurs. Voici une sélection des meilleurs restaurants :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/osteria-francescana">Osteria Francescana</a></h3>
                <p><span>Adresse :</span> Via Stella, 22, 41121 Modène</p>
                <p><span>Contact :</span> +39 059 223912</p>
                <p>Ce restaurant étoilé propose une réinvention des plats de pâtes classiques avec une touche moderne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-carbonara">La Carbonara</a></h3>
                <p><span>Adresse :</span> Via Panisperna, 214, 00184 Rome</p>
                <p><span>Contact :</span> +39 06 4825176</p>
                <p>Fameux pour ses pâtes à la carbonara, préparées selon la recette traditionnelle romaine.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/trattoria-alla-madonna">Trattoria alla Madonna</a></h3>
                <p><span>Adresse :</span> Calle della Madonna, 594, 30125 Venise</p>
                <p><span>Contact :</span> +39 041 5223824</p>
                <p>Un établissement historique connu pour ses pâtes fraîches faites maison, accompagnées de fruits de mer.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/il-lucciola">Il Lucciola</a></h3>
                <p><span>Adresse :</span> Via Gramsci, 17, 40121 Bologne</p>
                <p><span>Contact :</span> +39 051 6490111</p>
                <p>Découvrez les fameuses tagliatelles al ragù, emblème de la cuisine bolognaise.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/da-cesare">Da Cesare al Casaletto</a></h3>
                <p><span>Adresse :</span> Via del Casaletto, 45, 00151 Rome</p>
                <p><span>Contact :</span> +39 06 536015</p>
                <p>Un lieu prisé pour ses pâtes cacio e pepe, un classique savoureux de la cuisine romaine.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
