<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Canada où savourer le fameux Homard de l'Atlantique, un délice des côtes maritimes.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Canadiens pour Déguster le Homard de l'Atlantique</title>
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
        <h1>Les 5 Meilleurs Restaurants Canadiens pour Déguster le Homard de l'Atlantique</h1>
        <p>Le Homard de l'Atlantique est une véritable star des tables canadiennes. Découvrez les meilleurs restaurants pour en savourer toute la richesse.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Homard de l'Atlantique : Une Spécialité Incontournable des Maritimes</h2>
        <p>Le homard de l'Atlantique est pêché frais au large des côtes maritimes du Canada, offrant une chair délicieuse et savoureuse. Voici notre sélection des meilleurs restaurants pour déguster cette spécialité :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lobster-shack">Lobster Shack</a></h3>
                <p><span>Adresse :</span> 23 Wharf Rd, Shediac, NB E4P 2S1</p>
                <p><span>Contact :</span> +1 506-532-4527</p>
                <p>Un restaurant en bord de mer spécialisé dans le homard frais de l'Atlantique, servi de manière traditionnelle ou dans des plats plus innovants.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lobster-on-the-wharf">Lobster on the Wharf</a></h3>
                <p><span>Adresse :</span> 43 Harbour Rd, Charlottetown, PE C1A 6Y7</p>
                <p><span>Contact :</span> +1 902-892-7447</p>
                <p>Un endroit incontournable à Charlottetown pour déguster du homard de l'Atlantique dans une ambiance conviviale et authentique.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-lobster-sherman">The Lobster Sherman</a></h3>
                <p><span>Adresse :</span> 7100 Main St, Halifax, NS B3H 4S5</p>
                <p><span>Contact :</span> +1 902-423-6222</p>
                <p>Un restaurant réputé pour son homard cuit à la perfection et son service exceptionnel dans le centre de Halifax.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lobster-capital">Lobster Capital</a></h3>
                <p><span>Adresse :</span> 1205 Hwy 7, Lunenburg, NS B0J 2C0</p>
                <p><span>Contact :</span> +1 902-634-7777</p>
                <p>Situé dans le pittoresque Lunenburg, ce restaurant est célèbre pour ses plats de homard frais servis dans une variété de préparations créatives.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-lobster-pound">The Lobster Pound</a></h3>
                <p><span>Adresse :</span> 14 Maple Ave, Digby, NS B0V 1A0</p>
                <p><span>Contact :</span> +1 902-245-5566</p>
                <p>Un restaurant charmant servant des homards pêchés localement, cuits à la vapeur et servis avec des accompagnements typiques de la Nouvelle-Écosse.</p>
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
