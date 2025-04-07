<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Mexique pour savourer des tacos authentiques et traditionnels.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Tacos au Mexique</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent avec les autres pages */
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
        <h1>Les 5 Meilleurs Restaurants de Tacos au Mexique</h1>
        <p>Découvrez les saveurs authentiques des tacos directement au cœur du Mexique.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Tacos : Une Fierté Mexicaine</h2>
        <p>Plongez dans la culture culinaire mexicaine avec ces tacos préparés avec des ingrédients frais et des recettes traditionnelles :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/taqueria-el-califa">Taquería El Califa</a></h3>
                <p><span>Adresse :</span> Av. Insurgentes Sur 810, Mexico City</p>
                <p><span>Contact :</span> +52 55 5511 9382</p>
                <p>Célèbre pour ses tacos al pastor et son ambiance conviviale, une adresse incontournable dans la capitale.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/los-cocuyos">Los Cocuyos</a></h3>
                <p><span>Adresse :</span> Bolívar 57, Mexico City</p>
                <p><span>Contact :</span> +52 55 5510 9712</p>
                <p>Un petit stand de rue proposant des tacos savoureux, reconnus pour leur authenticité et leur simplicité.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-tizoncito">El Tizoncito</a></h3>
                <p><span>Adresse :</span> Tamaulipas 122, Mexico City</p>
                <p><span>Contact :</span> +52 55 5211 9488</p>
                <p>Connu pour avoir popularisé les tacos al pastor, une institution mexicaine depuis des décennies.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/taqueria-la-lupita">Taquería La Lupita</a></h3>
                <p><span>Adresse :</span> Calle 16 de Septiembre 69, Guadalajara</p>
                <p><span>Contact :</span> +52 33 3614 2748</p>
                <p>Une adresse renommée pour ses tacos dorados et ses saveurs locales inoubliables.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-fogon">El Fogón</a></h3>
                <p><span>Adresse :</span> Av. Constituyentes, Playa del Carmen</p>
                <p><span>Contact :</span> +52 984 873 1516</p>
                <p>Parfait pour des tacos généreux après une journée à la plage, avec des options variées et authentiques.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Tacos.blade.php ENDPATH**/ ?>