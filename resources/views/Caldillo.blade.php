<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Chili pour savourer un délicieux caldillo de congrio, un plat traditionnel à base de poisson typique de la cuisine chilienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster un Caldillo de Congrio au Chili</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster un Caldillo de Congrio au Chili</h1>
        <p>Un plat traditionnel chilien à base de poisson, un délice incontournable de la cuisine chilienne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Caldillo de Congrio : Un Délice Marin Chilien</h2>
        <p>Le caldillo de congrio est un plat de soupe à base de poisson, typiquement préparé avec du congrio, un poisson local, des légumes et des épices. Découvrez les restaurants qui servent ce plat traditionnel chilien :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-caldillera-del-congrio">La Caldillera del Congrio</a></h3>
                <p><span>Adresse :</span> Av. Las Condes 1200, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 2345 6789</p>
                <p>Spécialiste des fruits de mer et du caldillo de congrio, ce restaurant vous offrira une expérience authentique de la cuisine chilienne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-congrio-del-mar">El Congrio del Mar</a></h3>
                <p><span>Adresse :</span> Calle Bellavista 456, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 3456 7890</p>
                <p>Un restaurant côtier réputé pour ses soupes de poisson, dont le caldillo de congrio, préparé avec des produits frais et locaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/los-sabores-del-congrio">Los Sabores del Congrio</a></h3>
                <p><span>Adresse :</span> Av. Providencia 900, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 4567 8901</p>
                <p>Ce restaurant met l'accent sur le caldillo de congrio, une soupe savoureuse et délicate, parfaite pour découvrir les saveurs de la mer chilienne.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-cocina-del-mar">La Cocina del Mar</a></h3>
                <p><span>Adresse :</span> Calle Los Heroes 789, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 1234</p>
                <p>Un restaurant spécialisé dans les plats à base de poisson, offrant un caldillo de congrio à la recette traditionnelle.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-tio-congrio">El Tío Congrio</a></h3>
                <p><span>Adresse :</span> Av. Santa Maria 1200, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 3456</p>
                <p>Ce restaurant propose un caldillo de congrio exquis, préparé selon les méthodes traditionnelles et servi avec des accompagnements parfaits.</p>
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
