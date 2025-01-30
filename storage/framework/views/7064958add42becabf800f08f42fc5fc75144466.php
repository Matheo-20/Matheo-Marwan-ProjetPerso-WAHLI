<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Pakistan pour déguster un délicieux Biryani, un plat de riz épicé traditionnellement servi avec de la viande, des épices et des herbes.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster un Biryani au Pakistan</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Biryani au Pakistan</h1>
        <p>Venez savourer un délicieux Biryani, un plat de riz épicé servi avec de la viande, des épices et des herbes fraîches, typique du Pakistan.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Biryani : Le Plat Épicé et Savoureux du Pakistan</h2>
        <p>Le Biryani est un plat emblématique au Pakistan, préparé avec du riz basmati, des épices aromatiques et de la viande. Découvrez où déguster les meilleurs Biryanis dans les restaurants pakistanais :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/biryani-house">Biryani House</a></h3>
                <p><span>Adresse :</span> 12 Faisal Street, Karachi</p>
                <p><span>Contact :</span> +92 21 1234 5678</p>
                <p>Un restaurant bien connu pour son Biryani authentique et épicé. Leurs portions sont généreuses et la viande est parfaitement cuite.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/karachi-biryani">Karachi Biryani</a></h3>
                <p><span>Adresse :</span> 45 Clifton Road, Karachi</p>
                <p><span>Contact :</span> +92 21 2345 6789</p>
                <p>Un restaurant populaire servant un Biryani classique avec une touche épicée et des saveurs authentiques qui vous rappellent Karachi.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/biryani-palace">Biryani Palace</a></h3>
                <p><span>Adresse :</span> 20 Gulshan-e-Iqbal, Karachi</p>
                <p><span>Contact :</span> +92 21 3456 7890</p>
                <p>Le Biryani Palace est un endroit idéal pour savourer un Biryani riche et parfumé, parfait pour un dîner en famille ou entre amis.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/spicy-biryani">Spicy Biryani</a></h3>
                <p><span>Adresse :</span> 10 Saddar, Lahore</p>
                <p><span>Contact :</span> +92 42 4567 8910</p>
                <p>Spicy Biryani est célèbre pour sa version ultra-épice du plat, avec une texture parfaite et un goût inoubliable.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/biryani-hut">Biryani Hut</a></h3>
                <p><span>Adresse :</span> 15 Johar Town, Lahore</p>
                <p><span>Contact :</span> +92 42 5678 1234</p>
                <p>Ce restaurant est un excellent choix pour ceux qui recherchent un Biryani savoureux avec un excellent rapport qualité-prix.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Biryani.blade.php ENDPATH**/ ?>