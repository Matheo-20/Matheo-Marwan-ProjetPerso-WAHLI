<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs endroits au Canada pour déguster un BeaverTail, une pâtisserie typiquement canadienne délicieusement sucrée.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Canadiens pour Déguster des BeaverTails</title>
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
        <h1>Les 5 Meilleurs Restaurants Canadiens pour Déguster des BeaverTails</h1>
        <p>Le BeaverTail est une pâtisserie typiquement canadienne, servie chaude avec une variété de garnitures sucrées. Découvrez où en manger les meilleures !</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le BeaverTail : Une Gourmandise Canadienne Incontournable</h2>
        <p>Les BeaverTails sont une véritable institution au Canada, souvent dégustés lors de festivals ou de sorties en plein air. Voici notre sélection des meilleurs endroits pour les savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beavertails-ottawa">BeaverTails Ottawa</a></h3>
                <p><span>Adresse :</span> 1 Rideau St, Ottawa, ON K1N 8S7</p>
                <p><span>Contact :</span> +1 613-234-1234</p>
                <p>Le point de départ des célèbres BeaverTails, un endroit idéal pour déguster cette délicieuse pâtisserie dans la capitale canadienne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beavertails-montreal">BeaverTails Montréal</a></h3>
                <p><span>Adresse :</span> 1351 Rue Sainte-Catherine O, Montréal, QC H3G 1Y2</p>
                <p><span>Contact :</span> +1 514-123-4567</p>
                <p>Situé au cœur de Montréal, ce restaurant propose des BeaverTails avec une gamme de garnitures allant du chocolat chaud aux fruits frais.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beavertails-toronto">BeaverTails Toronto</a></h3>
                <p><span>Adresse :</span> 234 Queen St W, Toronto, ON M5V 2Z5</p>
                <p><span>Contact :</span> +1 416-555-7890</p>
                <p>Une adresse incontournable pour tous les amateurs de sucré à Toronto, avec des BeaverTails faits maison et personnalisés selon vos goûts.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beavertails-vancouver">BeaverTails Vancouver</a></h3>
                <p><span>Adresse :</span> 5288 Canada Way, Vancouver, BC V5G 1K2</p>
                <p><span>Contact :</span> +1 604-555-4321</p>
                <p>Ce restaurant se spécialise dans les BeaverTails traditionnels, parfaits pour une pause sucrée après une journée de visite dans la ville.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/beavertails-quebec">BeaverTails Québec</a></h3>
                <p><span>Adresse :</span> 555 Rue du Petit-Champlain, Québec, QC G1K 4J7</p>
                <p><span>Contact :</span> +1 418-555-1234</p>
                <p>Dans un cadre pittoresque, ce restaurant propose les meilleurs BeaverTails de la région, avec une large variété de garnitures sucrées et salées.</p>
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
