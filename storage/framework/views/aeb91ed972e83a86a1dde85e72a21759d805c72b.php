<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Sénégal pour déguster le Tieb Poisson, un plat traditionnel à base de poisson et de riz parfumé.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster le Tieb Poisson au Sénégal</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Tieb Poisson au Sénégal</h1>
        <p>Un plat traditionnel incontournable à base de poisson et de riz parfumé aux épices.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Tieb Poisson : Un Plat Sénégalais Incontournable</h2>
        <p>Le Tieb Poisson est un plat sénégalais traditionnel, composé de poisson, de riz parfumé, et de légumes, souvent cuisiné avec des épices et une sauce tomate. Découvrez les meilleurs restaurants où vous pouvez déguster ce plat savoureux au Sénégal.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-boubou">Chez Boubou</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 821 23 45</p>
                <p>Chez Boubou vous propose un Tieb Poisson authentique, accompagné de légumes et d'une sauce épicée unique.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurant-mama">Restaurant Mama</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 234 56 78</p>
                <p>Le Tieb Poisson de Mama est une véritable spécialité de la maison, offrant des saveurs inégalées avec une touche créole.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-delices-senegalais">Les Délices Sénégalais</a></h3>
                <p><span>Adresse :</span> Mbour, Sénégal</p>
                <p><span>Contact :</span> +221 33 456 78 90</p>
                <p>Les Délices Sénégalais propose un Tieb Poisson traditionnel, accompagné de riz parfumé et d'une sauce tomate délicieuse.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-binta">Chez Binta</a></h3>
                <p><span>Adresse :</span> Saly, Sénégal</p>
                <p><span>Contact :</span> +221 33 876 54 32</p>
                <p>Chez Binta est une adresse populaire pour savourer un Tieb Poisson délicieux, bien assaisonné et servi avec des légumes frais.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-soleil-dakar">Le Soleil Dakar</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 312 45 67</p>
                <p>Le Soleil Dakar offre un Tieb Poisson très apprécié, accompagné de riz et d'une sauce tomate savoureuse, à ne pas manquer.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Tieb.blade.php ENDPATH**/ ?>