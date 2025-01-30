<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Australie pour déguster les Barbecued Snags, une spécialité australienne incontournable.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Barbecued Snags en Australie</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Barbecued Snags en Australie</h1>
        <p>Venez découvrir cette spécialité australienne à base de saucisses grillées sur le barbecue.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Barbecued Snags : Saucisses Grillées au Barbecue</h2>
        <p>Les Barbecued Snags sont des saucisses grillées typiquement australiennes, parfaites pour un déjeuner en plein air ou un barbecue entre amis. Découvrez où les déguster :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/snags-barbecue">Snags & Grill</a></h3>
                <p><span>Adresse :</span> 50 King Street, Sydney</p>
                <p><span>Contact :</span> +61 2 2345 6789</p>
                <p>Snags & Grill propose les meilleures Barbecued Snags de la ville, accompagnées de délicieuses sauces et garnitures. Un lieu incontournable pour les amateurs de barbecue !</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/aussie-snags">Aussie Snags BBQ</a></h3>
                <p><span>Adresse :</span> 32 Queen Street, Melbourne</p>
                <p><span>Contact :</span> +61 3 3456 7890</p>
                <p>Aussie Snags BBQ est connu pour ses saucisses grillées au barbecue, servies avec des salades fraîches et des frites maison. Un vrai délice australien !</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sausage-paradise">Sausage Paradise</a></h3>
                <p><span>Adresse :</span> 100 Darling Street, Brisbane</p>
                <p><span>Contact :</span> +61 7 4567 8901</p>
                <p>Sausage Paradise propose une grande variété de Barbecued Snags, allant des classiques aux saveurs plus audacieuses. Parfait pour les gourmets !</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/snags-grill">Snags Grill</a></h3>
                <p><span>Adresse :</span> 75 Beach Road, Perth</p>
                <p><span>Contact :</span> +61 8 6789 1234</p>
                <p>Snags Grill est le lieu idéal pour déguster des Barbecued Snags classiques, grillées à la perfection, accompagnées de pommes de terre grillées et d'une sauce barbecue maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-bbq-snags">The BBQ Snags</a></h3>
                <p><span>Adresse :</span> 22 High Street, Sydney</p>
                <p><span>Contact :</span> +61 2 5678 2345</p>
                <p>The BBQ Snags est une adresse incontournable pour les amateurs de barbecue, avec des saucisses grillées délicieuses, servies avec des légumes grillés et des sauces maison.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
