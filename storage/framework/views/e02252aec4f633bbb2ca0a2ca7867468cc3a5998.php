<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster un gazpacho, une soupe froide espagnole pleine de fraîcheur.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Gazpacho en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Gazpacho en France</h1>
        <p>Découvrez cette soupe froide espagnole pleine de fraîcheur dans les meilleurs restaurants de France.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Gazpacho : Une Soupe Fraîche et Savoureuse</h2>
        <p>Le gazpacho est un classique de la cuisine andalouse, parfait pour l'été. Découvrez notre sélection de restaurants où vous pourrez déguster ce plat délicieux :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-tabla-del-gazpacho">La Tabla del Gazpacho</a></h3>
                <p><span>Adresse :</span> 10 Rue des Oliviers, 13001 Marseille</p>
                <p><span>Contact :</span> +33 4 91 25 38 19</p>
                <p>Un restaurant à Marseille offrant un gazpacho andalou authentique, préparé avec des tomates de qualité et une touche d'huile d'olive.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/els-soups">Els Soups</a></h3>
                <p><span>Adresse :</span> 18 Rue des Sablons, 75016 Paris</p>
                <p><span>Contact :</span> +33 1 42 67 50 10</p>
                <p>Le restaurant Els Soups propose une version moderne du gazpacho, avec une présentation raffinée et une explosion de saveurs fraîches.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-andalucia">Casa Andalucia</a></h3>
                <p><span>Adresse :</span> 7 Rue de la Paix, 69002 Lyon</p>
                <p><span>Contact :</span> +33 4 72 61 32 55</p>
                <p>Un véritable voyage en Espagne avec leur gazpacho maison, accompagné de pain grillé à l'ail et d'un soupçon de vinaigre de Xérès.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-maison-du-gazpacho">La Maison du Gazpacho</a></h3>
                <p><span>Adresse :</span> 25 Rue Saint-Antoine, 75011 Paris</p>
                <p><span>Contact :</span> +33 1 43 72 25 40</p>
                <p>Spécialisée dans les soupes froides, La Maison du Gazpacho propose une version classique et une version innovante aux herbes fraîches.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-tienda">El Tienda</a></h3>
                <p><span>Adresse :</span> 4 Rue de la Croix-Rousse, 69004 Lyon</p>
                <p><span>Contact :</span> +33 4 78 39 22 14</p>
                <p>El Tienda vous invite à déguster un gazpacho léger et rafraîchissant, préparé avec des produits locaux et servi avec des garnitures savoureuses.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Gazpa.blade.php ENDPATH**/ ?>