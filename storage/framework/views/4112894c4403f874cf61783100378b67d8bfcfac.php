<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants de pizza en Italie, où tradition et goût s'entrelacent.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Pizza en Italie</title>
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
        <h1>Les 5 Meilleurs Restaurants de Pizza en Italie</h1>
        <p>Découvrez l'excellence des pizzerias italiennes</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire au Cœur de l'Italie</h2>
        <p>Les pizzas italiennes sont réputées dans le monde entier. Voici une sélection de 5 restaurants incontournables, avec toutes les informations nécessaires :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/da-michele">L'Antica Pizzeria da Michele</a></h3>
                <p><span>Adresse :</span> Via Cesare Sersale, 1, 80139 Naples</p>
                <p><span>Contact :</span> +39 081 553 9204</p>
                <p>Cette pizzeria mythique de Naples est célèbre pour ses pizzas simples mais parfaites, comme la Margherita et la Marinara.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sorbillo">Pizzeria Sorbillo</a></h3>
                <p><span>Adresse :</span> Via dei Tribunali, 32, 80138 Naples</p>
                <p><span>Contact :</span> +39 081 446643</p>
                <p>Un haut lieu de la pizza napolitaine, apprécié pour ses portions généreuses et ses ingrédients de qualité.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-renella">La Renella</a></h3>
                <p><span>Adresse :</span> Via del Moro, 15, 00153 Rome</p>
                <p><span>Contact :</span> +39 06 581 7265</p>
                <p>Cette pizzeria romaine offre des pizzas légères et croustillantes, préparées dans un four à bois traditionnel.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pepe-ingrani">Pepe In Grani</a></h3>
                <p><span>Adresse :</span> Vico S. Giovanni Battista, 3, 81013 Caiazzo</p>
                <p><span>Contact :</span> +39 082 386 7147</p>
                <p>Dirigée par Franco Pepe, cette pizzeria propose des créations uniques qui repoussent les limites de la pizza traditionnelle.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pizzarium">Pizzarium</a></h3>
                <p><span>Adresse :</span> Via della Meloria, 43, 00136 Rome</p>
                <p><span>Contact :</span> +39 06 3974 5416</p>
                <p>Famous for its gourmet pizza slices, Gabriele Bonci's Pizzarium is a must-visit in Rome.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Pizza.blade.php ENDPATH**/ ?>