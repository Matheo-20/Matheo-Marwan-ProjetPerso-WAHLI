<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Japon pour savourer des Okonomiyaki, une spécialité japonaise délicieuse et personnalisable.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Okonomiyaki au Japon</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Okonomiyaki</h1>
        <p>Découvrez où savourer cette spécialité japonaise incontournable</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Une Délicieuse Crêpe Japonaise</h2>
        <p>Les Okonomiyaki, souvent appelés "crêpes japonaises", sont préparés avec des ingrédients variés selon vos goûts. Voici les meilleurs restaurants au Japon pour les savourer :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/osaka-okonomi">Osaka Okonomi House</a></h3>
                <p><span>Adresse :</span> Namba District, Osaka</p>
                <p><span>Contact :</span> +81 6 1234 5678</p>
                <p>Un incontournable pour déguster les Okonomiyaki traditionnels d'Osaka, avec une variété infinie de garnitures.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/hiroshima-grill">Hiroshima Grill</a></h3>
                <p><span>Adresse :</span> Central Hiroshima</p>
                <p><span>Contact :</span> +81 82 3456 7890</p>
                <p>Célèbre pour sa version locale des Okonomiyaki, avec des nouilles et des couches d'ingrédients savoureux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tokyo-taste">Tokyo Taste</a></h3>
                <p><span>Adresse :</span> Shinjuku, Tokyo</p>
                <p><span>Contact :</span> +81 3 2345 6789</p>
                <p>Tokyo Taste combine tradition et modernité pour proposer des Okonomiyaki uniques dans un cadre chic.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kyoto-flavors">Kyoto Flavors</a></h3>
                <p><span>Adresse :</span> Gion District, Kyoto</p>
                <p><span>Contact :</span> +81 75 4567 8910</p>
                <p>Un petit restaurant charmant qui met en valeur des ingrédients locaux dans ses Okonomiyaki faits maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/nagoya-street">Nagoya Street Okonomiyaki</a></h3>
                <p><span>Adresse :</span> Sakae, Nagoya</p>
                <p><span>Contact :</span> +81 52 8765 4321</p>
                <p>Réputé pour ses portions généreuses et ses sauces maison qui accompagnent parfaitement les Okonomiyaki.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
