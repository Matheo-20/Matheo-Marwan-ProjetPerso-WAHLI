<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Colombie pour savourer des empanadas colombiennes, un délice croustillant et savoureux.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Empanadas Colombiennes en Colombie</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Empanadas Colombiennes</h1>
        <p>Des en-cas croustillants et délicieux, symboles de la cuisine colombienne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Délice Incontournable de Colombie</h2>
        <p>Les empanadas colombiennes, farcies de viande, pommes de terre ou fromage, sont un pur régal. Découvrez où les déguster en Colombie :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/empanadas-la-tienda">Empanadas La Tienda</a></h3>
                <p><span>Adresse :</span> Carrera 25 #45-12, Bogotá, Colombie</p>
                <p><span>Contact :</span> +57 1 345 6789</p>
                <p>Ce restaurant est réputé pour ses empanadas croustillantes et ses nombreuses options de farces.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-mesoncito">El Mesoncito</a></h3>
                <p><span>Adresse :</span> Calle 12 #10-34, Medellín, Colombie</p>
                <p><span>Contact :</span> +57 4 123 4567</p>
                <p>Une adresse populaire à Medellín pour déguster des empanadas traditionnelles avec une sauce piquante maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/las-delicias-de-cali">Las Delicias de Cali</a></h3>
                <p><span>Adresse :</span> Avenida 6 #23-45, Cali, Colombie</p>
                <p><span>Contact :</span> +57 2 234 5678</p>
                <p>Un endroit où les empanadas sont préparées fraîches tous les jours, servies avec une touche locale unique.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sabores-paisa">Sabores Paisa</a></h3>
                <p><span>Adresse :</span> Plaza Bolívar, Cartagena, Colombie</p>
                <p><span>Contact :</span> +57 5 456 7890</p>
                <p>Situé à Cartagena, ce restaurant propose des empanadas savoureuses, accompagnées d'une ambiance chaleureuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-casa-de-las-empanadas">La Casa de las Empanadas</a></h3>
                <p><span>Adresse :</span> Carrera 30 #15-20, Barranquilla, Colombie</p>
                <p><span>Contact :</span> +57 5 654 3210</p>
                <p>Un incontournable pour les amateurs d'empanadas, avec des saveurs traditionnelles et des créations innovantes.</p>
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
