<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Mexique pour déguster un guacamole frais et authentique, préparé à la perfection.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Guacamole au Mexique</title>
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
        <h1>Les 5 Meilleurs Restaurants de Guacamole au Mexique</h1>
        <p>Dégustez un guacamole frais et authentique dans les meilleurs restaurants du Mexique.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Guacamole : L'Essence de la Cuisine Mexicaine</h2>
        <p>Préparé à base d'avocats frais, de citron vert, et d'épices, le guacamole est un incontournable. Voici où savourer le meilleur au Mexique :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-casa-del-aguacate">La Casa del Aguacate</a></h3>
                <p><span>Adresse :</span> Calle Reforma 123, Guadalajara</p>
                <p><span>Contact :</span> +52 33 4444 5678</p>
                <p>Spécialisé dans les avocats, ce restaurant propose un guacamole fait à table avec des ingrédients frais.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/guacamole-azul">Guacamole Azul</a></h3>
                <p><span>Adresse :</span> Av. Insurgentes 234, Mexico City</p>
                <p><span>Contact :</span> +52 55 6666 7890</p>
                <p>Leur guacamole est célèbre pour son assaisonnement unique et son accompagnement de tortillas maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-aguacate-feliz">El Aguacate Feliz</a></h3>
                <p><span>Adresse :</span> Playa del Carmen, Quintana Roo</p>
                <p><span>Contact :</span> +52 984 123 4567</p>
                <p>Un lieu incontournable près des plages pour un guacamole frais et savoureux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/aguacates-y-sabor">Aguacates y Sabor</a></h3>
                <p><span>Adresse :</span> Centro Histórico, Oaxaca</p>
                <p><span>Contact :</span> +52 951 654 3210</p>
                <p>Célèbre pour ses variations créatives de guacamole, incluant des options épicées ou sucrées.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/verde-y-cremoso">Verde y Cremoso</a></h3>
                <p><span>Adresse :</span> Tulum Pueblo, Quintana Roo</p>
                <p><span>Contact :</span> +52 984 987 6543</p>
                <p>Un guacamole crémeux et servi avec une vue magnifique sur la nature environnante.</p>
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
