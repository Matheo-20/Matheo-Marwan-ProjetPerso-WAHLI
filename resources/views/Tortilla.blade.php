<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster une tortilla espagnole, un plat simple et savoureux de la cuisine espagnole.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Tortilla Espagnole en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Tortilla Espagnole en France</h1>
        <p>Découvrez l'authentique tortilla espagnole dans les meilleurs restaurants de France.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Tortilla : Un Plat Iconique de l'Espagne</h2>
        <p>La tortilla espagnole est un plat simple mais délicieux, souvent préparé avec des œufs, des pommes de terre et de l'oignon. Voici nos 5 restaurants préférés où vous pouvez en déguster une excellente version :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-tortilla-madre">La Tortilla Madre</a></h3>
                <p><span>Adresse :</span> 15 Rue de la Paix, 75002 Paris</p>
                <p><span>Contact :</span> +33 1 44 72 72 72</p>
                <p>Un lieu où la tortilla espagnole est à l'honneur, avec une recette maison à base de pommes de terre fondantes et d'une cuisson parfaite.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-casa-de-la-tortilla">La Casa de la Tortilla</a></h3>
                <p><span>Adresse :</span> 6 Rue des Bourdonnais, 75001 Paris</p>
                <p><span>Contact :</span> +33 1 42 34 56 78</p>
                <p>Le restaurant propose une tortilla traditionnelle préparée selon les règles de l'art espagnol. Un délice à ne pas manquer !</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/las-tortillas-de-marta">Las Tortillas de Marta</a></h3>
                <p><span>Adresse :</span> 20 Rue de la République, 69001 Lyon</p>
                <p><span>Contact :</span> +33 4 72 56 98 12</p>
                <p>Un petit restaurant familial à Lyon qui prépare la tortilla avec amour. On y sert aussi des tapas et autres spécialités espagnoles.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-tortillero">El Tortillero</a></h3>
                <p><span>Adresse :</span> 12 Rue du Faubourg, 13001 Marseille</p>
                <p><span>Contact :</span> +33 4 91 24 76 89</p>
                <p>Authenticité et saveurs d'Espagne dans ce restaurant marseillais où la tortilla est préparée avec des produits frais et locaux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tortilla-bar">Tortilla Bar</a></h3>
                <p><span>Adresse :</span> 5 Rue de la Fontaine, 75004 Paris</p>
                <p><span>Contact :</span> +33 1 42 72 44 55</p>
                <p>Un restaurant tendance où vous pouvez déguster une tortilla de qualité supérieure, accompagnée d'une sélection de sauces maison.</p>
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
