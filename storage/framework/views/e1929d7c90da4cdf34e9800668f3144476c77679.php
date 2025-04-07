<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Australie pour déguster une délicieuse Meat Pie, une spécialité de la cuisine australienne.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster une Meat Pie en Australie</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster une Meat Pie en Australie</h1>
        <p>Venez découvrir la meilleure version de la Meat Pie, un plat traditionnel australien, dans ces restaurants incontournables.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Meat Pie : La Tradition Australienne en Pâtisserie</h2>
        <p>La Meat Pie, une pâtisserie salée remplie de viande hachée, est un plat populaire en Australie. Découvrez où vous pouvez goûter cette spécialité dans les meilleurs restaurants :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/meat-pie-house">Meat Pie House</a></h3>
                <p><span>Adresse :</span> 123 Queen Street, Sydney</p>
                <p><span>Contact :</span> +61 2 1234 5678</p>
                <p>Meat Pie House est le lieu de prédilection pour une expérience authentique avec des Meat Pies faits maison, garnis de viande juteuse et d’épices savoureuses.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/aussie-pie">Aussie Pie</a></h3>
                <p><span>Adresse :</span> 56 King Street, Melbourne</p>
                <p><span>Contact :</span> +61 3 2345 6789</p>
                <p>Aussie Pie sert des Meat Pies classiques accompagnées de sauce brune maison, dans une ambiance chaleureuse et conviviale.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pie-king">Pie King</a></h3>
                <p><span>Adresse :</span> 90 Collins Street, Brisbane</p>
                <p><span>Contact :</span> +61 7 4567 8901</p>
                <p>Pie King propose une sélection de Meat Pies, y compris des versions avec des garnitures uniques comme le fromage et les champignons.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pie-society">Pie Society</a></h3>
                <p><span>Adresse :</span> 78 Darling Harbour, Sydney</p>
                <p><span>Contact :</span> +61 2 6789 1234</p>
                <p>Pie Society est une institution pour les amateurs de Meat Pie. Leurs recettes sont inspirées de la tradition australienne avec une touche moderne.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/good-pie">Good Pie</a></h3>
                <p><span>Adresse :</span> 120 Pitt Street, Perth</p>
                <p><span>Contact :</span> +61 8 6789 1234</p>
                <p>Good Pie est un restaurant local connu pour sa Meat Pie épicée, offrant une large gamme de variations végétariennes et classiques.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Meat.blade.php ENDPATH**/ ?>