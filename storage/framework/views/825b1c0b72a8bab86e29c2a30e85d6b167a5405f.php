<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux Philippines pour savourer le Cassava Cake, un dessert traditionnel à base de manioc.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster le Cassava Cake aux Philippines</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster le Cassava Cake aux Philippines</h1>
        <p>Découvrez où savourer le Cassava Cake, un dessert traditionnel philippin à base de manioc.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Cassava Cake : Un Délice Sucré des Philippines</h2>
        <p>Le Cassava Cake est un dessert philippin incontournable, préparé à partir de manioc râpé, de lait de coco et d'une garniture sucrée dorée au four. Découvrez les meilleurs endroits pour en profiter.</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cassava-delights">Cassava Delights</a></h3>
                <p><span>Adresse :</span> 45 Rizal Street, Quezon City</p>
                <p><span>Contact :</span> +63 987 654 3210</p>
                <p>Ce restaurant est célèbre pour son Cassava Cake moelleux et parfaitement sucré, idéal pour les amateurs de desserts traditionnels.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/traditional-sweets">Traditional Sweets</a></h3>
                <p><span>Adresse :</span> 89 Mabini Avenue, Manila</p>
                <p><span>Contact :</span> +63 876 543 2109</p>
                <p>Traditional Sweets offre une expérience authentique avec un Cassava Cake préparé selon les recettes familiales traditionnelles.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweet-corner">Sweet Corner</a></h3>
                <p><span>Adresse :</span> 12 Bonifacio Road, Cebu City</p>
                <p><span>Contact :</span> +63 765 432 1098</p>
                <p>Sweet Corner est connu pour ses Cassava Cakes riches et crémeux, avec une garniture caramélisée qui fond en bouche.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/coco-delights">Coco Delights</a></h3>
                <p><span>Adresse :</span> 34 Coconut Lane, Davao</p>
                <p><span>Contact :</span> +63 654 321 0987</p>
                <p>Un lieu parfait pour déguster le Cassava Cake dans un cadre chaleureux, accompagné de lait de coco frais.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sunny-cakes">Sunny Cakes</a></h3>
                <p><span>Adresse :</span> 78 Sunshine Blvd, Baguio</p>
                <p><span>Contact :</span> +63 543 210 9876</p>
                <p>Sunny Cakes propose un Cassava Cake léger, moelleux et garni d'une couche de fromage doux.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Cassava.blade.php ENDPATH**/ ?>