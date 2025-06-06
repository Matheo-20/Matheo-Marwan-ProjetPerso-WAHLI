<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Thaïlande pour déguster un délicieux curry vert, un plat thaïlandais savoureux à base de lait de coco, de curry vert et d'herbes fraîches.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster un Curry Vert en Thaïlande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Curry Vert en Thaïlande</h1>
        <p>Venez découvrir la richesse de la cuisine thaïlandaise avec ce curry épicé et parfumé à base de lait de coco et d'herbes fraîches.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Le Curry Vert Thaïlandais</h2>
        <p>Le curry vert est l'un des plats les plus emblématiques de la cuisine thaïlandaise, un parfait équilibre de saveurs épicées, sucrées et acides. Voici les meilleurs restaurants où le déguster :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/green-curry-delight">Green Curry Delight</a></h3>
                <p><span>Adresse :</span> 15 Sukhumvit Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 1234 5678</p>
                <p>Un restaurant réputé pour son curry vert onctueux, avec un juste équilibre entre les épices et la douceur du lait de coco.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/spicy-green-curry">Spicy Green Curry</a></h3>
                <p><span>Adresse :</span> 18-20 Khao San Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 2345 6789</p>
                <p>Ce restaurant se distingue par sa version extra-piquante du curry vert, idéale pour les amateurs de sensations fortes.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/royal-green-curry">Royal Green Curry</a></h3>
                <p><span>Adresse :</span> 25 Rama IX Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 3456 7890</p>
                <p>Un endroit élégant pour déguster un curry vert authentique, préparé avec des ingrédients frais et de qualité supérieure.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/thai-green-curry">Thai Green Curry</a></h3>
                <p><span>Adresse :</span> 12 Silom Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 4567 8910</p>
                <p>Un cadre décontracté pour savourer un curry vert qui mêle harmonieusement les épices locales et la douceur du lait de coco.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/curry-green-palace">Curry Green Palace</a></h3>
                <p><span>Adresse :</span> 8 Thanon Phetchaburi, Bangkok</p>
                <p><span>Contact :</span> +66 2 5678 1234</p>
                <p>Le meilleur curry vert en ville, avec des arômes riches et une texture crémeuse, parfait pour une expérience culinaire thaïlandaise authentique.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Curry.blade.php ENDPATH**/ ?>