<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Chili pour savourer un délicieux pastel de choclo, un plat traditionnel chilien à base de maïs.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Pastels de Choclo au Chili</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Pastels de Choclo au Chili</h1>
        <p>Un plat traditionnel chilien à ne pas manquer, dans ces restaurants exceptionnels.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Pastel de Choclo : Un Délice Chilien</h2>
        <p>Le pastel de choclo est un délicieux gratin de maïs sucré, typique du Chili. Il associe une purée de maïs à une farce savoureuse de viande hachée, d'oignons, de lait, d'œufs, et parfois de raisins secs. Découvrez ces restaurants qui le servent à merveille :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-casa-del-pastel-de-choclo">La Casa del Pastel de Choclo</a></h3>
                <p><span>Adresse :</span> Av. Providencia 1200, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 2345 6789</p>
                <p>Ce restaurant est reconnu pour sa version traditionnelle et savoureuse du pastel de choclo, servie avec une touche d'authenticité chilienne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-pastel-de-choclo-de-la-abuela">El Pastel de Choclo de la Abuela</a></h3>
                <p><span>Adresse :</span> Calle Los Heroes 789, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 3456 7890</p>
                <p>Un restaurant chaleureux, avec des recettes familiales transmises de génération en génération pour offrir un pastel de choclo délicieux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-picada-del-pastel-de-choclo">La Picada del Pastel de Choclo</a></h3>
                <p><span>Adresse :</span> Calle Bellavista 345, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 4567 8901</p>
                <p>Spécialité de pastel de choclo, préparé à la perfection avec des ingrédients locaux frais et de qualité.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-vasito-de-pastel-de-choclo">El Vasito de Pastel de Choclo</a></h3>
                <p><span>Adresse :</span> Av. Las Condes 100, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 1234</p>
                <p>Un endroit où vous pouvez savourer un pastel de choclo crémeux, avec une farce savoureuse, dans une ambiance décontractée.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-fonda-del-pastel-de-choclo">La Fonda del Pastel de Choclo</a></h3>
                <p><span>Adresse :</span> Calle Pio Nono 456, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 3456</p>
                <p>Un restaurant traditionnel chilien où vous pouvez déguster le meilleur pastel de choclo, dans une ambiance familiale et conviviale.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/PastelD.blade.php ENDPATH**/ ?>