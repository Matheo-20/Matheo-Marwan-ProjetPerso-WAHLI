<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Nouvelle-Zélande pour déguster des Cheese Rolls, une spécialité savoureuse et populaire du pays.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Cheese Rolls en Nouvelle-Zélande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Cheese Rolls en Nouvelle-Zélande</h1>
        <p>Découvrez où savourer des Cheese Rolls, une spécialité unique et populaire de la Nouvelle-Zélande.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Les Cheese Rolls : Une Délicieuse Spécialité Néo-Zélandaise</h2>
        <p>Les Cheese Rolls sont un incontournable de la cuisine néo-zélandaise. Savourez cette spécialité à base de fromage, fondante et réconfortante, dans les meilleurs restaurants du pays.</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cheese-roll-cafe">Cheese Roll Cafe</a></h3>
                <p><span>Adresse :</span> 123 Cheese Street, Dunedin</p>
                <p><span>Contact :</span> +64 3 456 7890</p>
                <p>Spécialisé dans les Cheese Rolls, ce café est un lieu incontournable à Dunedin pour découvrir cette délicieuse spécialité servie chaude et crémeuse.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-cheese-roll-house">The Cheese Roll House</a></h3>
                <p><span>Adresse :</span> 76 Lambton Quay, Wellington</p>
                <p><span>Contact :</span> +64 4 567 8901</p>
                <p>Ce restaurant met l'accent sur la tradition des Cheese Rolls, en offrant une gamme variée de recettes et de garnitures pour satisfaire tous les goûts.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cheese-roll-bistro">Cheese Roll Bistro</a></h3>
                <p><span>Adresse :</span> 45 Victoria Street, Hamilton</p>
                <p><span>Contact :</span> +64 7 678 9012</p>
                <p>Au Cheese Roll Bistro, vous découvrirez des Cheese Rolls faits maison avec des ingrédients frais et locaux, dans un cadre décontracté et convivial.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/roll-and-cheese">Roll and Cheese</a></h3>
                <p><span>Adresse :</span> 32 Queen Street, Auckland</p>
                <p><span>Contact :</span> +64 9 789 0123</p>
                <p>Roll and Cheese est un restaurant charmant où les Cheese Rolls sont préparés avec soin, offrant une expérience unique de saveurs fondantes et savoureuses.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cheese-roll-corner">Cheese Roll Corner</a></h3>
                <p><span>Adresse :</span> 12 Market Street, Christchurch</p>
                <p><span>Contact :</span> +64 3 890 1234</p>
                <p>Ce coin incontournable de Christchurch est un paradis pour les amateurs de Cheese Rolls, offrant des recettes originales et des combinaisons de saveurs innovantes.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
