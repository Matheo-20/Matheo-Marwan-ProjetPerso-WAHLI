<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Brésil pour déguster le Churrasco, le fameux barbecue brésilien.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Churrasco au Brésil</title>
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
        <h1>Les 5 Meilleurs Restaurants de Churrasco au Brésil</h1>
        <p>Venez savourer le Churrasco, un véritable festin brésilien en toute convivialité.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Festin du Barbecue Brésilien</h2>
        <p>Le Churrasco est l'art du barbecue brésilien, avec des viandes grillées à la perfection et servies sur des brochettes. Découvrez nos restaurants recommandés :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churrascaria-gaucha">Churrascaria Gaúcha</a></h3>
                <p><span>Adresse :</span> Rua dos Três Irmãos, 120, 90220-120 Porto Alegre, Brésil</p>
                <p><span>Contact :</span> +55 51 3222-4000</p>
                <p>Un véritable temple du churrasco à Porto Alegre, offrant une grande variété de viandes grillées à la brésilienne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churrascaria-fogo-de-chao">Churrascaria Fogo de Chão</a></h3>
                <p><span>Adresse :</span> Av. das Nações Unidas, 12555, 04795-100 São Paulo, Brésil</p>
                <p><span>Contact :</span> +55 11 3842-2288</p>
                <p>La célèbre chaîne brésilienne de churrascarias, offrant une expérience culinaire exceptionnelle avec des viandes de qualité supérieure.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churrascaria-carretão">Churrascaria Carretão</a></h3>
                <p><span>Adresse :</span> Rua dos Três Irmãos, 51, 20230-130 Rio de Janeiro, Brésil</p>
                <p><span>Contact :</span> +55 21 2275-9991</p>
                <p>Une expérience de churrasco unique avec une variété impressionnante de viandes et un buffet à volonté.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churrascaria-batista">Churrascaria Batista</a></h3>
                <p><span>Adresse :</span> Rua Almirante Tamandaré, 89, 30010-190 Belo Horizonte, Brésil</p>
                <p><span>Contact :</span> +55 31 3224-1077</p>
                <p>À Belo Horizonte, ce restaurant propose des viandes grillées savamment préparées avec des recettes traditionnelles du Minas Gerais.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churrascaria-santa-greta">Churrascaria Santa Greta</a></h3>
                <p><span>Adresse :</span> Av. Brasil, 3000, 69010-210 Manaus, Brésil</p>
                <p><span>Contact :</span> +55 92 3231-2299</p>
                <p>Située à Manaus, cette churrascaria offre un véritable festin pour les amateurs de viande, grillée à la perfection et servie dans une ambiance festive.</p>
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
