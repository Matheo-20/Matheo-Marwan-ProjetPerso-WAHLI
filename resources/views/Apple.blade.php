<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux États-Unis pour savourer une délicieuse Apple Pie, un dessert emblématique.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Américains pour des Apple Pies</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent avec les autres pages */
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
        <h1>Les 5 Meilleurs Restaurants Américains pour des Apple Pies</h1>
        <p>Savourez une part d'Apple Pie, l'iconique tarte aux pommes américaine, dans les meilleurs établissements.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Apple Pie : Un Dessert Américain Par Excellence</h2>
        <p>La tarte aux pommes américaine est bien plus qu’un dessert : c’est une tradition. Voici où en trouver les meilleures :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/four-twenty-blackbirds">Four & Twenty Blackbirds</a></h3>
                <p><span>Adresse :</span> 439 3rd Ave, Brooklyn, NY 11215</p>
                <p><span>Contact :</span> +1 718-499-2917</p>
                <p>Réputé pour ses tartes artisanales, ce restaurant offre une Apple Pie à la fois classique et originale.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/marie-callenders">Marie Callender’s</a></h3>
                <p><span>Adresse :</span> Plusieurs emplacements aux États-Unis</p>
                <p><span>Contact :</span> Vérifiez leur site officiel</p>
                <p>Un incontournable pour une Apple Pie authentique servie avec une boule de glace vanille.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-blue-bonnet-cafe">The Blue Bonnet Cafe</a></h3>
                <p><span>Adresse :</span> 211 US-281, Marble Falls, TX 78654</p>
                <p><span>Contact :</span> +1 830-693-2344</p>
                <p>Ce café au Texas est célèbre pour ses tartes maison, dont une délicieuse Apple Pie.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-amish-baking-co">The Amish Baking Co.</a></h3>
                <p><span>Adresse :</span> Farmers Markets à travers les États-Unis</p>
                <p><span>Contact :</span> Vérifiez leurs emplacements</p>
                <p>Des tartes traditionnelles préparées avec des pommes fraîches et une croûte dorée parfaite.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-apple-pan">The Apple Pan</a></h3>
                <p><span>Adresse :</span> 10801 W Pico Blvd, Los Angeles, CA 90064</p>
                <p><span>Contact :</span> +1 310-475-3585</p>
                <p>Un établissement historique à Los Angeles offrant une Apple Pie digne de la tradition américaine.</p>
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
