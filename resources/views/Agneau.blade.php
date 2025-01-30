<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Nouvelle-Zélande pour déguster de l'agneau de Nouvelle-Zélande, une viande savoureuse et réputée à travers le monde.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster de l'Agnau de Nouvelle-Zélande</title>
    <style>
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
        <h1>Les Meilleurs Restaurants pour Déguster de l'Agneau de Nouvelle-Zélande</h1>
        <p>Découvrez où savourer l'agneau de Nouvelle-Zélande, une viande réputée pour sa tendreté et sa saveur unique.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>L'Agneau de Nouvelle-Zélande : Un Délice Inégalé</h2>
        <p>Reconnu dans le monde entier pour sa qualité, l'agneau de Nouvelle-Zélande est un véritable trésor culinaire. Voici les meilleurs restaurants où vous pouvez déguster cette viande savoureuse :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/legendary-lamb">Legendary Lamb</a></h3>
                <p><span>Adresse :</span> 5 Lambington Road, Auckland</p>
                <p><span>Contact :</span> +64 9 123 4567</p>
                <p>Dans ce restaurant réputé, l'agneau de Nouvelle-Zélande est préparé de manière traditionnelle et servi avec des accompagnements modernes pour un goût incomparable.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-lamb-table">The Lamb Table</a></h3>
                <p><span>Adresse :</span> 27 Market Street, Wellington</p>
                <p><span>Contact :</span> +64 4 234 5678</p>
                <p>The Lamb Table propose une variété de plats à base d'agneau, cuisinés à la perfection et accompagnés de sauces maison qui mettent en valeur la tendreté de la viande.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/farm-to-table">Farm to Table</a></h3>
                <p><span>Adresse :</span> 48 Greenhill Road, Christchurch</p>
                <p><span>Contact :</span> +64 3 345 6789</p>
                <p>Farm to Table offre un menu qui célèbre l'agneau de Nouvelle-Zélande, en mettant l'accent sur les produits locaux et de saison dans chaque plat.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-lamb-bistro">The Lamb Bistro</a></h3>
                <p><span>Adresse :</span> 90 Riverside Avenue, Hamilton</p>
                <p><span>Contact :</span> +64 7 567 8901</p>
                <p>Au Lamb Bistro, vous pourrez déguster de l'agneau cuit à la perfection avec des recettes qui associent tradition et créativité pour un repas mémorable.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/royal-lamb">Royal Lamb</a></h3>
                <p><span>Adresse :</span> 33 Lamb Way, Rotorua</p>
                <p><span>Contact :</span> +64 7 678 9012</p>
                <p>Royal Lamb est un restaurant haut de gamme qui sert une variété de plats à base d'agneau, allant des côtelettes grillées aux ragoûts épicés, dans un cadre élégant.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
