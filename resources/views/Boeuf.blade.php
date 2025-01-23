<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster un authentique bœuf bourguignon, un classique de la cuisine française.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Bœuf Bourguignon en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Bœuf Bourguignon en France</h1>
        <p>Savourez la tradition culinaire française dans toute sa splendeur</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Iconique de la Bourgogne</h2>
        <p>Le bœuf bourguignon, mijoté lentement avec du vin rouge et des aromates, est une célébration des saveurs françaises. Voici nos suggestions :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-mere-brazier">La Mère Brazier</a></h3>
                <p><span>Adresse :</span> 12 Rue Royale, 69001 Lyon</p>
                <p><span>Contact :</span> +33 4 78 23 17 20</p>
                <p>Ce restaurant légendaire propose un bœuf bourguignon sublimé par des ingrédients de première qualité.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/au-petit-marguery">Au Petit Marguery</a></h3>
                <p><span>Adresse :</span> 9 Bd de Port-Royal, 75013 Paris</p>
                <p><span>Contact :</span> +33 1 43 31 58 59</p>
                <p>Connu pour ses plats traditionnels, leur bœuf bourguignon est une expérience gastronomique incontournable.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-bouchon-bourguignon">Le Bouchon Bourguignon</a></h3>
                <p><span>Adresse :</span> 14 Rue Vauban, 21000 Dijon</p>
                <p><span>Contact :</span> +33 3 80 41 12 34</p>
                <p>Situé au cœur de la Bourgogne, ce restaurant propose une version authentique et généreuse du plat.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-fred">Chez Fred</a></h3>
                <p><span>Adresse :</span> 10 Place Carnot, 69002 Lyon</p>
                <p><span>Contact :</span> +33 4 72 56 14 14</p>
                <p>Une adresse lyonnaise célèbre pour son bœuf bourguignon à l'ancienne, servi avec des pommes vapeur.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-fleurie">Le Fleurie</a></h3>
                <p><span>Adresse :</span> 3 Place du Château, 21200 Beaune</p>
                <p><span>Contact :</span> +33 3 80 24 45 67</p>
                <p>Situé à Beaune, au cœur des vignobles, ce restaurant offre un bœuf bourguignon délicieusement parfumé au vin local.</p>
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
