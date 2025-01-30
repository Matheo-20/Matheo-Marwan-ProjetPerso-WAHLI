<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Thaïlande pour déguster un délicieux Mango Sticky Rice, un dessert thaïlandais sucré et savoureux à base de riz gluant et de mangue.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster un Mango Sticky Rice en Thaïlande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Mango Sticky Rice en Thaïlande</h1>
        <p>Venez goûter ce dessert thaïlandais sucré et rafraîchissant, à base de riz gluant, lait de coco et mangue fraîche.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Mango Sticky Rice : Le Dessert Thaïlandais Incontournable</h2>
        <p>Le Mango Sticky Rice est l'un des desserts les plus appréciés en Thaïlande, une parfaite combinaison de riz gluant sucré et de mangue fraîche, souvent accompagné de lait de coco crémeux. Découvrez où le savourer dans les meilleurs restaurants thaïlandais :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mango-sticky-delight">Mango Sticky Delight</a></h3>
                <p><span>Adresse :</span> 15 Sukhumvit Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 1234 5678</p>
                <p>Un restaurant apprécié pour son Mango Sticky Rice, offrant une version fraîche et parfaitement équilibrée entre le sucré et le crémeux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweet-mango-sticky-rice">Sweet Mango Sticky Rice</a></h3>
                <p><span>Adresse :</span> 18-20 Khao San Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 2345 6789</p>
                <p>Un lieu incontournable pour les amateurs de desserts, leur Mango Sticky Rice est une vraie gourmandise à ne pas manquer.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/coconut-mango-sticky">Coconut Mango Sticky</a></h3>
                <p><span>Adresse :</span> 25 Rama IX Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 3456 7890</p>
                <p>Connus pour leur variation du Mango Sticky Rice avec une touche de lait de coco crémeux, ce restaurant est une référence à Bangkok.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fresh-mango-delight">Fresh Mango Delight</a></h3>
                <p><span>Adresse :</span> 12 Silom Rd, Bangkok</p>
                <p><span>Contact :</span> +66 2 4567 8910</p>
                <p>Un cadre moderne et un Mango Sticky Rice fait maison qui vous transportera en Thaïlande dès la première bouchée.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mango-paradise">Mango Paradise</a></h3>
                <p><span>Adresse :</span> 8 Thanon Phetchaburi, Bangkok</p>
                <p><span>Contact :</span> +66 2 5678 1234</p>
                <p>Le Mango Sticky Rice ici est préparé avec soin, un dessert sucré et rafraîchissant qui vous fera revenir encore et encore.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Mango.blade.php ENDPATH**/ ?>