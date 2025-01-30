<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Nouvelle-Zélande pour déguster un Hangi, un plat traditionnel maori cuit dans un four souterrain.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster un Hangi en Nouvelle-Zélande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Hangi en Nouvelle-Zélande</h1>
        <p>Découvrez l'art de cuisiner un Hangi, un plat traditionnel maori cuit dans un four souterrain, dans les meilleurs restaurants de Nouvelle-Zélande.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Le Hangi : Un Plat Traditionnel Maori</h2>
        <p>Le Hangi est un plat emblématique de la culture maorie, cuit lentement sous terre dans un four traditionnel. Voici les meilleurs restaurants où vous pouvez en déguster en Nouvelle-Zélande :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/hangi-house">Hangi House</a></h3>
                <p><span>Adresse :</span> 45 Maungawhau Road, Auckland</p>
                <p><span>Contact :</span> +64 9 123 4567</p>
                <p>Spécialisé dans le Hangi traditionnel, ce restaurant offre une expérience culinaire unique en Nouvelle-Zélande.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-maori-kitchen">The Maori Kitchen</a></h3>
                <p><span>Adresse :</span> 1240 Victoria Street, Wellington</p>
                <p><span>Contact :</span> +64 4 234 5678</p>
                <p>Un lieu emblématique où le Hangi est préparé dans le respect des traditions maories et accompagné de plats authentiques.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/te-waka-hangi">Te Waka Hangi</a></h3>
                <p><span>Adresse :</span> 67 Waka Street, Rotorua</p>
                <p><span>Contact :</span> +64 7 345 6789</p>
                <p>Le restaurant Te Waka Hangi propose un Hangi cuisiné sous terre, accompagné de légumes frais et de viandes savoureuses.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/hangi-cuisine">Hangi Cuisine</a></h3>
                <p><span>Adresse :</span> 205 Main Street, Christchurch</p>
                <p><span>Contact :</span> +64 3 456 7890</p>
                <p>Un restaurant authentique qui vous plonge dans l'univers de la cuisine maorie et vous offre un Hangi fait maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/maori-feast">Maori Feast</a></h3>
                <p><span>Adresse :</span> 3 Queen Street, Hamilton</p>
                <p><span>Contact :</span> +64 7 567 8901</p>
                <p>Maori Feast propose un Hangi traditionnel accompagné de l'expérience culturelle complète pour découvrir l'héritage maori.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
