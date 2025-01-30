<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Maroc pour savourer un couscous authentique, un plat traditionnel riche en saveurs et en épices.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster du Couscous au Maroc</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster du Couscous au Maroc</h1>
        <p>Un plat traditionnel marocain, riche en saveurs et épices, incontournable dans la cuisine du pays.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Couscous : Un Plat Traditionnel du Maroc</h2>
        <p>Le couscous, préparé avec des légumes, des viandes et des épices, est un plat savoureux au cœur de la gastronomie marocaine. Voici quelques restaurants où vous pourrez déguster ce mets délicieux au Maroc :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurant-moroccan-couscous">Restaurant Moroccan Couscous</a></h3>
                <p><span>Adresse :</span> Rue de la Médina, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 38 21 45</p>
                <p>Un restaurant réputé pour son couscous aux légumes, parfumé et généreux, idéalement situé dans la médina de Marrakech.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/riad-couscous">Riad Couscous</a></h3>
                <p><span>Adresse :</span> Riad Zitoune, Fès, Maroc</p>
                <p><span>Contact :</span> +212 5 35 63 71 98</p>
                <p>Ce riad offre un couscous royal accompagné de viandes grillées et de légumes, un délice pour les amateurs de cuisine marocaine.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/couscous-royal">Couscous Royal</a></h3>
                <p><span>Adresse :</span> Place Jemaa El-Fna, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 38 56 23</p>
                <p>Un endroit emblématique pour goûter à un couscous royal préparé selon les traditions culinaires marocaines.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-ali-couscous">Chez Ali Couscous</a></h3>
                <p><span>Adresse :</span> Avenue Mohammed V, Casablanca, Maroc</p>
                <p><span>Contact :</span> +212 5 22 30 39 28</p>
                <p>Un restaurant populaire à Casablanca, où vous pourrez savourer un couscous accompagné de viande d'agneau et de légumes frais.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/couscous-et-tajine">Couscous et Tajine</a></h3>
                <p><span>Adresse :</span> Rue Moulay Idriss, Rabat, Maroc</p>
                <p><span>Contact :</span> +212 5 37 75 12 34</p>
                <p>Un restaurant traditionnel offrant des couscous savoureux, préparés avec des produits frais et une touche d'épices locales.</p>
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
