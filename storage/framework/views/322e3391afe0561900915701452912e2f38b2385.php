<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Chili pour savourer des empanadas chiliennes, un incontournable de la cuisine chilienne.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Empanadas Chiliennes au Chili</title>
    <style>
        /* Style global */
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Empanadas Chiliennes</h1>
        <p>Une spécialité chilienne incontournable à découvrir dans ces restaurants.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Traditionnel du Chili</h2>
        <p>Les empanadas chiliennes, farcies de viande, de légumes ou de fromage, sont un véritable délice. Voici les meilleures adresses pour en déguster au Chili :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-empanada-del-chileno">La Empanada del Chileno</a></h3>
                <p><span>Adresse :</span> Av. Providencia 1234, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 2345 6789</p>
                <p>Ce restaurant est un incontournable à Santiago pour savourer des empanadas chiliennes authentiques.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-rincón-de-la-empanada">El Rincón de la Empanada</a></h3>
                <p><span>Adresse :</span> Calle Santa Isabel 678, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 3456 7890</p>
                <p>Un petit restaurant chaleureux où les empanadas sont préparées avec des ingrédients frais et locaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-pampa-empanadas">La Pampa Empanadas</a></h3>
                <p><span>Adresse :</span> Calle Los Dominicos 4567, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 4567 8901</p>
                <p>Une excellente adresse pour goûter aux empanadas traditionnelles du Chili, dans un cadre typique et convivial.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/empanadas-italianas">Empanadas Italianas</a></h3>
                <p><span>Adresse :</span> Av. Las Condes 123, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 2345 1234</p>
                <p>Une version unique des empanadas chiliennes avec des influences italiennes, une fusion savoureuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/las-delicias-de-la-empanada">Las Delicias de la Empanada</a></h3>
                <p><span>Adresse :</span> Calle Agustinas 123, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 0123</p>
                <p>Ce restaurant est un incontournable à Santiago pour savourer des empanadas farcies de viande et d'autres ingrédients traditionnels.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/EmpanadasCh.blade.php ENDPATH**/ ?>