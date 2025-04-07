<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Australie pour déguster un Hangi, un plat traditionnel néo-zélandais cuit dans un four de terre.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster un Hangi en Australie</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster un Hangi en Australie</h1>
        <p>Découvrez ce plat traditionnel néo-zélandais cuit dans un four de terre, désormais proposé dans plusieurs restaurants australiens.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Hangi : Le Plat Traditionnel Néozélandais</h2>
        <p>Le Hangi est un plat traditionnel de la Nouvelle-Zélande cuit lentement dans un four de terre, offrant une combinaison de viandes et de légumes délicieux. Plusieurs restaurants en Australie offrent désormais cette expérience unique :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/hangi-delights">Hangi Delights</a></h3>
                <p><span>Adresse :</span> 123 Cook Street, Sydney</p>
                <p><span>Contact :</span> +61 2 3456 7890</p>
                <p>Hangi Delights vous propose une version authentique du Hangi, cuisinée dans un four de terre pour un goût inimitable, accompagnée de légumes frais et de viandes savoureuses.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/new-zealand-cuisine">New Zealand Cuisine</a></h3>
                <p><span>Adresse :</span> 54 George Street, Melbourne</p>
                <p><span>Contact :</span> +61 3 4567 8901</p>
                <p>Un restaurant qui propose un Hangi traditionnel, avec une touche moderne. Le four de terre est toujours utilisé pour cuire les ingrédients de façon lente et savoureuse.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/aussie-hangi">Aussie Hangi</a></h3>
                <p><span>Adresse :</span> 89 High Street, Brisbane</p>
                <p><span>Contact :</span> +61 7 5678 2345</p>
                <p>Aussie Hangi sert un plat traditionnel avec des viandes tendres et des légumes parfaitement cuits dans un four de terre, offrant une expérience culinaire unique et savoureuse.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/hangi-house">Hangi House</a></h3>
                <p><span>Adresse :</span> 10 King Street, Perth</p>
                <p><span>Contact :</span> +61 8 6789 1234</p>
                <p>Hangi House est connu pour sa recette authentique, cuisinée dans un four de terre avec des épices et des ingrédients frais provenant directement de la Nouvelle-Zélande.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/earth-fire">Earth & Fire</a></h3>
                <p><span>Adresse :</span> 33 Beach Road, Adelaide</p>
                <p><span>Contact :</span> +61 8 7890 2345</p>
                <p>Earth & Fire offre un Hangi qui respecte la tradition en utilisant un four de terre pour cuire les ingrédients, garantissant une saveur authentique et un goût inoubliable.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Hangi.blade.php ENDPATH**/ ?>