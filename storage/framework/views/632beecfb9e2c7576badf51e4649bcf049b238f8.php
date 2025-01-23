<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux États-Unis pour déguster un burger américain classique, gourmet ou végétarien.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants Américains pour Déguster un Burger</title>
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
        <h1>Les 5 Meilleurs Restaurants Américains pour Déguster un Burger</h1>
        <p>Des burgers classiques aux créations gourmet, explorez les meilleurs restaurants aux États-Unis pour un burger inoubliable.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Burgers Américains : Un Classique Incontournable</h2>
        <p>Les États-Unis sont le berceau du burger. Découvrez notre sélection des meilleurs restaurants où déguster un burger savoureux et original :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/in-n-out-burger">In-N-Out Burger</a></h3>
                <p><span>Adresse :</span> 1245 W Holly Ave, Baldwin Park, CA 91706</p>
                <p><span>Contact :</span> +1 800-786-1000</p>
                <p>In-N-Out est un symbole des burgers classiques de Californie, avec ses ingrédients frais et ses recettes simples mais délicieuses.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/shake-shack">Shake Shack</a></h3>
                <p><span>Adresse :</span> 691 8th Ave, New York, NY 10036</p>
                <p><span>Contact :</span> +1 212-889-6600</p>
                <p>Une chaîne new-yorkaise réputée pour ses burgers gourmet, servis avec une grande variété de garnitures et de sauces maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-burger-joint">The Burger Joint</a></h3>
                <p><span>Adresse :</span> 33 W 8th St, New York, NY 10011</p>
                <p><span>Contact :</span> +1 212-462-4000</p>
                <p>Un endroit populaire à New York pour des burgers juteux servis dans un cadre simple et décontracté. Les frites sont également incontournables.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/joe-burger">Joe's Burger</a></h3>
                <p><span>Adresse :</span> 321 Main St, Nashville, TN 37203</p>
                <p><span>Contact :</span> +1 615-555-1234</p>
                <p>Un restaurant local à Nashville où l'on sert des burgers faits maison, préparés à la perfection avec des produits locaux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/umami-burger">Umami Burger</a></h3>
                <p><span>Adresse :</span> 8502 W 3rd St, Los Angeles, CA 90048</p>
                <p><span>Contact :</span> +1 323-655-8800</p>
                <p>Spécialisé dans les burgers gourmet avec des saveurs uniques, Umami Burger offre une expérience culinaire différente pour les amateurs de viande et de légumes.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Burger.blade.php ENDPATH**/ ?>