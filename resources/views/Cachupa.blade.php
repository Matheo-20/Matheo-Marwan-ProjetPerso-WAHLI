<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Angola pour déguster la Cachupa, un plat traditionnel angolais à base de maïs, haricots, viande et légumes.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster la Cachupa en Angola</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster la Cachupa en Angola</h1>
        <p>Un plat traditionnel à base de maïs, haricots et légumes, savourez la véritable Cachupa angolaise.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Cachupa : Une Spécialité Incontournable de l'Angola</h2>
        <p>La Cachupa est un plat traditionnel angolais, fait principalement de maïs, haricots, légumes, et viande. C'est un plat généreux, idéal pour découvrir la richesse de la cuisine angolaise. Découvrez où déguster ce mets délicieux :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cachupa-chez-angolais">Cachupa Chez Angolais</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 923 456 789</p>
                <p>Chez Angolais, la Cachupa est préparée de manière traditionnelle avec des ingrédients frais et locaux, pour un goût authentique.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cachupa-douala">Cachupa Douala</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 923 876 543</p>
                <p>Un restaurant à la fois moderne et chaleureux, où vous pouvez déguster une Cachupa bien mijotée, accompagnée de riz ou de manioc.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cachupa-royale">Cachupa Royale</a></h3>
                <p><span>Adresse :</span> Benguela, Angola</p>
                <p><span>Contact :</span> +244 933 123 456</p>
                <p>Spécialiste de la Cachupa royale, ce restaurant propose une version plus sophistiquée de ce plat, en y ajoutant des légumes et des épices locales.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cachupa-village">Cachupa Village</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 912 345 678</p>
                <p>Dans un cadre simple et convivial, Cachupa Village vous sert une Cachupa généreuse et pleine de saveurs, cuisinée avec soin.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cachupa-bien-epicee">Cachupa Bien Épicée</a></h3>
                <p><span>Adresse :</span> Huambo, Angola</p>
                <p><span>Contact :</span> +244 931 234 567</p>
                <p>Une Cachupa épicée et savoureuse, préparée selon les traditions angolaises, parfaite pour ceux qui aiment les plats relevés.</p>
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
