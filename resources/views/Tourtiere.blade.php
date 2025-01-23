<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants au Canada où savourer une délicieuse tourtière, un plat emblématique de la cuisine québécoise.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Canadiens avec Tourtière</title>
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
        <h1>Les 5 Meilleurs Restaurants Canadiens avec Tourtière</h1>
        <p>Goûtez à l'authenticité de la cuisine québécoise avec une savoureuse tourtière maison, préparée selon les recettes traditionnelles.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Tourtière : Une Tradition Québécoise</h2>
        <p>La tourtière est un plat réconfortant, idéal pour les repas en famille ou entre amis. Voici nos adresses pour déguster cette spécialité canadienne :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-maison-de-la-tourtiere">La Maison de la Tourtière</a></h3>
                <p><span>Adresse :</span> 123 Rue Saint-Jean, Québec, QC G1R 1Z6</p>
                <p><span>Contact :</span> +1 418-123-4567</p>
                <p>Un restaurant spécialisé dans la tourtière, où chaque bouchée est un voyage dans la tradition culinaire du Québec.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bistro-du-vieux-port">Bistro du Vieux-Port</a></h3>
                <p><span>Adresse :</span> 125 Rue Saint-Paul, Montréal, QC H2Y 1A9</p>
                <p><span>Contact :</span> +1 514-234-5678</p>
                <p>Dans ce bistro pittoresque, la tourtière est préparée avec des ingrédients locaux frais et un secret bien gardé pour la pâte.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-pauline">Chez Pauline</a></h3>
                <p><span>Adresse :</span> 45 Rue du Commerce, Trois-Rivières, QC G8T 1N9</p>
                <p><span>Contact :</span> +1 819-345-6789</p>
                <p>Chez Pauline, la tourtière est l'élément phare du menu, accompagnée de sauces maison qui la rendent encore plus délicieuse.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-ferme-de-couillard">La Ferme de Couillard</a></h3>
                <p><span>Adresse :</span> 990 Chemin de la Ferme, Sainte-Famille, QC G0A 3P0</p>
                <p><span>Contact :</span> +1 418-567-8901</p>
                <p>Un endroit unique où la tourtière est préparée avec des produits du terroir, dans une ambiance chaleureuse et conviviale.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-cabane-a-casimir">La Cabane à Casimir</a></h3>
                <p><span>Adresse :</span> 345 Rue de l'Érable, Charlevoix, QC G0A 2L0</p>
                <p><span>Contact :</span> +1 418-987-6543</p>
                <p>Ce restaurant offre une version traditionnelle et moderne de la tourtière, avec une croûte dorée et une garniture savoureuse.</p>
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
