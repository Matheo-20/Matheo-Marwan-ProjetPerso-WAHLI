<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en Espagne pour déguster des tapas authentiques, un élément incontournable de la cuisine espagnole.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Tapas en Espagne</title>
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
    
    <header>
        <h1>Les 5 Meilleurs Restaurants de Tapas en Espagne</h1>
        <p>Découvrez les meilleurs endroits en Espagne pour déguster des tapas authentiques et savoureuses.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Des Tapas Délicieuses à Partager</h2>
        <p>Les tapas, ces petites portions savoureuses, sont un incontournable de la gastronomie espagnole. Voici une sélection des meilleurs restaurants pour les déguster :</p>

        <div class="restaurant-list">
            <div class="restaurant">
                <h3><a href="/restaurant/casa-lola">Casa Lola</a></h3>
                <p><span>Adresse :</span> Calle Granada, 6, 29015 Málaga</p>
                <p><span>Contact :</span> +34 952 22 43 46</p>
                <p>Un restaurant chaleureux où déguster des tapas traditionnelles avec une touche moderne.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/quimet-quimet">Quimet & Quimet</a></h3>
                <p><span>Adresse :</span> Carrer del Poeta Cabanyes, 25, 08004 Barcelone</p>
                <p><span>Contact :</span> +34 934 42 31 42</p>
                <p>Un petit bar à tapas emblématique connu pour ses montaditos et ses conserves de qualité.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/el-xampanyet">El Xampanyet</a></h3>
                <p><span>Adresse :</span> Carrer de Montcada, 22, 08003 Barcelone</p>
                <p><span>Contact :</span> +34 933 19 70 03</p>
                <p>Un incontournable à Barcelone pour accompagner ses tapas d'un verre de cava.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/cerveceria-catalana">Cervecería Catalana</a></h3>
                <p><span>Adresse :</span> Carrer de Mallorca, 236, 08008 Barcelone</p>
                <p><span>Contact :</span> +34 932 16 03 68</p>
                <p>Un lieu réputé pour ses tapas variées et son ambiance animée.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/bodega-la-ardosa">Bodega La Ardosa</a></h3>
                <p><span>Adresse :</span> Calle de Colón, 13, 28004 Madrid</p>
                <p><span>Contact :</span> +34 915 21 49 79</p>
                <p>Un bar traditionnel servant certaines des meilleures tortillas de Madrid.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Tapas.blade.php ENDPATH**/ ?>