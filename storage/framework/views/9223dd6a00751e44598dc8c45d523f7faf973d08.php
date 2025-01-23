<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants portugais en France pour déguster une Carne de Porco Alentejana, un plat traditionnel à base de porc et de palourdes.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants Portugais de Carne de Porco Alentejana en France</title>
    <style>
        /* Style global */
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
        <h1>Les 5 Meilleurs Restaurants Portugais de Carne de Porco Alentejana en France</h1>
        <p>Venez déguster la Carne de Porco Alentejana, un plat traditionnel à base de porc et de palourdes, dans ces restaurants portugais renommés.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Carne de Porco Alentejana : Un Plat Iconique du Portugal</h2>
        <p>La Carne de Porco Alentejana est un plat portugais typique, combinant du porc tendre et des palourdes, parfumé d'herbes et de vin blanc. Découvrez où déguster ce délice en France :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/porco-alentejana">Porco Alentejana</a></h3>
                <p><span>Adresse :</span> 22 Rue des Petites Écuries, 75010 Paris</p>
                <p><span>Contact :</span> +33 1 44 45 67 89</p>
                <p>Un restaurant spécialisé dans la cuisine de l'Alentejo, avec une recette authentique de Carne de Porco Alentejana, préparée selon les traditions portugaises.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/terra-alentejana">Terra Alentejana</a></h3>
                <p><span>Adresse :</span> 10 Rue du Faubourg Saint-Antoine, 75011 Paris</p>
                <p><span>Contact :</span> +33 1 43 48 69 10</p>
                <p>Venez goûter à cette version authentique de la Carne de Porco Alentejana, servie avec des pommes de terre et un savoureux vin blanc portugais.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/a-taberna-do-porco">A Taberna do Porco</a></h3>
                <p><span>Adresse :</span> 15 Rue de la République, 75003 Paris</p>
                <p><span>Contact :</span> +33 1 42 01 23 45</p>
                <p>Ce restaurant propose une Carne de Porco Alentejana parfaitement mijotée, avec une sauce qui fait ressortir toute la richesse des saveurs portugaises.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/portugal-alentejo">Portugal Alentejo</a></h3>
                <p><span>Adresse :</span> 28 Avenue de la Bourdonnais, 75007 Paris</p>
                <p><span>Contact :</span> +33 1 45 67 89 23</p>
                <p>Le restaurant vous offre une expérience culinaire authentique avec sa Carne de Porco Alentejana, accompagnée d'une purée de pommes de terre maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bacalhau-e-porco">Bacalhau e Porco</a></h3>
                <p><span>Adresse :</span> 5 Rue du Commerce, 75015 Paris</p>
                <p><span>Contact :</span> +33 1 43 60 23 56</p>
                <p>Un mélange délicieux de morue et de porc, mais leur Carne de Porco Alentejana est un incontournable, avec des palourdes fraîches et une viande tendre à souhait.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Carne.blade.php ENDPATH**/ ?>