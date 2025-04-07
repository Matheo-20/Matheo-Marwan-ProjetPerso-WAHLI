<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Côte d'Ivoire pour déguster le Foutou, un plat emblématique composé de bananes plantains ou d'ignames pilées.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster le Foutou en Côte d'Ivoire</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Foutou en Côte d'Ivoire</h1>
        <p>Un plat traditionnel incontournable à base de bananes plantains ou d'ignames pilées.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Foutou : Un Plat Traditionnel de la Côte d'Ivoire</h2>
        <p>Le foutou est une préparation de bananes plantains ou d'ignames pilées, généralement accompagné de sauce, viande ou poisson. Découvrez les meilleurs restaurants en Côte d'Ivoire pour savourer ce plat savoureux.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/foutou-chez-souly">Foutou Souly</a></h3>
                <p><span>Adresse :</span> Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 45 56 78</p>
                <p>Foutou Souly propose un foutou accompagné de sauce gombo, poisson braisé et viandes variées.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/foutou-kouadio">Chez Kouadio</a></h3>
                <p><span>Adresse :</span> Cocody, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 21 23 45 67</p>
                <p>Chez Kouadio, le foutou est accompagné de sauce arachide, poisson frit et viande grillée.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/foutou-loukou">Foutou Loukou</a></h3>
                <p><span>Adresse :</span> Yopougon, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 23 45 67 89</p>
                <p>Ce restaurant est connu pour son foutou accompagné de sauce tomate épicée et viande de bœuf.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/foutou-adi">Chez Adi</a></h3>
                <p><span>Adresse :</span> Marcory, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 56 78 90</p>
                <p>Chez Adi, le foutou est servi avec une sauce au poisson et des légumes frais, un régal pour les amateurs.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/foutou-mama">Mama Foutou</a></h3>
                <p><span>Adresse :</span> Treichville, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 24 12 34 56</p>
                <p>Mama Foutou est une adresse incontournable pour savourer un foutou accompagné de sauce au gombo et viande de porc grillée.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Foutou.blade.php ENDPATH**/ ?>