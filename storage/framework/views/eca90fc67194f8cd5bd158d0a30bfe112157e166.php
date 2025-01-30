<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Côte d'Ivoire pour déguster une savoureuse sauce arachide, une spécialité ivoirienne incontournable.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster la Sauce Arachide en Côte d'Ivoire</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster la Sauce Arachide en Côte d'Ivoire</h1>
        <p>Savourez la tradition ivoirienne avec cette sauce onctueuse et savoureuse.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Sauce Arachide : Un Délice Ivoirien</h2>
        <p>La sauce arachide est un plat traditionnel ivoirien, connu pour sa richesse et son goût unique. Découvrez où savourer cette spécialité.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sauce-arachide-ivorienne">Le Jardin d'Afrique</a></h3>
                <p><span>Adresse :</span> Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 50 67 89</p>
                <p>Le Jardin d'Afrique propose une délicieuse sauce arachide, accompagnée de viande, dans un cadre chaleureux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sauce-arachide-luxe">Chez Luxe</a></h3>
                <p><span>Adresse :</span> Yopougon, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 20 91 23 45</p>
                <p>Un endroit réputé pour ses plats ivoiriens traditionnels, incluant une sauce arachide préparée avec des ingrédients frais et locaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/attieke-arachide">Le Coin Gourmand</a></h3>
                <p><span>Adresse :</span> Cocody, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 21 22 34 56</p>
                <p>Le Coin Gourmand sert une sauce arachide traditionnelle accompagnée d'Attiéké et de poisson grillé, un vrai régal.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sauce-arachide-ivoirienne">La Table d'Abidjan</a></h3>
                <p><span>Adresse :</span> Plateau, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 34 56 78</p>
                <p>Un restaurant de qualité où la sauce arachide se mêle à des mets de qualité, à découvrir absolument.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sauce-arachide-village">Village Ivoire</a></h3>
                <p><span>Adresse :</span> Marcory, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 24 56 78 90</p>
                <p>Un restaurant où vous pourrez déguster une sauce arachide crémeuse, accompagnée de riz ou de viande, dans un cadre convivial.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/SauceA.blade.php ENDPATH**/ ?>