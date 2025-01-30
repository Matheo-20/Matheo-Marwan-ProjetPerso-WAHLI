<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Japon pour déguster des desserts au matcha, un délice de la cuisine japonaise.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Desserts au Matcha</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Desserts au Matcha</h1>
        <p>Venez savourer des desserts au matcha dans les meilleures adresses du Japon</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Goût Unique et Raffiné</h2>
        <p>Le matcha, avec sa saveur umami unique, est l’ingrédient phare de nombreux desserts japonais. Découvrez les meilleures adresses pour goûter ces douceurs :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/matcha-zen">Matcha Zen</a></h3>
                <p><span>Adresse :</span> 1-2-3 Ueno, Tokyo</p>
                <p><span>Contact :</span> +81 3 1234 5678</p>
                <p>Un temple du matcha où vous pouvez savourer des desserts au matcha faits maison, y compris des gâteaux et des glaces.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tea-room-sakura">Tea Room Sakura</a></h3>
                <p><span>Adresse :</span> 5-6-7 Shibuya, Tokyo</p>
                <p><span>Contact :</span> +81 3 2345 6789</p>
                <p>Un salon de thé charmant où vous dégusterez des pâtisseries raffinées à base de matcha, telles que des éclairs et des cheesecakes.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/matcha-house">Matcha House</a></h3>
                <p><span>Adresse :</span> 4-5-6 Ginza, Tokyo</p>
                <p><span>Contact :</span> +81 3 3456 7890</p>
                <p>Ce restaurant offre une large variété de desserts au matcha, y compris des mochis, des gâteaux et des crêpes.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/matcha-delights">Matcha Delights</a></h3>
                <p><span>Adresse :</span> 8-9-10 Roppongi, Tokyo</p>
                <p><span>Contact :</span> +81 3 4567 8910</p>
                <p>Une adresse incontournable pour les fans de matcha, offrant une gamme de desserts allant du tiramisu au matcha aux parfaits glacés.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweet-matcha">Sweet Matcha</a></h3>
                <p><span>Adresse :</span> 12-13-14 Asakusa, Tokyo</p>
                <p><span>Contact :</span> +81 3 5678 1234</p>
                <p>Un restaurant spécialisé dans les desserts créatifs à base de matcha, parfait pour un goûter relaxant après une visite touristique.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Matcha.blade.php ENDPATH**/ ?>