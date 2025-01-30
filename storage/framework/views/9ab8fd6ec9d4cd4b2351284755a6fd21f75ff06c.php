<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Thaïlande pour déguster un délicieux Som Tam, une salade thaïlandaise épicée à base de papaye verte, de noix de cajou, et de piments.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster un Som Tam en Thaïlande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Som Tam en Thaïlande</h1>
        <p>Venez savourer le fameux Som Tam, une salade thaïlandaise épicée à base de papaye verte et d'ingrédients frais et savoureux.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Som Tam : La Salade Thaïlandaise Épicée et Savoureuse</h2>
        <p>Le Som Tam est une salade populaire en Thaïlande, préparée à base de papaye verte râpée, piment, ail, tomates, noix de cajou et autres ingrédients savoureux. Découvrez où déguster les meilleurs Som Tam dans les restaurants thaïlandais :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/som-tam-delight">Som Tam Delight</a></h3>
                <p><span>Adresse :</span> 23 Sukhumvit Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 1234 5678</p>
                <p>Un restaurant réputé pour son Som Tam épicé et délicieux, avec des saveurs authentiques qui vous rappellent la Thaïlande traditionnelle.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/spicy-som-tam">Spicy Som Tam</a></h3>
                <p><span>Adresse :</span> 45 Khao San Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 2345 6789</p>
                <p>Leur Som Tam est incroyablement épicé et plein de saveurs fraîches, parfait pour ceux qui aiment les plats relevés.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/som-tam-fusion">Som Tam Fusion</a></h3>
                <p><span>Adresse :</span> 12 Thanon Phetchaburi, Bangkok</p>
                <p><span>Contact :</span> +66 2 3456 7890</p>
                <p>Une version moderne du Som Tam avec des touches créatives tout en préservant l'authenticité du plat traditionnel thaïlandais.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fresh-som-tam">Fresh Som Tam</a></h3>
                <p><span>Adresse :</span> 8 Silom Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 4567 8910</p>
                <p>Connu pour sa version fraîche et légère du Som Tam, avec des ingrédients croquants et un assaisonnement parfait.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/som-tam-king">Som Tam King</a></h3>
                <p><span>Adresse :</span> 16 Rama IX Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 5678 1234</p>
                <p>Un restaurant populaire servant un Som Tam classique avec un excellent rapport qualité-prix. Parfait pour une pause déjeuner thaïlandaise authentique.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Som.blade.php ENDPATH**/ ?>