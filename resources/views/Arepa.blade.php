<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Colombie pour déguster les arepas, une spécialité emblématique de la cuisine colombienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Arepas en Colombie</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Arepas en Colombie</h1>
        <p>Un délice emblématique de la cuisine colombienne, à découvrir absolument.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Spécialité Traditionnelle Colombienne</h2>
        <p>Les arepas, ces galettes de maïs polyvalentes, sont un pilier de la gastronomie colombienne. Découvrez les meilleurs endroits pour en profiter :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/arepas-de-la-abuela">Arepas de la Abuela</a></h3>
                <p><span>Adresse :</span> Carrera 15 #34-20, Bogotá, Colombie</p>
                <p><span>Contact :</span> +57 1 234 5678</p>
                <p>Connue pour ses arepas garnies de fromage frais et de viande savoureuse.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-sabor-de-antioquia">El Sabor de Antioquia</a></h3>
                <p><span>Adresse :</span> Calle 10 #20-45, Medellín, Colombie</p>
                <p><span>Contact :</span> +57 4 876 5432</p>
                <p>Un lieu incontournable pour savourer des arepas traditionnelles d'Antioquia.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-areperia">La Arepería</a></h3>
                <p><span>Adresse :</span> Avenida 6 #12-30, Cali, Colombie</p>
                <p><span>Contact :</span> +57 2 345 6789</p>
                <p>Un restaurant moderne proposant des variations uniques et créatives d'arepas.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/arepas-y-mas">Arepas y Más</a></h3>
                <p><span>Adresse :</span> Calle 50 #70-80, Barranquilla, Colombie</p>
                <p><span>Contact :</span> +57 5 654 3210</p>
                <p>Offre une large gamme d'arepas, de la plus simple à la plus garnie.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/delicias-colombianas">Delicias Colombianas</a></h3>
                <p><span>Adresse :</span> Plaza Mayor, Cartagena, Colombie</p>
                <p><span>Contact :</span> +57 5 987 6543</p>
                <p>Des arepas traditionnelles servies avec une touche de saveurs caribéennes.</p>
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
