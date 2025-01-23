<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Brésil pour déguster des Brigadeiros, le célèbre dessert brésilien au chocolat.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Brigadeiros au Brésil</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Brigadeiros au Brésil</h1>
        <p>Venez savourer ce délice chocolaté typique du Brésil : le Brigadeiro.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Dessert Brésilien par Excellence</h2>
        <p>Le Brigadeiro, une douceur à base de lait condensé et de chocolat, est un incontournable de la pâtisserie brésilienne. Voici nos restaurants recommandés pour le goûter :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/brigadeiro-de-ouro">Brigadeiro de Ouro</a></h3>
                <p><span>Adresse :</span> Rua das Flores, 45, 01000-000 São Paulo, Brésil</p>
                <p><span>Contact :</span> +55 11 3222-4000</p>
                <p>Ce café est un paradis pour les amateurs de Brigadeiros, offrant une variété de recettes traditionnelles et créatives.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/brigadeiro-delicia">Brigadeiro Delícia</a></h3>
                <p><span>Adresse :</span> Avenida Paulista, 1336, 01311-200 São Paulo, Brésil</p>
                <p><span>Contact :</span> +55 11 3150-0099</p>
                <p>Un lieu cosy où vous pourrez savourer des Brigadeiros avec des garnitures innovantes et une ambiance chaleureuse.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/choco-vida">Choco Vida</a></h3>
                <p><span>Adresse :</span> Rua do Mercado, 13, 40020-020 Salvador, Brésil</p>
                <p><span>Contact :</span> +55 71 3241-5588</p>
                <p>Spécialisé dans les desserts brésiliens, ce restaurant propose une version divine du Brigadeiro accompagné d’autres douceurs locales.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/brigadeiro-factory">Brigadeiro Factory</a></h3>
                <p><span>Adresse :</span> Rua da Lapa, 220, 20230-000 Rio de Janeiro, Brésil</p>
                <p><span>Contact :</span> +55 21 2123-4987</p>
                <p>Ce restaurant est une véritable usine à Brigadeiros, avec un large choix de saveurs allant des plus classiques aux plus audacieuses.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/brigadeiro-charmoso">Brigadeiro Charmoso</a></h3>
                <p><span>Adresse :</span> Praça Tiradentes, 100, 01025-010 Rio de Janeiro, Brésil</p>
                <p><span>Contact :</span> +55 21 2289-3312</p>
                <p>Un lieu charmant où le Brigadeiro est préparé avec amour et une touche d’originalité, à ne pas manquer lors de votre visite à Rio.</p>
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
