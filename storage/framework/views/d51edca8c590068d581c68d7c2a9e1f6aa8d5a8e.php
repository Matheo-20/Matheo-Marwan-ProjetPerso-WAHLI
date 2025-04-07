<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Chine pour savourer du riz cantonais, une spécialité emblématique et savoureuse.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster du Riz Cantonais en Chine</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Riz Cantonais</h1>
        <p>Découvrez où savourer cette spécialité chinoise incontournable</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Plat Chinois Classique</h2>
        <p>Le riz cantonais, ce mélange savoureux de riz sauté, légumes, œufs, et viandes ou fruits de mer, est une véritable institution culinaire. Voici les meilleurs restaurants en Chine pour en profiter :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/canton-flavor">Canton Flavor</a></h3>
                <p><span>Adresse :</span> Yuexiu District, Guangzhou</p>
                <p><span>Contact :</span> +86 20 1234 5678</p>
                <p>Ce restaurant est réputé pour son riz cantonais préparé selon la tradition, avec des ingrédients frais et authentiques.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/golden-bowl">Golden Bowl</a></h3>
                <p><span>Adresse :</span> Tsim Sha Tsui, Hong Kong</p>
                <p><span>Contact :</span> +852 3456 7890</p>
                <p>Un établissement haut de gamme qui propose une version raffinée du riz cantonais, idéale pour les amateurs exigeants.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/rice-harmony">Rice Harmony</a></h3>
                <p><span>Adresse :</span> Dongcheng, Pékin</p>
                <p><span>Contact :</span> +86 10 2345 6789</p>
                <p>Chez Rice Harmony, le riz cantonais est sublimé avec des garnitures uniques et des assaisonnements maison.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/savor-canton">Savor Canton</a></h3>
                <p><span>Adresse :</span> West Lake, Hangzhou</p>
                <p><span>Contact :</span> +86 571 4567 8910</p>
                <p>Ce restaurant offre un cadre charmant pour déguster un riz cantonais authentique, accompagné de plats traditionnels.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/traditional-taste">Traditional Taste</a></h3>
                <p><span>Adresse :</span> Nanjing Road, Shanghai</p>
                <p><span>Contact :</span> +86 21 8765 4321</p>
                <p>Un établissement chaleureux où le riz cantonais est préparé à la perfection, avec des portions généreuses.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/RizC.blade.php ENDPATH**/ ?>