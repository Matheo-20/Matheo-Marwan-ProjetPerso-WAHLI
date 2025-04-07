<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants à Cuba pour savourer une authentique Ropa Vieja, le plat emblématique de la cuisine cubaine.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Ropa Vieja à Cuba</title>
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
        <h1>Les 5 Meilleurs Restaurants de Ropa Vieja à Cuba</h1>
        <p>Dégustez l'authentique plat national cubain, riche en saveurs et en histoire.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Ropa Vieja : Une Spécialité Cubaine Incontournable</h2>
        <p>Ce ragoût de viande effilochée, mijoté dans une sauce tomate savoureuse avec des poivrons et des épices, est un pilier de la cuisine cubaine. Découvrez les meilleures adresses :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-guarida">La Guarida</a></h3>
                <p><span>Adresse :</span> Concordia 418, La Havane</p>
                <p><span>Contact :</span> +53 7 866 9047</p>
                <p>Un restaurant emblématique offrant une Ropa Vieja préparée avec des ingrédients locaux et un savoir-faire traditionnel.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/palomar">Paladar Los Mercaderes</a></h3>
                <p><span>Adresse :</span> Calle Mercaderes 207, La Havane</p>
                <p><span>Contact :</span> +53 7 801 2437</p>
                <p>Un cadre charmant et une Ropa Vieja exquise, accompagnée de bananes plantains frites.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-cocinero">El Cocinero</a></h3>
                <p><span>Adresse :</span> Calle 26, La Havane</p>
                <p><span>Contact :</span> +53 7 832 2355</p>
                <p>Connus pour leur créativité culinaire, ils revisitent la Ropa Vieja avec des touches modernes.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/atelier">Atelier</a></h3>
                <p><span>Adresse :</span> Calle 5ta, Vedado, La Havane</p>
                <p><span>Contact :</span> +53 7 836 2025</p>
                <p>Un restaurant élégant où la Ropa Vieja est cuisinée avec soin et servie avec des légumes de saison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/san-cristobal">San Cristóbal Paladar</a></h3>
                <p><span>Adresse :</span> Calle San Rafael 469, Centro Habana</p>
                <p><span>Contact :</span> +53 7 860 1705</p>
                <p>Un lieu chargé d'histoire, célèbre pour sa Ropa Vieja authentique accompagnée de riz et de haricots noirs.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Ropa.blade.php ENDPATH**/ ?>