<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Australie pour déguster du Fairy Bread, un plat sucré australien classique.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster du Fairy Bread en Australie</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Fairy Bread en Australie</h1>
        <p>Venez découvrir cette spécialité sucrée australienne : du pain, du beurre et des paillettes de sucre coloré !</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Fairy Bread : Le Plat Sucré Classique Australien</h2>
        <p>Le Fairy Bread est une spécialité australienne qui consiste en du pain tartiné de beurre et recouvert de paillettes de sucre coloré, une gourmandise simple mais délicieuse, idéale pour les enfants. Découvrez où vous pouvez le déguster :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fairy-bread-cafe">Fairy Bread Café</a></h3>
                <p><span>Adresse :</span> 50 King Street, Sydney</p>
                <p><span>Contact :</span> +61 2 2345 6789</p>
                <p>Le Fairy Bread Café est l'endroit parfait pour déguster ce plat sucré incontournable. Les paillettes de sucre sont colorées et ajoutent une touche magique à chaque bouchée.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/australian-sweets">Australian Sweets</a></h3>
                <p><span>Adresse :</span> 32 Queen Street, Melbourne</p>
                <p><span>Contact :</span> +61 3 3456 7890</p>
                <p>Aujourd'hui, Australian Sweets propose une version moderne du Fairy Bread, avec des paillettes de sucre maison, servies avec une touche d'originalité.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sugar-palette">Sugar Palette</a></h3>
                <p><span>Adresse :</span> 100 Darling Street, Brisbane</p>
                <p><span>Contact :</span> +61 7 4567 8901</p>
                <p>Sugar Palette propose un Fairy Bread haut en couleur, avec une touche créative qui plait aux petits et grands gourmands.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweets-treats">Sweets & Treats</a></h3>
                <p><span>Adresse :</span> 75 Beach Road, Perth</p>
                <p><span>Contact :</span> +61 8 6789 1234</p>
                <p>Les Fairy Bread de Sweets & Treats sont délicieux et gourmands, servis dans une ambiance conviviale et chaleureuse. Un vrai délice pour toute la famille !</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fairy-delights">Fairy Delights</a></h3>
                <p><span>Adresse :</span> 22 High Street, Sydney</p>
                <p><span>Contact :</span> +61 2 5678 2345</p>
                <p>Fairy Delights propose des Fairy Bread incroyablement créatifs, avec des paillettes de sucre aux couleurs vives qui enchantent à chaque bouchée. Un vrai régal !</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Fairy.blade.php ENDPATH**/ ?>