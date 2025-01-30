<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Chili pour savourer de délicieuses sopaipillas, un plat traditionnel chilien à base de pâte frite.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Sopaipillas au Chili</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Sopaipillas au Chili</h1>
        <p>Une spécialité chilienne à base de pâte frite, un délice sucré ou salé à savourer avec un bon aji.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Sopaipillas : Un Plat Chilien Traditionnel</h2>
        <p>Les sopaipillas sont des petits beignets frits souvent servis avec du miel ou comme accompagnement de plats salés. Découvrez où déguster ces délices au Chili :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/las-sopaipillas-de-la-abuela">Las Sopaipillas de la Abuela</a></h3>
                <p><span>Adresse :</span> Calle Prat 567, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 2345 6789</p>
                <p>Ce restaurant traditionnel propose des sopaipillas accompagnées de miel et de piments, une spécialité locale parfaite pour découvrir la cuisine chilienne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-rincon-del-sopaipilla">El Rincón del Sopaipilla</a></h3>
                <p><span>Adresse :</span> Av. Libertador 1234, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 3456 7890</p>
                <p>Un petit restaurant caché qui sert des sopaipillas chaudes et croustillantes, accompagnées de sauces sucrées ou épicées.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-sopaipilla-de-oro">La Sopaipilla de Oro</a></h3>
                <p><span>Adresse :</span> Calle Alonso de Ovalle 998, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 4567 8901</p>
                <p>Un lieu emblématique pour goûter aux sopaipillas les plus dorées et croustillantes de la ville, servies avec du miel maison et un aji délicieux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sopaipillas-el-girasol">Sopaipillas El Girasol</a></h3>
                <p><span>Adresse :</span> Av. Bernardo O'Higgins 2350, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 1234</p>
                <p>Connu pour ses sopaipillas traditionnelles, El Girasol propose une grande variété de sauces pour accompagner ce plat délicieux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sopaipillas-la-nina">Sopaipillas La Niña</a></h3>
                <p><span>Adresse :</span> Calle Vicuña Mackenna 1234, Santiago, Chili</p>
                <p><span>Contact :</span> +56 2 6789 3456</p>
                <p>Un lieu populaire parmi les habitants pour déguster des sopaipillas authentiques, souvent servies avec un verre de chicha douce.</p>
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
