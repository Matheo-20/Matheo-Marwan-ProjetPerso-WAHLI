<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Maroc pour savourer des chebakias, ces pâtisseries traditionnelles marocaines, parfaites pour le Ramadan.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Chebakias au Maroc</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Chebakias au Maroc</h1>
        <p>Un délice sucré traditionnel, idéal pour le Ramadan et les occasions spéciales.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Chebakias : Une Tradition Gourmande</h2>
        <p>Les chebakias sont des pâtisseries marocaines, préparées à base de pâte frite, enrobées de miel et de graines de sésame. Elles sont souvent servies pendant le Ramadan. Voici les meilleurs restaurants pour les savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chebakia-marrakech">Chebakia Marrakech</a></h3>
                <p><span>Adresse :</span> Rue Moulay Ali, Médina, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 42 36 14</p>
                <p>Ce restaurant traditionnel à Marrakech est réputé pour ses chebakias faites maison, délicatement enrobées de miel et de sésame.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/patisserie-fes">Pâtisserie Fès</a></h3>
                <p><span>Adresse :</span> Rue des Souks, Fès, Maroc</p>
                <p><span>Contact :</span> +212 5 35 63 29 10</p>
                <p>À Fès, cette pâtisserie est célèbre pour ses chebakias authentiques, riches en saveurs, et servies dans un cadre traditionnel marocain.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/souq-ramadan-casablanca">Souq Ramadan Casablanca</a></h3>
                <p><span>Adresse :</span> Rue Moulay Hassan, Casablanca, Maroc</p>
                <p><span>Contact :</span> +212 5 22 20 38 92</p>
                <p>Un restaurant à Casablanca, idéal pour déguster des chebakias pendant le mois sacré du Ramadan, dans une ambiance festive.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/patisserie-marrakech">Pâtisserie Marrakech</a></h3>
                <p><span>Adresse :</span> Place Jamaa el Fna, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 38 01 28</p>
                <p>Un lieu incontournable à Marrakech pour goûter des chebakias exquises, à la fois croustillantes et parfumées.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chebakia-rabat">Chebakia Rabat</a></h3>
                <p><span>Adresse :</span> Avenue Hassan II, Rabat, Maroc</p>
                <p><span>Contact :</span> +212 5 37 65 18 24</p>
                <p>À Rabat, ce restaurant propose des chebakias succulentes, parfaitement dorées, idéales pour le dessert ou pour accompagner un thé à la menthe.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Chebakia.blade.php ENDPATH**/ ?>