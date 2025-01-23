<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster des churros, un délice sucré de la cuisine espagnole.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Churros en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Churros en France</h1>
        <p>Découvrez les meilleurs endroits pour déguster des churros authentiques, un délice sucré incontournable.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Churros : Une Douceur Traditionnelle Espagnole</h2>
        <p>Les churros, ces pâtisseries croustillantes et sucrées, sont un véritable délice. Voici nos 5 restaurants préférés pour les savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churros-para-ti">Churros Para Ti</a></h3>
                <p><span>Adresse :</span> 45 Rue du Faubourg Saint-Antoine, 75011 Paris</p>
                <p><span>Contact :</span> +33 1 43 58 22 44</p>
                <p>Un lieu où les churros sont faits maison, délicieux et accompagnés de différentes sauces au choix, pour un vrai goût d'Espagne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-fabrica-de-churros">La Fabrica de Churros</a></h3>
                <p><span>Adresse :</span> 12 Rue de la République, 69001 Lyon</p>
                <p><span>Contact :</span> +33 4 72 36 74 55</p>
                <p>Une boutique dédiée aux churros où chaque bouchée est un pur plaisir, accompagnée de chocolat chaud ou de sucre glace.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweet-churros">Sweet Churros</a></h3>
                <p><span>Adresse :</span> 18 Rue des Martyrs, 75009 Paris</p>
                <p><span>Contact :</span> +33 1 44 53 33 87</p>
                <p>Ce restaurant moderne offre une expérience unique avec ses churros sucrés, mais aussi des versions salées pour les plus aventureux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-churros-de-mimi">Les Churros de Mimi</a></h3>
                <p><span>Adresse :</span> 7 Boulevard de la Liberté, 13001 Marseille</p>
                <p><span>Contact :</span> +33 4 91 54 68 92</p>
                <p>Chez Mimi, les churros sont faits maison et servis dans une ambiance chaleureuse, avec un choix de différentes garnitures.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churros-deluxe">Churros Deluxe</a></h3>
                <p><span>Adresse :</span> 22 Rue Saint-Denis, 75001 Paris</p>
                <p><span>Contact :</span> +33 1 55 22 16 98</p>
                <p>Un restaurant incontournable à Paris pour déguster des churros frais et croustillants, accompagnés de sauces maison à tomber.</p>
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
