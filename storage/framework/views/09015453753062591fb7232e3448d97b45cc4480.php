<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Côte d'Ivoire pour déguster un Attiéké au poisson, un plat traditionnel ivoirien savoureux.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster l'Attiéké au Poisson en Côte d'Ivoire</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster l'Attiéké au Poisson en Côte d'Ivoire</h1>
        <p>Savourez ce plat emblématique ivoirien dans les meilleures adresses.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>L'Attiéké au Poisson : Un Plat Traditionnel Ivoirien</h2>
        <p>L'Attiéké, accompagné de poisson, est un plat typique de la Côte d'Ivoire, savoureux et plein de saveurs. Découvrez les restaurants où vous pouvez déguster cette spécialité ivoirienne.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/attieke-papaye">Attiéké Papaye</a></h3>
                <p><span>Adresse :</span> Cocody, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 21 25 67 89</p>
                <p>Ce restaurant est réputé pour son Attiéké accompagné de poisson frais et d'une sauce savoureuse. Un incontournable à Abidjan.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-merci">Chez Merci</a></h3>
                <p><span>Adresse :</span> Yopougon, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 20 91 23 45</p>
                <p>Chez Merci vous propose un Attiéké au poisson dans une ambiance conviviale et avec un service rapide. Très apprécié des locaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/attieke-ville">Attiéké Ville</a></h3>
                <p><span>Adresse :</span> Plateau, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 34 56 78</p>
                <p>Un lieu incontournable pour les amateurs d'Attiéké. Le poisson est grillé à la perfection, servi avec une sauce piquante maison.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-saveurs-ivoiriennes">Les Saveurs Ivoiriennes</a></h3>
                <p><span>Adresse :</span> Marcory, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 24 56 78 90</p>
                <p>Un restaurant populaire à Abidjan, offrant un excellent Attiéké accompagné de poisson, idéal pour un déjeuner en famille.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-odile">Chez Odile</a></h3>
                <p><span>Adresse :</span> Treichville, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 21 12 34 56</p>
                <p>Chez Odile est un restaurant très apprécié pour son Attiéké au poisson. Un plat savoureux servi dans une ambiance chaleureuse.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Attieke.blade.php ENDPATH**/ ?>