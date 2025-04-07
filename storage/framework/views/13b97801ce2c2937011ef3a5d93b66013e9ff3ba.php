<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants à Cuba pour savourer de délicieux tostones, les bananes plantains frites incontournables de la cuisine cubaine.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Tostones à Cuba</title>
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
        <h1>Les 5 Meilleurs Restaurants de Tostones à Cuba</h1>
        <p>Dégustez les irrésistibles bananes plantains frites, un classique de la cuisine cubaine.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Tostones : Une Explosion de Saveurs Croquantes</h2>
        <p>Frites deux fois pour une texture parfaite, les tostones sont le meilleur accompagnement ou en-cas cubain. Découvrez où en profiter à Cuba :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-aljibe">El Aljibe</a></h3>
                <p><span>Adresse :</span> Ave. 7ma, Miramar, La Havane</p>
                <p><span>Contact :</span> +53 7 209 4490</p>
                <p>Un lieu incontournable pour savourer des tostones croustillants servis avec des sauces maison.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-guarida">La Guarida</a></h3>
                <p><span>Adresse :</span> Concordia, Centro Habana, La Havane</p>
                <p><span>Contact :</span> +53 7 866 9047</p>
                <p>Ce restaurant emblématique propose des tostones parfaitement dorés accompagnés de crevettes.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paladar-los-mercaderes">Paladar Los Mercaderes</a></h3>
                <p><span>Adresse :</span> Calle Mercaderes, La Havane</p>
                <p><span>Contact :</span> +53 7 801 2437</p>
                <p>Servis en entrée ou en accompagnement, leurs tostones sont une véritable gourmandise.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-cocinero">El Cocinero</a></h3>
                <p><span>Adresse :</span> Calle 26, Vedado, La Havane</p>
                <p><span>Contact :</span> +53 7 832 2355</p>
                <p>Un lieu branché où les tostones sont revisités avec une touche moderne.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/san-cristobal">San Cristóbal Paladar</a></h3>
                <p><span>Adresse :</span> Calle San Rafael, La Havane</p>
                <p><span>Contact :</span> +53 7 860 9109</p>
                <p>Ce restaurant propose des tostones traditionnels, parfaits pour accompagner un plat principal.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Tostones.blade.php ENDPATH**/ ?>