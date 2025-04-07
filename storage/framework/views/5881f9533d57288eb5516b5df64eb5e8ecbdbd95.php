<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants de tiramisu en Italie, où saveur et tradition s'entrelacent.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Tiramisu en Italie</title>
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
        <h1>Les 5 Meilleurs Restaurants de Tiramisu en Italie</h1>
        <p>Découvrez les secrets du tiramisu italien</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Dessert Italien Légendaire</h2>
        <p>Le tiramisu est le dessert italien par excellence, alliant mascarpone, café et cacao dans une harmonie parfaite. Découvrez nos adresses préférées :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tiramisu-doro">Tiramisu d'Oro</a></h3>
                <p><span>Adresse :</span> Via Garibaldi, 12, 00153 Rome</p>
                <p><span>Contact :</span> +39 06 1234567</p>
                <p>Connu pour sa recette classique de tiramisu, parfaitement équilibrée entre douceur et amertume.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-dolce-vita">La Dolce Vita</a></h3>
                <p><span>Adresse :</span> Piazza Navona, 45, 00186 Rome</p>
                <p><span>Contact :</span> +39 06 9876543</p>
                <p>Propose des variations créatives du tiramisu, comme au citron ou à la pistache.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/caffe-toscano">Caffè Toscano</a></h3>
                <p><span>Adresse :</span> Via della Scala, 22, 50123 Florence</p>
                <p><span>Contact :</span> +39 055 2345678</p>
                <p>Apprécié pour son tiramisu sans gluten, préparé avec soin et des ingrédients de qualité.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/nonna-maria">Nonna Maria</a></h3>
                <p><span>Adresse :</span> Via Roma, 18, 37121 Vérone</p>
                <p><span>Contact :</span> +39 045 8765432</p>
                <p>Offre un tiramisu au mascarpone artisanal, une spécialité qui fait la fierté de la maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/dolce-paradiso">Dolce Paradiso</a></h3>
                <p><span>Adresse :</span> Via Vittorio Veneto, 10, 30100 Venise</p>
                <p><span>Contact :</span> +39 041 1234567</p>
                <p>Fameux pour son tiramisu à partager, idéal pour les grands gourmands ou les groupes d'amis.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Tiramisu.blade.php ENDPATH**/ ?>