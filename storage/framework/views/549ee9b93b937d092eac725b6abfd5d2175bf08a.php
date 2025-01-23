<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants à Cuba pour savourer un délicieux flan cubain, une douceur sucrée et onctueuse emblématique.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Flan Cubain à Cuba</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent */
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
        <h1>Les 5 Meilleurs Restaurants de Flan Cubain à Cuba</h1>
        <p>Succombez à la douceur et à la simplicité du flan cubain, un dessert emblématique.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Flan Cubain : Un Dessert Traditionnel et Irrésistible</h2>
        <p>Crémeux, sucré et délicatement caramélisé, le flan cubain est une douceur incontournable. Voici les meilleures adresses pour le déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-aljibe">El Aljibe</a></h3>
                <p><span>Adresse :</span> Ave. 7ma, Miramar, La Havane</p>
                <p><span>Contact :</span> +53 7 209 4490</p>
                <p>Connu pour ses plats authentiques, ce restaurant propose un flan cubain onctueux et parfaitement caramélisé.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-guarida">La Guarida</a></h3>
                <p><span>Adresse :</span> Concordia, Centro Habana, La Havane</p>
                <p><span>Contact :</span> +53 7 866 9047</p>
                <p>Le flan de ce restaurant emblématique est un véritable chef-d'œuvre sucré.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paladar-los-mercaderes">Paladar Los Mercaderes</a></h3>
                <p><span>Adresse :</span> Calle Mercaderes, La Havane</p>
                <p><span>Contact :</span> +53 7 801 2437</p>
                <p>Le flan cubain ici est un dessert classique, servi avec une touche de caramel maison.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-cocinero">El Cocinero</a></h3>
                <p><span>Adresse :</span> Calle 26, Vedado, La Havane</p>
                <p><span>Contact :</span> +53 7 832 2355</p>
                <p>Un lieu branché où le flan cubain est revisité avec des ingrédients frais et locaux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/san-cristobal">San Cristóbal Paladar</a></h3>
                <p><span>Adresse :</span> Calle San Rafael, La Havane</p>
                <p><span>Contact :</span> +53 7 860 9109</p>
                <p>Ce restaurant offre un flan cubain crémeux, souvent accompagné d'un espresso cubain.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Flan.blade.php ENDPATH**/ ?>