<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Australie pour déguster une délicieuse Pavlova, une spécialité sucrée australienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Pavlovas en Australie</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Pavlovas en Australie</h1>
        <p>Venez découvrir cette délicieuse pâtisserie traditionnelle australienne dans les meilleurs restaurants.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Pavlova : Un Dessert Incontournable Australien</h2>
        <p>La Pavlova est une meringue croustillante à l'extérieur et moelleuse à l'intérieur, souvent garnie de crème fouettée et de fruits frais. Découvrez où vous pouvez déguster cette spécialité :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pavlova-heaven">Pavlova Heaven</a></h3>
                <p><span>Adresse :</span> 56 George Street, Sydney</p>
                <p><span>Contact :</span> +61 2 2345 6789</p>
                <p>Pavlova Heaven est l'endroit idéal pour savourer une Pavlova parfaite avec des fruits frais et une crème légère. Ils offrent également des versions vegan.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/aussie-desserts">Aussie Desserts</a></h3>
                <p><span>Adresse :</span> 45 William Street, Melbourne</p>
                <p><span>Contact :</span> +61 3 3456 7890</p>
                <p>Aussie Desserts est un café reconnu pour ses Pavlovas maison. Vous y trouverez une variété de garnitures allant des fruits exotiques aux classiques baies.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweet-treats">Sweet Treats Bakery</a></h3>
                <p><span>Adresse :</span> 110 Queen Street, Brisbane</p>
                <p><span>Contact :</span> +61 7 4567 8901</p>
                <p>Sweet Treats Bakery propose des Pavlovas légères et crémeuses, idéales pour les amateurs de desserts sucrés et frais.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fruit-paradise">Fruit Paradise</a></h3>
                <p><span>Adresse :</span> 99 Darling Street, Sydney</p>
                <p><span>Contact :</span> +61 2 6789 1234</p>
                <p>Fruit Paradise est un restaurant spécialisé dans les desserts aux fruits frais, avec des Pavlovas savoureuses au centre de leur menu.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/meringue-bakery">Meringue Bakery</a></h3>
                <p><span>Adresse :</span> 88 Park Avenue, Melbourne</p>
                <p><span>Contact :</span> +61 3 5678 2345</p>
                <p>Meringue Bakery est un lieu charmant où vous pourrez déguster des Pavlovas délicieuses, faites avec des ingrédients frais et naturels.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
