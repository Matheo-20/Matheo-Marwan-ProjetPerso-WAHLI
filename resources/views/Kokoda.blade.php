<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux Fidji pour déguster le Kokoda, un plat traditionnel à base de poisson frais mariné dans du lait de coco.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster du Kokoda aux Fidji</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Kokoda aux Fidji</h1>
        <p>Découvrez où savourer le Kokoda, une spécialité fidjienne à base de poisson frais mariné dans du lait de coco.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Le Kokoda : Un Plat Traditionnel Fidjien</h2>
        <p>Le Kokoda est une spécialité fidjienne délicieuse, composée de poisson frais mariné dans du lait de coco, du jus de citron et des herbes locales. Découvrez où goûter ce plat dans les meilleurs restaurants des Fidji.</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kokoda-cafe">Kokoda Cafe</a></h3>
                <p><span>Adresse :</span> 123 Island Road, Suva</p>
                <p><span>Contact :</span> +679 345 6789</p>
                <p>Ce café est l'endroit idéal pour savourer un Kokoda authentique, préparé avec des poissons frais locaux et du lait de coco crémeux. Un véritable délice des Fidji !</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fijian-delights">Fijian Delights</a></h3>
                <p><span>Adresse :</span> 56 Coral Coast, Nadi</p>
                <p><span>Contact :</span> +679 456 7890</p>
                <p>Fijian Delights est un restaurant réputé pour sa cuisine traditionnelle fidjienne. Le Kokoda y est préparé avec soin, en utilisant les meilleurs ingrédients locaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-kokoda-house">The Kokoda House</a></h3>
                <p><span>Adresse :</span> 78 Pacific Avenue, Lautoka</p>
                <p><span>Contact :</span> +679 567 8901</p>
                <p>Un restaurant chaleureux et accueillant où vous pourrez déguster un Kokoda maison, dans une ambiance conviviale et familiale.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/suva-seafood">Suva Seafood</a></h3>
                <p><span>Adresse :</span> 10 Marina Bay, Suva</p>
                <p><span>Contact :</span> +679 678 9012</p>
                <p>Suva Seafood est un restaurant idéal pour les amateurs de fruits de mer. Leur Kokoda est un plat signature, mettant en valeur le goût frais et savoureux du poisson.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/island-kokoda">Island Kokoda</a></h3>
                <p><span>Adresse :</span> 45 Beach Road, Nadi</p>
                <p><span>Contact :</span> +679 789 0123</p>
                <p>Venez découvrir Island Kokoda, un restaurant situé en bord de mer, qui sert des Kokodas frais avec une touche locale et une présentation soignée.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
