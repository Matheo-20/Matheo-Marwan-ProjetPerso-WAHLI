<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Japon pour déguster des sushis frais et authentiques, une véritable expérience culinaire.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Sushis au Japon</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Sushis</h1>
        <p>Découvrez où savourer des sushis frais et authentiques au Japon</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Une Expérience Culinaire Unique</h2>
        <p>Les sushis, emblème de la cuisine japonaise, offrent un mélange subtil de fraîcheur et d'art culinaire. Voici les meilleurs restaurants au Japon pour une dégustation inoubliable :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sukiyabashi-jiro">Sukiyabashi Jiro</a></h3>
                <p><span>Adresse :</span> Ginza, Tokyo</p>
                <p><span>Contact :</span> +81 3 1234 5678</p>
                <p>Un restaurant de renommée mondiale, dirigé par le maître sushi Jiro Ono, offrant une expérience haut de gamme.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/daiwa-sushi">Daiwa Sushi</a></h3>
                <p><span>Adresse :</span> Marché Toyosu, Tokyo</p>
                <p><span>Contact :</span> +81 3 3456 7890</p>
                <p>Célèbre pour ses sushis frais directement issus du marché, parfait pour un petit-déjeuner sushi unique.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sushi-mizutani">Sushi Mizutani</a></h3>
                <p><span>Adresse :</span> Shimbashi, Tokyo</p>
                <p><span>Contact :</span> +81 3 2345 6789</p>
                <p>Un cadre intimiste où chaque pièce de sushi est un véritable chef-d'œuvre de précision et de goût.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sushi-zo">Sushi Zo</a></h3>
                <p><span>Adresse :</span> Roppongi, Tokyo</p>
                <p><span>Contact :</span> +81 3 4567 8910</p>
                <p>Connu pour son menu omakase, où le chef choisit les sushis en fonction des produits les plus frais du jour.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sushidai">Sushidai</a></h3>
                <p><span>Adresse :</span> Marché Toyosu, Tokyo</p>
                <p><span>Contact :</span> +81 3 8765 4321</p>
                <p>Populaire auprès des locaux et des touristes, proposant des sushis frais et abordables dans un cadre convivial.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Sushi.blade.php ENDPATH**/ ?>