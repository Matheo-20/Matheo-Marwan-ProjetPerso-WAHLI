<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Japon pour déguster des tempuras croustillants et délicieux, un classique de la cuisine japonaise.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Tempuras au Japon</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Tempuras</h1>
        <p>Savourez des tempuras croustillants et délicieux dans les meilleures adresses du Japon</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Plat Traditionnel et Léger</h2>
        <p>Les tempuras sont des légumes et des fruits de mer enrobés d'une pâte légère et frits à la perfection. Voici les meilleurs restaurants pour découvrir ce plat classique japonais :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tenkatsu">Tenkatsu</a></h3>
                <p><span>Adresse :</span> 1-2-3 Shinjuku, Tokyo</p>
                <p><span>Contact :</span> +81 3 1234 5678</p>
                <p>Spécialisé dans les tempuras, Tenkatsu propose une large variété de fruits de mer et légumes frits dans une pâte légère et croquante.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tenkichi">Tenkichi</a></h3>
                <p><span>Adresse :</span> 5-1 Ginza, Tokyo</p>
                <p><span>Contact :</span> +81 3 2345 6789</p>
                <p>Un restaurant traditionnel de tempura où chaque bouchée est une explosion de saveurs. Le chef vous propose des tempuras de saison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tenzushi">Tenzushi</a></h3>
                <p><span>Adresse :</span> 2-3-4 Ueno, Tokyo</p>
                <p><span>Contact :</span> +81 3 3456 7890</p>
                <p>Alliant la fraîcheur des ingrédients et une friture parfaite, Tenzushi propose une expérience unique de tempura à la japonaise.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tenroku">Tenroku</a></h3>
                <p><span>Adresse :</span> 3-4-5 Roppongi, Tokyo</p>
                <p><span>Contact :</span> +81 3 4567 8910</p>
                <p>Un établissement réputé pour ses tempuras légers et croquants, en particulier les crevettes et les légumes frits à la perfection.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tempura-aki">Tempura Aki</a></h3>
                <p><span>Adresse :</span> 7-8-9 Asakusa, Tokyo</p>
                <p><span>Contact :</span> +81 3 5678 1234</p>
                <p>Un restaurant intimiste où vous pourrez savourer des tempuras fraîchement préparés dans une atmosphère agréable et décontractée.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
