<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux Fidji pour déguster le Palusami, un plat traditionnel à base de feuilles de taro cuites dans du lait de coco.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster du Palusami aux Fidji</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Palusami aux Fidji</h1>
        <p>Découvrez où savourer le Palusami, un plat fidjien traditionnel à base de feuilles de taro cuites dans du lait de coco.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Le Palusami : Un Plat Traditionnel Fidjien</h2>
        <p>Le Palusami est un plat traditionnel fidjien préparé avec des feuilles de taro, du lait de coco et d'autres ingrédients savoureux, cuits lentement pour en libérer toute la saveur. Découvrez où goûter ce plat dans les meilleurs restaurants des Fidji.</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/palusami-cuisine">Palusami Cuisine</a></h3>
                <p><span>Adresse :</span> 101 Island Street, Suva</p>
                <p><span>Contact :</span> +679 123 4567</p>
                <p>Ce restaurant est célèbre pour sa version authentique de Palusami, avec des feuilles de taro cuites à la perfection et un lait de coco onctueux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fijian-treats">Fijian Treats</a></h3>
                <p><span>Adresse :</span> 78 Coral Coast, Nadi</p>
                <p><span>Contact :</span> +679 234 5678</p>
                <p>Fijian Treats propose une cuisine locale exceptionnelle, et leur Palusami est un incontournable pour les amoureux de saveurs fidjiennes authentiques.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/traditional-palusami">Traditional Palusami</a></h3>
                <p><span>Adresse :</span> 32 Beach Road, Lautoka</p>
                <p><span>Contact :</span> +679 345 6789</p>
                <p>Dans une ambiance décontractée, Traditional Palusami sert ce plat classique fidjien avec des ingrédients frais et locaux. Une expérience à ne pas manquer !</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/coco-palusami">Coco Palusami</a></h3>
                <p><span>Adresse :</span> 56 Marina Bay, Suva</p>
                <p><span>Contact :</span> +679 456 7890</p>
                <p>Coco Palusami se spécialise dans la cuisine fidjienne et vous offre une version riche et crémeuse du Palusami avec du lait de coco frais et savoureux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fijian-palusami">Fijian Palusami</a></h3>
                <p><span>Adresse :</span> 89 Pacific Avenue, Nadi</p>
                <p><span>Contact :</span> +679 567 8901</p>
                <p>Un restaurant qui sert une version moderne mais fidèle du Palusami, avec une touche locale unique et des ingrédients de première qualité.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Palusami.blade.php ENDPATH**/ ?>