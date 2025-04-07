<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Sénégal pour déguster des Beignets de Millet, un délice sucré traditionnel du Sénégal.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Beignets de Millet au Sénégal</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Beignets de Millet au Sénégal</h1>
        <p>Un délice sucré à base de millet, typique de la cuisine sénégalaise.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Beignets de Millet : Une Tradition Sénégalaise</h2>
        <p>Les Beignets de Millet sont un en-cas populaire au Sénégal, souvent consommé en snack sucré ou au goûter. Ils sont légers et savoureux, faits à base de farine de millet et frits à la perfection. Voici les meilleurs endroits où vous pouvez déguster cette spécialité sénégalaise :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beignet-millet-chez-senegalais">Beignet de Millet Chez Sénégalais</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 789 12 34</p>
                <p>Chez Sénégalais propose des beignets de millet faits maison, savoureux et préparés selon la recette traditionnelle.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beignet-millet-royal">Beignet Millet Royal</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 456 78 90</p>
                <p>Beignet Millet Royal vous offre des beignets de millet délicieux et légers, parfaits pour un snack sucré.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beignet-millet-maison">Beignet de Millet Maison</a></h3>
                <p><span>Adresse :</span> Thiès, Sénégal</p>
                <p><span>Contact :</span> +221 33 876 45 67</p>
                <p>À la Maison du Beignet, vous trouverez des beignets de millet moelleux à l'intérieur et croquants à l'extérieur.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beignet-millet-saly">Beignet de Millet Saly</a></h3>
                <p><span>Adresse :</span> Saly, Sénégal</p>
                <p><span>Contact :</span> +221 33 234 56 78</p>
                <p>Ce restaurant situé à Saly est réputé pour ses beignets de millet délicieux et fraîchement préparés.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beignet-millet-cuisine-senegalaise">Cuisine Sénégalaise - Beignet de Millet</a></h3>
                <p><span>Adresse :</span> Mbour, Sénégal</p>
                <p><span>Contact :</span> +221 33 567 89 01</p>
                <p>La Cuisine Sénégalaise propose des beignets de millet parfaitement préparés, un vrai régal pour les amateurs de cuisine traditionnelle.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Beignet.blade.php ENDPATH**/ ?>