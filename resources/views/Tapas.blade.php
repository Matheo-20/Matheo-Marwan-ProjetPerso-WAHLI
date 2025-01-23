<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster des tapas, une spécialité espagnole pleine de saveurs.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Tapas en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Tapas en France</h1>
        <p>Venez savourer une délicieuse sélection de tapas dans ces restaurants espagnols incontournables.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Tapas : Une Explosion de Saveurs</h2>
        <p>Les tapas sont une véritable tradition espagnole, et chaque bouchée est une invitation à voyager. Découvrez nos sélections :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-taberna-del-sol">La Taberna del Sol</a></h3>
                <p><span>Adresse :</span> 22 Rue des Vins, 69001 Lyon</p>
                <p><span>Contact :</span> +33 4 78 43 19 27</p>
                <p>Ce restaurant vous propose des tapas typiques, des classiques comme la tortilla, les croquetas, ainsi que des spécialités maison.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/els-tapas">Els Tapas</a></h3>
                <p><span>Adresse :</span> 15 Boulevard Montparnasse, 75006 Paris</p>
                <p><span>Contact :</span> +33 1 43 26 12 15</p>
                <p>Une adresse parfaite pour découvrir une large variété de tapas, avec une ambiance conviviale et des produits frais de qualité.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tapas-y-olives">Tapas y Olives</a></h3>
                <p><span>Adresse :</span> 30 Rue du Marais, 75003 Paris</p>
                <p><span>Contact :</span> +33 1 42 78 47 29</p>
                <p>Venez savourer une sélection de tapas authentiques dans ce restaurant au décor espagnol traditionnel, accompagné de vins délicieux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/una-tapas">Una Tapas</a></h3>
                <p><span>Adresse :</span> 8 Place de la République, 31000 Toulouse</p>
                <p><span>Contact :</span> +33 5 61 52 22 13</p>
                <p>Un restaurant qui propose une variété de tapas créatives, avec des ingrédients frais et une ambiance chaleureuse typique de l'Espagne.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/els-bonitos">Els Bonitos</a></h3>
                <p><span>Adresse :</span> 18 Rue de la Plage, 13200 Marseille</p>
                <p><span>Contact :</span> +33 4 91 85 91 62</p>
                <p>Un restaurant espagnol incontournable à Marseille, offrant une expérience authentique de tapas à partager, avec une excellente sélection de vins.</p>
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
