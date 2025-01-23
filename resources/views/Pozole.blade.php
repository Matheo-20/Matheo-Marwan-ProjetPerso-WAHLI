<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Mexique pour savourer un pozole traditionnel, un plat riche en saveurs et en histoire.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Pozole au Mexique</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent */
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
        <h1>Les 5 Meilleurs Restaurants de Pozole au Mexique</h1>
        <p>Savourez un pozole authentique dans les meilleurs restaurants mexicains.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Pozole : Une Tradition Mexicaine</h2>
        <p>Ce plat emblématique, composé de maïs hominy, de viande, et d'épices, est une véritable célébration des saveurs mexicaines. Voici où en déguster le meilleur :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-posoleria-tradicional">La Posolería Tradicional</a></h3>
                <p><span>Adresse :</span> Calle Independencia 456, Guadalajara</p>
                <p><span>Contact :</span> +52 33 5678 1234</p>
                <p>Un lieu incontournable pour un pozole traditionnel, servi avec tous les accompagnements typiques.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pozole-los-amigos">Pozole Los Amigos</a></h3>
                <p><span>Adresse :</span> Av. Juárez 789, Mexico City</p>
                <p><span>Contact :</span> +52 55 1234 5678</p>
                <p>Célèbre pour ses variations de pozole, notamment au poulet et au porc, accompagnées de tostadas croustillantes.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-del-pozole-verde">Casa del Pozole Verde</a></h3>
                <p><span>Adresse :</span> Centro Histórico, Puebla</p>
                <p><span>Contact :</span> +52 222 876 5432</p>
                <p>Connu pour son pozole verde unique, fait avec une base de tomatillos et des épices locales.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-tradicional-pozole">El Tradicional Pozole</a></h3>
                <p><span>Adresse :</span> Av. Revolución, Oaxaca</p>
                <p><span>Contact :</span> +52 951 654 3210</p>
                <p>Ce restaurant familial propose des recettes de pozole transmises de génération en génération.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sabores-del-pozole">Sabores del Pozole</a></h3>
                <p><span>Adresse :</span> Playa del Carmen, Quintana Roo</p>
                <p><span>Contact :</span> +52 984 321 4567</p>
                <p>Un pozole riche et savoureux, idéal après une journée passée à explorer la Riviera Maya.</p>
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
