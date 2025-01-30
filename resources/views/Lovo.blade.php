<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux Fidji pour déguster le Lovo, un plat traditionnel fidjien cuit dans un four en terre.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Lovo aux Fidji</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster le Lovo aux Fidji</h1>
        <p>Découvrez où savourer le Lovo, un plat fidjien traditionnel cuit dans un four en terre.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Le Lovo : Un Plat Traditionnel Fidjien</h2>
        <p>Le Lovo est un plat fidjien authentique cuit dans un four en terre, où les viandes et légumes sont cuits à la chaleur des pierres chauffées. Découvrez où goûter ce plat délicieux aux Fidji.</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lovo-cuisine">Lovo Cuisine</a></h3>
                <p><span>Adresse :</span> 101 Island Street, Suva</p>
                <p><span>Contact :</span> +679 123 4567</p>
                <p>Spécialisé dans la cuisine traditionnelle fidjienne, Lovo Cuisine propose une version authentique du Lovo, avec des viandes et légumes cuits à la perfection.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/traditional-lovo">Traditional Lovo</a></h3>
                <p><span>Adresse :</span> 78 Coral Coast, Nadi</p>
                <p><span>Contact :</span> +679 234 5678</p>
                <p>Traditional Lovo offre une expérience culinaire unique avec son four en terre pour cuire ce plat traditionnel fidjien, offrant une explosion de saveurs locales.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lovo-treats">Lovo Treats</a></h3>
                <p><span>Adresse :</span> 32 Beach Road, Lautoka</p>
                <p><span>Contact :</span> +679 345 6789</p>
                <p>Lovo Treats est un incontournable pour ceux qui souhaitent goûter à une version moderne du Lovo, tout en conservant l'authenticité du plat traditionnel.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fijian-lovo">Fijian Lovo</a></h3>
                <p><span>Adresse :</span> 56 Marina Bay, Suva</p>
                <p><span>Contact :</span> +679 456 7890</p>
                <p>Fijian Lovo propose une version raffinée du Lovo avec une variété de viandes et légumes cuits lentement, parfait pour découvrir les saveurs de Fidji.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fiji-lovo-restaurant">Fiji Lovo Restaurant</a></h3>
                <p><span>Adresse :</span> 89 Pacific Avenue, Nadi</p>
                <p><span>Contact :</span> +679 567 8901</p>
                <p>Fiji Lovo Restaurant est l'endroit idéal pour goûter à un Lovo authentique, préparé selon les traditions fidjiennes et servi dans une ambiance conviviale.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
