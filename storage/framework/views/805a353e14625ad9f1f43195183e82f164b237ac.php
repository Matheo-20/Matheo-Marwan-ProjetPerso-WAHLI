<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Pakistan pour déguster du Haleem, un plat traditionnel savoureux et réconfortant de la cuisine pakistanaise.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster du Haleem au Pakistan</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Haleem au Pakistan</h1>
        <p>Venez savourer du Haleem, un plat traditionnel délicieux et réconfortant, dans les meilleurs restaurants du Pakistan.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Haleem : Un Mélange Savoureux de Viande, Blé et Lentilles</h2>
        <p>Le Haleem est un plat traditionnel du Pakistan, à base de viande, blé, lentilles et épices, mijoté lentement pour révéler des saveurs profondes et riches. Découvrez où le déguster au Pakistan :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/haleem-house">Haleem House</a></h3>
                <p><span>Adresse :</span> 123 Main Street, Lahore</p>
                <p><span>Contact :</span> +92 42 1234 5678</p>
                <p>Haleem House est réputé pour son Haleem épicé, servi chaud avec des garnitures de coriandre et de gingembre frais.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/karachi-haleem">Karachi Haleem</a></h3>
                <p><span>Adresse :</span> 56 Saddar Road, Karachi</p>
                <p><span>Contact :</span> +92 21 2345 6789</p>
                <p>Karachi Haleem propose une version authentique du Haleem, un vrai délice pour les amateurs de cuisine épicée et savoureuse.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tandoor-haleem">Tandoor Haleem</a></h3>
                <p><span>Adresse :</span> 78 Gulberg, Lahore</p>
                <p><span>Contact :</span> +92 42 3456 7890</p>
                <p>Tandoor Haleem est l'endroit où la tradition du Haleem est respectée, avec une recette secrète qui lui donne une saveur unique.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/haleem-tandoori">Haleem Tandoori</a></h3>
                <p><span>Adresse :</span> 12 M. A. Jinnah Road, Rawalpindi</p>
                <p><span>Contact :</span> +92 51 4567 8910</p>
                <p>Haleem Tandoori est un lieu populaire pour sa version traditionnelle, préparée à base de viande fondante et d'épices locales.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/haleem-king">Haleem King</a></h3>
                <p><span>Adresse :</span> 90 Ferozepur Road, Lahore</p>
                <p><span>Contact :</span> +92 42 5678 1234</p>
                <p>Haleem King offre un Haleem exceptionnel, avec une texture parfaite et une richesse de saveurs.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Haleem.blade.php ENDPATH**/ ?>