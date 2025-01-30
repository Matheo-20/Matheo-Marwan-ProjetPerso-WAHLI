<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Maroc pour savourer une authentique pastilla, un plat marocain traditionnel sucré-salé.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster une Pastilla au Maroc</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster une Pastilla au Maroc</h1>
        <p>Un plat traditionnel sucré-salé, symbole de la richesse culinaire marocaine.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Pastilla : Un Plat Traditionnel Maroco-Andalou</h2>
        <p>La pastilla est un délice sucré-salé composé de viande (généralement du pigeon ou du poulet) et d'amandes, enveloppé dans une pâte fine. Ce plat est un incontournable de la cuisine marocaine. Voici quelques restaurants au Maroc où vous pouvez savourer une pastilla authentique :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurant-pastilla-marrakech">Restaurant Pastilla Marrakech</a></h3>
                <p><span>Adresse :</span> Rue Moulay Ali, Médina, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 38 56 32</p>
                <p>Un restaurant célèbre à Marrakech pour ses pastillas traditionnelles, savamment préparées avec du poulet, des amandes et un subtil mélange d'épices.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/riad-pastilla">Riad Pastilla</a></h3>
                <p><span>Adresse :</span> Riad Zitoune, Fès, Maroc</p>
                <p><span>Contact :</span> +212 5 35 63 25 40</p>
                <p>Dans ce riad, vous pourrez déguster une pastilla royale avec des pigeons, agrémentée d'une touche sucrée grâce aux amandes et à la cannelle.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurant-pastilla-casablanca">Restaurant Pastilla Casablanca</a></h3>
                <p><span>Adresse :</span> Boulevard Mohammed V, Casablanca, Maroc</p>
                <p><span>Contact :</span> +212 5 22 30 89 67</p>
                <p>Un incontournable à Casablanca, connu pour ses pastillas exquises aux saveurs délicates et son mélange de sucré et de salé parfaitement équilibré.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-riad-de-la-pastilla">Le Riad de la Pastilla</a></h3>
                <p><span>Adresse :</span> Avenue de la Médina, Rabat, Maroc</p>
                <p><span>Contact :</span> +212 5 37 75 56 89</p>
                <p>Spécialisé dans la pastilla, ce restaurant offre une version exceptionnelle au poulet, parfaitement épicée et préparée avec des ingrédients frais et locaux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pastilla-et-couscous">Pastilla et Couscous</a></h3>
                <p><span>Adresse :</span> Place Souk, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 42 21 10</p>
                <p>Ce restaurant offre une pastilla aux saveurs exquises, alliant la douceur des amandes et la richesse des épices marocaines pour une expérience unique.</p>
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
