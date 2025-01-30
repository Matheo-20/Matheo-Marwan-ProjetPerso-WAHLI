<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Côte d'Ivoire pour déguster un Kedjenou au poulet, un plat emblématique de la cuisine ivoirienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Kedjenou au Poulet en Côte d'Ivoire</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Kedjenou au Poulet en Côte d'Ivoire</h1>
        <p>Un plat traditionnel ivoirien à découvrir absolument !</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Kedjenou au Poulet : Un Plat Incontournable de la Cuisine Ivoirienne</h2>
        <p>Le kedjenou est un plat ivoirien à base de poulet, cuit lentement avec des épices et des légumes. Voici où vous pouvez déguster ce plat délicieux.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kedjenou-au-poulet">Chez Yao</a></h3>
                <p><span>Adresse :</span> Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 50 67 89</p>
                <p>Chez Yao est réputé pour sa recette traditionnelle du kedjenou au poulet, cuit avec des légumes frais et des épices locales.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kedjenou-poulet-luxe">Le Palais du Kedjenou</a></h3>
                <p><span>Adresse :</span> Yopougon, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 20 91 23 45</p>
                <p>Le Palais du Kedjenou propose un kedjenou au poulet exceptionnel, accompagné de riz, pour une expérience culinaire inoubliable.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kedjenou-ivorienne">Le Festin d'Abidjan</a></h3>
                <p><span>Adresse :</span> Cocody, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 21 22 34 56</p>
                <p>Le Festin d'Abidjan sert un kedjenou au poulet délicieux et parfumé, servi avec du riz ou de l'attiéké.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kedjenou-du-coin">La Table d'Abidjan</a></h3>
                <p><span>Adresse :</span> Plateau, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 22 34 56 78</p>
                <p>Un restaurant populaire servant un kedjenou au poulet savoureux, accompagné d'attiéké, dans une ambiance conviviale.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kedjenou-restaurant-ivoirien">Chez Moussa</a></h3>
                <p><span>Adresse :</span> Marcory, Abidjan, Côte d'Ivoire</p>
                <p><span>Contact :</span> +225 24 56 78 90</p>
                <p>Chez Moussa est un restaurant réputé pour son kedjenou au poulet cuit à la perfection et servi avec des accompagnements typiques ivoiriens.</p>
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
