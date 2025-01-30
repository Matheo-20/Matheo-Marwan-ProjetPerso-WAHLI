<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Argentine pour savourer le choripán, un sandwich incontournable de la cuisine argentine.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Choripán en Argentine</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Choripán en Argentine</h1>
        <p>Un sandwich emblématique, simple mais riche en saveurs.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Sandwich Préféré des Argentins</h2>
        <p>Le choripán, fait de chorizo grillé et de pain croustillant, est un incontournable de la cuisine de rue en Argentine. Voici les meilleurs endroits pour le déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-choripan-legendario">El Choripán Legendario</a></h3>
                <p><span>Adresse :</span> Av. Libertador 4500, 1426 Buenos Aires, Argentine</p>
                <p><span>Contact :</span> +54 11 5678-1234</p>
                <p>Connu pour ses choripáns préparés avec un chorizo artisanal et une sauce chimichurri maison.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-parrilla-del-parque">La Parrilla del Parque</a></h3>
                <p><span>Adresse :</span> Calle 9 de Julio 300, 5000 Córdoba, Argentine</p>
                <p><span>Contact :</span> +54 351 876-5432</p>
                <p>Un restaurant incontournable pour déguster un choripán généreux dans une ambiance conviviale.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/don-chorizo">Don Chorizo</a></h3>
                <p><span>Adresse :</span> Av. Sarmiento 750, 5500 Mendoza, Argentine</p>
                <p><span>Contact :</span> +54 261 432-8765</p>
                <p>Réputé pour son pain fait maison et ses sauces qui subliment le chorizo grillé.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/choripanera-pampa">Choripanera Pampa</a></h3>
                <p><span>Adresse :</span> Plaza Mayor, 6000 Rosario, Argentine</p>
                <p><span>Contact :</span> +54 341 765-4321</p>
                <p>Une institution locale pour des choripáns savoureux, accompagnés d'une bière artisanale.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-classico-choripan">El Clásico Choripán</a></h3>
                <p><span>Adresse :</span> Ruta Nacional 40, 7000 Bariloche, Argentine</p>
                <p><span>Contact :</span> +54 294 987-6543</p>
                <p>Offrant une vue imprenable, ce restaurant propose des choripáns au goût authentique.</p>
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
