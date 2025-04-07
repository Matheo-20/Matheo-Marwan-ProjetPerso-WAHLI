<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Chine pour savourer les Dumplings, un incontournable de la cuisine chinoise.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Dumplings en Chine</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Dumplings</h1>
        <p>Découvrez où savourer ce mets emblématique de la cuisine chinoise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Incontournable de la Cuisine Chinoise</h2>
        <p>Les Dumplings, qu'ils soient cuits à la vapeur, frits ou pochés, sont un pilier de la gastronomie chinoise. Voici les meilleurs endroits pour les déguster :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/din-tai-fung">Din Tai Fung</a></h3>
                <p><span>Adresse :</span> Xintiandi, Shanghai</p>
                <p><span>Contact :</span> +86 21 6385 8378</p>
                <p>Din Tai Fung est une chaîne de renom, connue pour ses dumplings délicats et sa cuisine d'exception.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/jia-jia-tang-bao">Jia Jia Tang Bao</a></h3>
                <p><span>Adresse :</span> 90 Huanghe Rd, Shanghai</p>
                <p><span>Contact :</span> +86 21 6327 6878</p>
                <p>Célèbre pour ses dumplings au porc, Jia Jia Tang Bao est un incontournable pour les amateurs de Xiao Long Bao.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/baozi-pu">Baozi Pu</a></h3>
                <p><span>Adresse :</span> Qianmen St, Pékin</p>
                <p><span>Contact :</span> +86 10 6525 1234</p>
                <p>Un petit restaurant traditionnel spécialisé dans les dumplings cuits à la vapeur, un vrai régal.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/guangzhou-dimsum">Guangzhou Dimsum House</a></h3>
                <p><span>Adresse :</span> Tianhe District, Guangzhou</p>
                <p><span>Contact :</span> +86 20 8754 5678</p>
                <p>Découvrez une large variété de dumplings dans une ambiance conviviale.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/yangs-dumplings">Yang's Dumplings</a></h3>
                <p><span>Adresse :</span> West Nanjing Rd, Shanghai</p>
                <p><span>Contact :</span> +86 21 6255 1234</p>
                <p>Fameux pour ses dumplings frits, Yang's Dumplings est une adresse incontournable à Shanghai.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Dumpling.blade.php ENDPATH**/ ?>