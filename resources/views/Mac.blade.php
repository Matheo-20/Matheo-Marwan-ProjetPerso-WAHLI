<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux États-Unis pour savourer des Mac and Cheese crémeux et gourmands.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Américains pour des Mac and Cheese</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent avec les autres pages */
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
        <h1>Les 5 Meilleurs Restaurants Américains pour des Mac and Cheese</h1>
        <p>Explorez des recettes de Mac and Cheese crémeux et gratinés dans les meilleurs restaurants américains.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Mac and Cheese : Un Plat Américain Confort par Excellence</h2>
        <p>Le Mac and Cheese, combinaison irrésistible de pâtes et de fromage, est un classique réconfortant. Découvrez nos suggestions :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/s-mac">S’Mac</a></h3>
                <p><span>Adresse :</span> 197 1st Avenue, New York, NY 10003</p>
                <p><span>Contact :</span> +1 212-358-7912</p>
                <p>S’Mac à New York propose une grande variété de Mac and Cheese, du classique à des versions revisitées.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/homeroom">Homeroom</a></h3>
                <p><span>Adresse :</span> 400 40th St, Oakland, CA 94609</p>
                <p><span>Contact :</span> +1 510-597-0400</p>
                <p>Homeroom est spécialisé dans le Mac and Cheese, avec des recettes maison et des ingrédients de qualité.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/jct-kitchen-bar">JCT Kitchen & Bar</a></h3>
                <p><span>Adresse :</span> 1198 Howell Mill Rd, Atlanta, GA 30318</p>
                <p><span>Contact :</span> +1 404-355-2252</p>
                <p>Ce restaurant d’Atlanta offre un Mac and Cheese riche et savoureux, parfait en accompagnement.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/smokestack">Smokestack</a></h3>
                <p><span>Adresse :</span> 2505 3rd St, San Francisco, CA 94107</p>
                <p><span>Contact :</span> +1 415-864-7469</p>
                <p>Ce restaurant de barbecue propose un Mac and Cheese fumé qui accompagne parfaitement leurs plats grillés.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-cheesecake-factory">The Cheesecake Factory</a></h3>
                <p><span>Adresse :</span> Plusieurs emplacements aux États-Unis</p>
                <p><span>Contact :</span> Vérifiez leur site officiel</p>
                <p>Bien que célèbre pour ses cheesecakes, ce restaurant propose également un Mac and Cheese crémeux incontournable.</p>
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
