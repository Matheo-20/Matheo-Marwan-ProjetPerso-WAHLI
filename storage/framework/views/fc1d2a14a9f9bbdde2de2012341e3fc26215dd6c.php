<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster une authentique paella, un plat emblématique de la cuisine espagnole.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Paella en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Paella en France</h1>
        <p>Découvrez les meilleurs endroits en France pour déguster une paella authentique et savoureuse.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Paella Savoureuse à Déguster</h2>
        <p>La paella, un plat espagnol riche en saveurs, est l'un des mets les plus appréciés au monde. Voici une sélection des meilleurs restaurants pour en savourer une :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-paella-de-la-costa">La Paella de la Costa</a></h3>
                <p><span>Adresse :</span> 18 Rue de la Mer, 66000 Perpignan</p>
                <p><span>Contact :</span> +33 4 68 66 14 15</p>
                <p>Un restaurant réputé pour sa paella royale, faite à base de fruits de mer frais et de viandes savamment assaisonnées.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-rincon-del-mar">El Rincón del Mar</a></h3>
                <p><span>Adresse :</span> 25 Rue du Soleil, 34000 Montpellier</p>
                <p><span>Contact :</span> +33 4 67 56 90 12</p>
                <p>Venez découvrir cette paella traditionnelle servie avec une variété de fruits de mer, dans un cadre chaleureux et coloré.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-paella">Casa Paella</a></h3>
                <p><span>Adresse :</span> 12 Boulevard de l'Espagne, 75012 Paris</p>
                <p><span>Contact :</span> +33 1 43 94 70 56</p>
                <p>Un restaurant espagnol authentique qui sert une paella préparée à la perfection, avec des ingrédients importés directement d'Espagne.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-taverne-iberique">La Taverne Ibérique</a></h3>
                <p><span>Adresse :</span> 14 Place des Oliviers, 13001 Marseille</p>
                <p><span>Contact :</span> +33 4 91 25 37 48</p>
                <p>Un lieu iconique à Marseille pour savourer une paella familiale dans une ambiance conviviale, avec un excellent rapport qualité/prix.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paella-andalouse">Paella Andalouse</a></h3>
                <p><span>Adresse :</span> 38 Rue de l'Espagne, 69001 Lyon</p>
                <p><span>Contact :</span> +33 4 72 42 56 75</p>
                <p>Spécialisé dans les paellas de toutes sortes, ce restaurant vous plonge dans l'authenticité de la cuisine espagnole, avec une paella généreuse et pleine de saveurs.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Paella.blade.php ENDPATH**/ ?>