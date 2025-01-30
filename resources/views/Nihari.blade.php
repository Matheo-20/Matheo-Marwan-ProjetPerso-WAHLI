<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Pakistan pour déguster une délicieuse Nihari, un plat traditionnel de viande mijotée et d'épices.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster une Nihari au Pakistan</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster une Nihari au Pakistan</h1>
        <p>Venez savourer une délicieuse Nihari, un plat traditionnel pakistanais de viande mijotée et d'épices, parfait pour les amateurs de cuisine épicée.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Nihari : La Viande Mijotée aux Épices</h2>
        <p>La Nihari est un plat pakistanais traditionnel, composé de viande lentement mijotée avec des épices et servi avec du riz. Découvrez où déguster cette spécialité au Pakistan :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/nihari-house">Nihari House</a></h3>
                <p><span>Adresse :</span> 123 Noor Street, Lahore</p>
                <p><span>Contact :</span> +92 42 1234 5678</p>
                <p>Un endroit populaire pour déguster une Nihari savoureuse et bien épicée, accompagnée de pain naan frais.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/karachi-nihari">Karachi Nihari</a></h3>
                <p><span>Adresse :</span> 25 Saddar Road, Karachi</p>
                <p><span>Contact :</span> +92 21 2345 6789</p>
                <p>Le restaurant Karachi Nihari est reconnu pour sa Nihari tendre et épicée, qui satisfera tous les amateurs de plats riches en saveurs.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/nihari-palace">Nihari Palace</a></h3>
                <p><span>Adresse :</span> 78 Gulberg, Lahore</p>
                <p><span>Contact :</span> +92 42 3456 7890</p>
                <p>Le Nihari Palace propose une version délicieuse et traditionnelle de la Nihari, parfaite pour un déjeuner en famille.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/spicy-nihari">Spicy Nihari</a></h3>
                <p><span>Adresse :</span> 56 Cantt Road, Rawalpindi</p>
                <p><span>Contact :</span> +92 51 4567 8910</p>
                <p>Si vous aimez les plats épicés, Spicy Nihari est l'endroit idéal pour savourer une Nihari bien relevée et pleine de goût.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/nihari-king">Nihari King</a></h3>
                <p><span>Adresse :</span> 90 Ferozepur Road, Lahore</p>
                <p><span>Contact :</span> +92 42 5678 1234</p>
                <p>Nihari King est un restaurant réputé pour sa Nihari authentique, préparée selon la recette traditionnelle, accompagnée de riz basmati.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
