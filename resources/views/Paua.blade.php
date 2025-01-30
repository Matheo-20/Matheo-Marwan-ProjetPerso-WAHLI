<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Nouvelle-Zélande pour déguster des Paua, un délice marin emblématique de la région.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Paua en Nouvelle-Zélande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Paua en Nouvelle-Zélande</h1>
        <p>Découvrez les restaurants où savourer les délicieuses Paua, un délice marin typique de la Nouvelle-Zélande.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Les Paua : Un Trésor Marin de la Nouvelle-Zélande</h2>
        <p>Les Paua, également connues sous le nom de "abalone", sont des coquillages marins uniques à la Nouvelle-Zélande. Voici les meilleurs restaurants où vous pouvez déguster ce plat délicieux :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paua-palace">Paua Palace</a></h3>
                <p><span>Adresse :</span> 15 Seaview Road, Auckland</p>
                <p><span>Contact :</span> +64 9 123 4567</p>
                <p>Spécialisé dans les fruits de mer locaux, Paua Palace vous propose des Paua frais cuisinés à la perfection avec des accompagnements créatifs.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paua-delight">Paua Delight</a></h3>
                <p><span>Adresse :</span> 50 Harbour Street, Wellington</p>
                <p><span>Contact :</span> +64 4 234 5678</p>
                <p>Chez Paua Delight, vous pourrez savourer des Paua frais préparés de manière traditionnelle néo-zélandaise, avec des touches contemporaines.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-paua-cafe">The Paua Cafe</a></h3>
                <p><span>Adresse :</span> 25 Coastal Road, Rotorua</p>
                <p><span>Contact :</span> +64 7 345 6789</p>
                <p>Ce café cosy en bord de mer offre une sélection de Paua fraîchement pêchée, servie avec des sauces maison et des légumes locaux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seaside-paua">Seaside Paua</a></h3>
                <p><span>Adresse :</span> 130 Queen Street, Christchurch</p>
                <p><span>Contact :</span> +64 3 456 7890</p>
                <p>Seaside Paua vous accueille dans un cadre élégant et propose des plats à base de Paua, un délice de la mer néo-zélandaise avec des recettes innovantes.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paua-feast">Paua Feast</a></h3>
                <p><span>Adresse :</span> 88 Fisherman's Wharf, Hamilton</p>
                <p><span>Contact :</span> +64 7 567 8901</p>
                <p>Avec une vue imprenable sur le port, Paua Feast est le lieu idéal pour déguster des Paua en toute tranquillité, accompagnés de vins locaux exquis.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
