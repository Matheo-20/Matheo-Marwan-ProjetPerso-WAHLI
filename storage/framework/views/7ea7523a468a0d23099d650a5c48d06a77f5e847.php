<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Nouvelle-Zélande pour déguster des moules vertes, un délice marin emblématique de la région.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Moules Vertes en Nouvelle-Zélande</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Moules Vertes en Nouvelle-Zélande</h1>
        <p>Découvrez les restaurants où savourer les délicieuses moules vertes, un mets incontournable de la Nouvelle-Zélande.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Les Moules Vertes : Un Trésor Marin de la Nouvelle-Zélande</h2>
        <p>Les moules vertes, également connues sous le nom de "Green-lipped mussels", sont un délice marin typique de la Nouvelle-Zélande. Voici les meilleurs restaurants où vous pouvez déguster ce plat délicieux :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/greenlip-mussels">Greenlip Mussels Restaurant</a></h3>
                <p><span>Adresse :</span> 21 Seaview Road, Auckland</p>
                <p><span>Contact :</span> +64 9 123 4567</p>
                <p>Spécialité des fruits de mer, ce restaurant vous propose une large sélection de moules vertes fraîches préparées de manière traditionnelle et moderne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mussels-galore">Mussels Galore</a></h3>
                <p><span>Adresse :</span> 100 Harbour Street, Wellington</p>
                <p><span>Contact :</span> +64 4 234 5678</p>
                <p>Un restaurant spécialisé dans les moules, où vous pourrez savourer des moules vertes accompagnées de sauces exquises.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/kiwi-mussels">Kiwi Mussels</a></h3>
                <p><span>Adresse :</span> 45 Coast Road, Rotorua</p>
                <p><span>Contact :</span> +64 7 345 6789</p>
                <p>Situé en bord de mer, ce restaurant propose des moules vertes locales avec des touches créatives, parfait pour une expérience gustative unique.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mussel-delights">Mussel Delights</a></h3>
                <p><span>Adresse :</span> 303 Queen Street, Christchurch</p>
                <p><span>Contact :</span> +64 3 456 7890</p>
                <p>Mussel Delights vous offre un menu à base de moules vertes, avec des plats cuisinés avec soin et passion par des chefs expérimentés.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seafood-paradise">Seafood Paradise</a></h3>
                <p><span>Adresse :</span> 12 Fisherman's Wharf, Hamilton</p>
                <p><span>Contact :</span> +64 7 567 8901</p>
                <p>Seafood Paradise vous accueille dans une atmosphère conviviale pour déguster des moules vertes accompagnées de diverses sauces et garnitures.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Moule.blade.php ENDPATH**/ ?>