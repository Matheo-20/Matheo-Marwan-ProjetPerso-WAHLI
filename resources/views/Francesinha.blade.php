<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants portugais en France pour déguster une Francesinha, un plat emblématique du Portugal.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Portugais de Francesinha en France</title>
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
        <h1>Les 5 Meilleurs Restaurants Portugais de Francesinha en France</h1>
        <p>Venez découvrir la Francesinha, un plat généreux et épicé typique du Portugal, dans ces restaurants portugais renommés.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Francesinha : Le Plat Portugais Réconfortant</h2>
        <p>La Francesinha est un sandwich chaud, garni de viande, fromage et recouvert d'une sauce épicée, un véritable régal pour les amateurs de plats copieux. Découvrez où déguster cette spécialité en France :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-portugaise">Francesinha Portugaise</a></h3>
                <p><span>Adresse :</span> 35 Rue de la République, 75001 Paris</p>
                <p><span>Contact :</span> +33 1 42 78 19 30</p>
                <p>Ce restaurant propose une version authentique de la Francesinha, avec une sauce épicée parfaite et des ingrédients frais.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-francesinha">Casa Francesinha</a></h3>
                <p><span>Adresse :</span> 22 Rue des Martyrs, 75009 Paris</p>
                <p><span>Contact :</span> +33 1 45 87 60 18</p>
                <p>Une adresse incontournable pour déguster une Francesinha savoureuse, avec des viandes grillées et une sauce qui envoûte les papilles.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lisboa-francesinha">Lisboa Francesinha</a></h3>
                <p><span>Adresse :</span> 5 Rue des Vinaigriers, 75010 Paris</p>
                <p><span>Contact :</span> +33 1 42 45 93 55</p>
                <p>Venez savourer une Francesinha maison, accompagnée de frites maison et d'une sauce piquante qui fait la différence.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-porto">Casa Porto</a></h3>
                <p><span>Adresse :</span> 14 Avenue de l'Opéra, 75001 Paris</p>
                <p><span>Contact :</span> +33 1 42 60 00 91</p>
                <p>Dans ce restaurant, la Francesinha est un plat phare, préparé avec soin pour offrir une explosion de saveurs à chaque bouchée.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-paris">Francesinha Paris</a></h3>
                <p><span>Adresse :</span> 10 Rue des Abbesses, 75018 Paris</p>
                <p><span>Contact :</span> +33 1 48 74 35 22</p>
                <p>Une expérience culinaire unique avec leur Francesinha traditionnelle, garnie de viande tendre et nappée de sauce piquante.</p>
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
