<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Côte d'Ivoire pour déguster l'Alloco, un plat emblématique à base de bananes plantains frites, accompagné de sauce.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster l'Alloco en Côte d'Ivoire</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster l'Alloco en Côte d'Ivoire</h1>
        <p>Un plat traditionnel à base de bananes plantains frites, parfait pour vos repas gourmands !</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>L'Alloco : Un Plat Indémodable de la Cuisine Ivoirienne</h2>
        <p>L'alloco est un plat simple mais délicieux, composé de bananes plantains frites et souvent accompagné de sauce tomate ou d'attiéké. Voici les meilleurs endroits où vous pouvez le déguster en Côte d'Ivoire.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/alloco-bana-cote-d-ivoire">Alloco Bana</a></h3>
                <p><span>Adresse :</span> Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 50 67 89</p>
                <p>Alloco Bana propose un alloco savoureux accompagné de sauce tomate épicée et de poisson grillé.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/alloco-titi">Chez Titi</a></h3>
                <p><span>Adresse :</span> Yopougon, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 20 91 23 45</p>
                <p>Chez Titi est réputé pour son alloco servi avec du poulet braisé et des légumes frais.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/alloco-piment">Le Délice d'Alloco</a></h3>
                <p><span>Adresse :</span> Cocody, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 21 22 34 56</p>
                <p>Le Délice d'Alloco est un endroit incontournable pour savourer un alloco parfaitement frit, accompagné de sauce tomate épicée.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/alloco-grand-bassam">Alloco Grand-Bassam</a></h3>
                <p><span>Adresse :</span> Grand-Bassam, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 34 56 78</p>
                <p>Ce restaurant en bord de mer sert un alloco délicieux avec un choix de viandes et une sauce pimentée parfaite.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/alloco-doukou">Chez Doukou</a></h3>
                <p><span>Adresse :</span> Marcory, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 24 56 78 90</p>
                <p>Chez Doukou est célèbre pour ses portions généreuses d'alloco accompagné de viande, poisson ou attiéké.</p>
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
