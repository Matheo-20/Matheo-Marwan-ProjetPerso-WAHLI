<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants portugais en France pour déguster des Pastéis de Nata, une délicieuse pâtisserie traditionnelle du Portugal.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Portugais de Pastéis de Nata en France</title>
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
        <h1>Les 5 Meilleurs Restaurants Portugais de Pastéis de Nata en France</h1>
        <p>Dégustez les célèbres Pastéis de Nata, un délice de la pâtisserie portugaise, dans ces établissements de renom.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Pastéis de Nata : Un Trésor de la Pâtisserie Portugaise</h2>
        <p>Les Pastéis de Nata, petites tartes à la crème délicieuses, sont l'emblème de la pâtisserie portugaise. Découvrez où savourer ces délices en France :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/patisserie-portugaise">Pâtisserie Portugaise</a></h3>
                <p><span>Adresse :</span> 45 Rue de la République, 75001 Paris</p>
                <p><span>Contact :</span> +33 1 42 16 75 43</p>
                <p>Une pâtisserie spécialisée dans les Pastéis de Nata traditionnels, avec une pâte parfaitement dorée et une crème onctueuse à l'intérieur.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bakery-lisboa">Bakery Lisboa</a></h3>
                <p><span>Adresse :</span> 28 Rue des Martyrs, 75009 Paris</p>
                <p><span>Contact :</span> +33 1 44 53 60 82</p>
                <p>Faites une halte dans cette boulangerie typique de Lisbonne pour goûter des Pastéis de Nata frais, préparés à la manière traditionnelle.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-pastelaria">Casa Pastelaria</a></h3>
                <p><span>Adresse :</span> 12 Boulevard de Sébastopol, 75003 Paris</p>
                <p><span>Contact :</span> +33 1 42 72 72 50</p>
                <p>Un endroit charmant où les Pastéis de Nata sont à l'honneur, servis avec un espresso portugais pour un moment de pure gourmandise.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pastel-de-nata-paris">Pastel de Nata Paris</a></h3>
                <p><span>Adresse :</span> 16 Rue des Vinaigriers, 75010 Paris</p>
                <p><span>Contact :</span> +33 1 55 28 09 12</p>
                <p>Un établissement réputé pour ses Pastéis de Nata faits maison, avec une pâte légère et une crème riche qui fond en bouche.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lisbonne-patisserie">Lisbonne Patisserie</a></h3>
                <p><span>Adresse :</span> 24 Avenue de l'Opéra, 75001 Paris</p>
                <p><span>Contact :</span> +33 1 42 61 44 33</p>
                <p>Venez découvrir les véritables Pastéis de Nata de Lisbonne, cuits sur place avec des ingrédients de qualité et un savoir-faire unique.</p>
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
