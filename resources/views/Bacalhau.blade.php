<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants portugais pour savourer le bacalhau traditionnel.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster du Bacalhau au Portugal</title>
    <style>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Bacalhau au Portugal</h1>
        <p>Le bacalhau, poisson emblématique du Portugal, est un véritable délice que vous devez absolument goûter !</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Bacalhau, une Tradition Culinaire Portugaise</h2>
        <p>Le bacalhau est un plat incontournable au Portugal. Que ce soit sous forme de morue séchée ou de plats comme le bacalhau à brás, découvrez les meilleures adresses pour goûter ce délice portugais.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/ramiro">Cervejaria Ramiro - Lisbonne</a></h3>
                <p><span>Adresse :</span> Av. Almirante Reis nº1, 1150-007 Lisbonne</p>
                <p><span>Contact :</span> +351 21 885 3016</p>
                <p>Ce restaurant est un véritable temple du bacalhau et des fruits de mer. Les plats de bacalhau sont cuisinés de façon traditionnelle, avec une touche moderne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/marisqueira">Marisqueira O Barqueiro - Porto</a></h3>
                <p><span>Adresse :</span> Rua da Alegria 611, 4000-046 Porto</p>
                <p><span>Contact :</span> +351 22 208 6584</p>
                <p>Située dans le centre de Porto, cette marisqueira est réputée pour son bacalhau grillé à la perfection, accompagné de pommes de terre et d'épices locales.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bacalhau-da-vovo">Bacalhau da Vóvó - Faro</a></h3>
                <p><span>Adresse :</span> Rua do Comércio 12, 8000-138 Faro</p>
                <p><span>Contact :</span> +351 289 899 456</p>
                <p>Un restaurant familial où vous pourrez goûter au bacalhau sous diverses formes, de la morue séchée au bacalhau à brás.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/adega-mia">Adega Mia - Sintra</a></h3>
                <p><span>Adresse :</span> Rua da Cintura do Porto de Lisboa, 1300-306 Lisbonne</p>
                <p><span>Contact :</span> +351 21 362 2600</p>
                <p>Avec une vue imprenable sur le port de Lisbonne, Adega Mia est un excellent choix pour savourer un bacalhau traditionnel dans une ambiance conviviale.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurante-bacalhau">Restaurante Bacalhau & Companhia - Évora</a></h3>
                <p><span>Adresse :</span> Rua de São Mamede 18, 1100-234 Lisbonne</p>
                <p><span>Contact :</span> +351 21 882 4565</p>
                <p>Un restaurant où le bacalhau est roi ! Dégustez des plats variés de bacalhau, préparés de manière traditionnelle et servies dans une ambiance chaleureuse.</p>
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
