<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants portugais en France pour déguster un Bacalhau, un plat emblématique à base de morue.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Portugais de Bacalhau en France</title>
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
        <h1>Les 5 Meilleurs Restaurants Portugais de Bacalhau en France</h1>
        <p>Venez savourer le Bacalhau, le plat traditionnel portugais à base de morue salée, dans ces restaurants portugais renommés.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Bacalhau : Le Plat Traditionnel Portugais</h2>
        <p>Le Bacalhau, ou morue salée, est un plat emblématique du Portugal. Découvrez où déguster ce délice dans les meilleurs restaurants portugais en France :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bacalhau-portugaise">Bacalhau Portugaise</a></h3>
                <p><span>Adresse :</span> 12 Rue des Écoles, 75005 Paris</p>
                <p><span>Contact :</span> +33 1 44 32 59 80</p>
                <p>Ce restaurant met en valeur le Bacalhau sous toutes ses formes, avec des recettes traditionnelles et des accompagnements savoureux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-taberna-do-bacalhau">La Taberna do Bacalhau</a></h3>
                <p><span>Adresse :</span> 45 Rue de la Gaieté, 75014 Paris</p>
                <p><span>Contact :</span> +33 1 43 36 78 90</p>
                <p>Venez découvrir leur Bacalhau rôti, un véritable délice, accompagné de légumes frais et de sauces maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-bacalhau">Casa Bacalhau</a></h3>
                <p><span>Adresse :</span> 18 Rue des Petits Champs, 75002 Paris</p>
                <p><span>Contact :</span> +33 1 42 60 22 44</p>
                <p>La spécialité du restaurant est le Bacalhau à la braise, préparé selon la recette traditionnelle de la côte portugaise.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/portugal-bacalhau">Portugal Bacalhau</a></h3>
                <p><span>Adresse :</span> 7 Rue de la Chaussee d'Antin, 75009 Paris</p>
                <p><span>Contact :</span> +33 1 44 55 72 22</p>
                <p>Un restaurant cosy où vous pourrez déguster un Bacalhau délicieux, avec une recette maison et une ambiance typiquement portugaise.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bacalhau-delices">Bacalhau Délices</a></h3>
                <p><span>Adresse :</span> 10 Rue des Flandres, 75019 Paris</p>
                <p><span>Contact :</span> +33 1 42 00 23 45</p>
                <p>Un endroit parfait pour savourer un Bacalhau frais et bien préparé, servi avec des légumes de saison et une sauce savoureuse.</p>
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
