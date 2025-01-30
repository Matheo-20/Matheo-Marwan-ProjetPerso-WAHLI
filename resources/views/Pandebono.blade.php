<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Colombie pour savourer des pandebonos, une délicieuse spécialité colombienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Pandebonos en Colombie</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Pandebonos</h1>
        <p>Découvrez la douceur et la texture unique de cette spécialité colombienne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Pain au Fromage Typique de Colombie</h2>
        <p>Les pandebonos, ces pains moelleux au fromage, sont une gourmandise incontournable en Colombie. Voici où les déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pandebono-dorado">Pandebono Dorado</a></h3>
                <p><span>Adresse :</span> Calle 15 #8-45, Bogotá, Colombie</p>
                <p><span>Contact :</span> +57 1 345 6789</p>
                <p>Ce lieu emblématique de Bogotá propose des pandebonos fraîchement préparés tout au long de la journée.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-pan-perfecto">El Pan Perfecto</a></h3>
                <p><span>Adresse :</span> Carrera 20 #12-34, Medellín, Colombie</p>
                <p><span>Contact :</span> +57 4 234 5678</p>
                <p>Un endroit où les pandebonos sont préparés selon des recettes traditionnelles et accompagnés de café local.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sabores-de-cali">Sabores de Cali</a></h3>
                <p><span>Adresse :</span> Avenida 7 #21-78, Cali, Colombie</p>
                <p><span>Contact :</span> +57 2 345 6789</p>
                <p>Ce restaurant est connu pour ses pandebonos légèrement croustillants à l'extérieur et tendres à l'intérieur.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/masas-tradicionales">Masas Tradicionales</a></h3>
                <p><span>Adresse :</span> Plaza Bolívar, Cartagena, Colombie</p>
                <p><span>Contact :</span> +57 5 456 7890</p>
                <p>Situé à Cartagena, cet établissement propose des pandebonos avec une touche régionale unique.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-casa-del-pandebono">La Casa del Pandebono</a></h3>
                <p><span>Adresse :</span> Carrera 30 #10-15, Barranquilla, Colombie</p>
                <p><span>Contact :</span> +57 5 654 3210</p>
                <p>Un classique de Barranquilla, où les pandebonos sont servis chauds avec des accompagnements variés.</p>
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
