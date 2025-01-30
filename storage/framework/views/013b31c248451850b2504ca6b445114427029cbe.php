<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Thaïlande pour déguster un délicieux Pad Thai, un incontournable de la cuisine thaïlandaise.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster un Pad Thai en Thaïlande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Pad Thai en Thaïlande</h1>
        <p>Venez savourer l'authenticité du Pad Thai dans les meilleures adresses de Thaïlande</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Plat Indémodable de la Cuisine Thaïlandaise</h2>
        <p>Le Pad Thai, un plat de nouilles sautées aux saveurs équilibrées, est un incontournable de la cuisine thaïlandaise. Voici nos meilleures suggestions :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/thai-food-haven">Thai Food Haven</a></h3>
                <p><span>Adresse :</span> 12 Sukhumvit Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 1234 5678</p>
                <p>Un restaurant populaire à Bangkok, offrant un Pad Thai traditionnel avec des ingrédients frais et savoureux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pad-thai-street">Pad Thai Street</a></h3>
                <p><span>Adresse :</span> 14-16 Khao San Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 2345 6789</p>
                <p>Un incontournable pour les amateurs de street food, ce restaurant sert un Pad Thai savoureux et authentique à prix abordable.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pad-thai-factory">Pad Thai Factory</a></h3>
                <p><span>Adresse :</span> 22 Rama IX Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 3456 7890</p>
                <p>Spécialisé dans le Pad Thai, ce restaurant vous propose des recettes créatives avec une touche moderne de ce plat classique.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pad-thai-original">Pad Thai Original</a></h3>
                <p><span>Adresse :</span> 18-20 Silom Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 4567 8910</p>
                <p>Venez déguster un Pad Thai traditionnel, cuit à la perfection avec des ingrédients authentiques de Thaïlande.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/thaifood-king">ThaiFood King</a></h3>
                <p><span>Adresse :</span> 10 Thanon Phetchaburi, Bangkok</p>
                <p><span>Contact :</span> +66 2 5678 1234</p>
                <p>Un endroit idéal pour goûter un Pad Thai avec des garnitures diverses, pour une expérience de saveurs authentiques.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Pad.blade.php ENDPATH**/ ?>