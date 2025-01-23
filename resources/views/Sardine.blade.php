<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants portugais en France pour déguster des sardines grillées, un plat traditionnel incontournable de la cuisine portugaise.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Portugais de Sardines en France</title>
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
        <h1>Les 5 Meilleurs Restaurants Portugais de Sardines en France</h1>
        <p>Découvrez la meilleure façon de déguster des sardines grillées, un plat typique et savoureux de la cuisine portugaise.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Sardines Grillées : Un Plat Traditionnel Portugais</h2>
        <p>Les sardines grillées, un plat typique du Portugal, sont souvent servies lors des fêtes traditionnelles. Découvrez où les déguster en France :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/portugal-restaurant">Portugal Restaurant</a></h3>
                <p><span>Adresse :</span> 23 Rue de la République, 75002 Paris</p>
                <p><span>Contact :</span> +33 1 45 67 89 01</p>
                <p>Un restaurant portugais incontournable pour déguster des sardines grillées accompagnées de légumes et de pain de maïs traditionnel.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lisbonne-grill">Lisbonne Grill</a></h3>
                <p><span>Adresse :</span> 10 Rue de la Croix-Rouge, 69007 Lyon</p>
                <p><span>Contact :</span> +33 4 78 33 44 22</p>
                <p>Spécialisé dans les fruits de mer et la cuisine portugaise, leur spécialité : les sardines grillées servies avec une sauce au citron et à l'ail.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-sardines-de-portugal">Les Sardines de Portugal</a></h3>
                <p><span>Adresse :</span> 5 Rue de Montreuil, 75011 Paris</p>
                <p><span>Contact :</span> +33 1 48 07 87 65</p>
                <p>Un lieu où les sardines sont à l'honneur, grillées à la perfection et accompagnées de délicieuses spécialités portugaises.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-portugalia">Casa Portugalia</a></h3>
                <p><span>Adresse :</span> 32 Rue du Faubourg Saint-Antoine, 75012 Paris</p>
                <p><span>Contact :</span> +33 1 45 89 67 43</p>
                <p>Une maison traditionnelle portugaise où vous pourrez savourer des sardines grillées, servies avec des pommes de terre et une sauce maison unique.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/porto-grill">Porto Grill</a></h3>
                <p><span>Adresse :</span> 15 Boulevard de la Liberté, 13001 Marseille</p>
                <p><span>Contact :</span> +33 4 91 23 45 67</p>
                <p>Ce restaurant offre une ambiance portugaise chaleureuse et des sardines grillées accompagnées de vin portugais et de légumes frais.</p>
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
