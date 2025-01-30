<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Chine pour savourer le Canard Laqué, un plat emblématique de la gastronomie chinoise.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Canard Laqué en Chine</title>
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

    <header>
        <h1>Les Meilleurs Restaurants pour Déguster le Canard Laqué</h1>
        <p>Découvrez où savourer ce mets emblématique de la cuisine chinoise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Plat Légendaire de la Cuisine Chinoise</h2>
        <p>Le Canard Laqué, célèbre pour sa peau croustillante et sa viande tendre, est une spécialité incontournable de Pékin et au-delà. Voici nos suggestions :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/quan-ju-de">Quanjude</a></h3>
                <p><span>Adresse :</span> 32 Qianmen St, Dongcheng, Pékin</p>
                <p><span>Contact :</span> +86 10 6511 2418</p>
                <p>Quanjude est un restaurant historique de Pékin, célèbre pour son Canard Laqué préparé selon une recette traditionnelle depuis 1864.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/da-dong">Da Dong Roast Duck</a></h3>
                <p><span>Adresse :</span> Jinbao Pl, Dongcheng, Pékin</p>
                <p><span>Contact :</span> +86 10 6526 8888</p>
                <p>Une version moderne et raffinée du Canard Laqué, réputée pour sa présentation élégante et son goût exquis.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/li-qun">Li Qun Roast Duck Restaurant</a></h3>
                <p><span>Adresse :</span> Beixiangfeng, Dongcheng, Pékin</p>
                <p><span>Contact :</span> +86 10 6705 5578</p>
                <p>Un petit restaurant familial où vous pouvez déguster un Canard Laqué traditionnel dans une ambiance chaleureuse.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/siji-minfu">Siji Minfu</a></h3>
                <p><span>Adresse :</span> Wangfujing, Dongcheng, Pékin</p>
                <p><span>Contact :</span> +86 10 6522 2001</p>
                <p>Un lieu populaire offrant un excellent rapport qualité-prix et un Canard Laqué cuit à la perfection.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/xinya-roast-duck">Xinya Roast Duck</a></h3>
                <p><span>Adresse :</span> People’s Square, Shanghai</p>
                <p><span>Contact :</span> +86 21 6351 8888</p>
                <p>Un restaurant élégant de Shanghai connu pour sa cuisine de qualité et son délicieux Canard Laqué.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
