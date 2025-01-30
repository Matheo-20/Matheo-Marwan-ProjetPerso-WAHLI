<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Chine pour déguster le Mapo Tofu, un plat épicé emblématique de la cuisine du Sichuan.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Mapo Tofu en Chine</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster le Mapo Tofu</h1>
        <p>Découvrez où savourer ce plat épicé emblématique de la cuisine du Sichuan</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Plat Épicé et Réconfortant</h2>
        <p>Le Mapo Tofu, célèbre pour ses saveurs audacieuses et ses épices du Sichuan, est un incontournable pour les amateurs de cuisine chinoise. Voici les meilleurs endroits pour en profiter :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chengdu-spice">Chengdu Spice</a></h3>
                <p><span>Adresse :</span> Chunxi Rd, Chengdu</p>
                <p><span>Contact :</span> +86 28 1234 5678</p>
                <p>Ce restaurant traditionnel du Sichuan est réputé pour son Mapo Tofu authentique et épicé.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sichuan-flavor-house">Sichuan Flavor House</a></h3>
                <p><span>Adresse :</span> Jinjiang District, Chengdu</p>
                <p><span>Contact :</span> +86 28 8765 4321</p>
                <p>Découvrez un Mapo Tofu délicieusement préparé avec des grains de poivre du Sichuan fraîchement moulus.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/spicy-garden">Spicy Garden</a></h3>
                <p><span>Adresse :</span> People’s Square, Shanghai</p>
                <p><span>Contact :</span> +86 21 9876 5432</p>
                <p>Un restaurant moderne offrant une version revisitée du Mapo Tofu, tout en respectant ses saveurs traditionnelles.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/red-chili">Red Chili</a></h3>
                <p><span>Adresse :</span> Wangfujing St, Pékin</p>
                <p><span>Contact :</span> +86 10 2345 6789</p>
                <p>Connu pour ses plats riches en épices, Red Chili est une adresse incontournable pour les amateurs de Mapo Tofu.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/firepot-sichuan">Firepot Sichuan</a></h3>
                <p><span>Adresse :</span> Tianhe District, Guangzhou</p>
                <p><span>Contact :</span> +86 20 3456 7890</p>
                <p>Ce restaurant propose une version maison du Mapo Tofu, riche en saveurs et en épices.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
