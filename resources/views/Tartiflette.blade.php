<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France où déguster une délicieuse tartiflette, un plat savoyard incontournable.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Tartiflette en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Tartiflette en France</h1>
        <p>Venez savourer la tartiflette, un plat montagnard réconfortant, dans ces adresses incontournables.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Spécialité Savoyarde à Déguster</h2>
        <p>La tartiflette, composée de pommes de terre, de lardons, d'oignons et de fromage reblochon, est l'un des plats les plus réconfortants de la cuisine alpine. Découvrez les meilleurs restaurants pour goûter cette spécialité :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/au-mont-blanc">Au Mont-Blanc</a></h3>
                <p><span>Adresse :</span> 12 Rue des Alpes, 74000 Chamonix</p>
                <p><span>Contact :</span> +33 4 50 55 12 34</p>
                <p>Au cœur de Chamonix, ce restaurant vous propose une tartiflette généreuse, réalisée avec du reblochon fondant et des produits locaux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-tartiflette-dor">La Tartiflette d'Or</a></h3>
                <p><span>Adresse :</span> 6 Rue du Mont, 73100 Aix-les-Bains</p>
                <p><span>Contact :</span> +33 4 79 88 23 45</p>
                <p>Un restaurant où la tartiflette est une véritable institution, servie avec une touche de modernité tout en respectant les traditions savoyardes.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-pins-bleus">Les Pins Bleus</a></h3>
                <p><span>Adresse :</span> 25 Boulevard de la Montagne, 06560 Menton</p>
                <p><span>Contact :</span> +33 4 93 35 67 89</p>
                <p>Un restaurant montagnard typique offrant une tartiflette authentique et réconfortante, avec une vue imprenable sur les montagnes environnantes.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-tartiflette-du-village">La Tartiflette du Village</a></h3>
                <p><span>Adresse :</span> 33 Place du Marché, 38350 Savoie</p>
                <p><span>Contact :</span> +33 4 76 82 95 60</p>
                <p>Un cadre chaleureux et convivial où vous dégusterez une tartiflette riche et savoureuse, comme à la maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-les-savoyards">Chez les Savoyards</a></h3>
                <p><span>Adresse :</span> 44 Rue de la Montagne, 74200 Thonon-les-Bains</p>
                <p><span>Contact :</span> +33 4 50 80 33 88</p>
                <p>Une adresse incontournable pour goûter à la meilleure tartiflette de la région, servie dans une ambiance typique et conviviale.</p>
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
