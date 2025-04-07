<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Maroc pour savourer une authentique harira, la soupe traditionnelle marocaine.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster une Harira au Maroc</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster une Harira au Maroc</h1>
        <p>Savourez la traditionnelle soupe marocaine, riche en saveurs et en histoire.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Harira : Un Délice Maroco-Arabe</h2>
        <p>La harira est une soupe marocaine traditionnelle, servie principalement lors du Ramadan. Elle se compose de légumes, de viande, de pois chiches, et est souvent accompagnée de dattes et de pain. Découvrez où déguster la meilleure harira au Maroc :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/harira-marrakech">Harira Marrakech</a></h3>
                <p><span>Adresse :</span> Rue Moulay Ali, Médina, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 42 36 14</p>
                <p>Un restaurant à Marrakech qui sert une harira généreuse et savoureuse, préparée avec des ingrédients frais et une touche de coriandre.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/souq-ramadan-casablanca">Souq Ramadan Casablanca</a></h3>
                <p><span>Adresse :</span> Rue Moulay Hassan, Casablanca, Maroc</p>
                <p><span>Contact :</span> +212 5 22 20 38 92</p>
                <p>Ce restaurant réputé à Casablanca offre une harira traditionnelle servie dans une ambiance chaleureuse et accueillante.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/riad-harira-fez">Riad Harira Fès</a></h3>
                <p><span>Adresse :</span> Rue des Souks, Fès, Maroc</p>
                <p><span>Contact :</span> +212 5 35 63 29 10</p>
                <p>Un endroit incontournable pour une harira traditionnelle, riche en saveurs, idéale pour se réchauffer pendant les soirées fraîches de Fès.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/harira-pastilla-rabat">Harira et Pastilla Rabat</a></h3>
                <p><span>Adresse :</span> Avenue Hassan II, Rabat, Maroc</p>
                <p><span>Contact :</span> +212 5 37 65 18 24</p>
                <p>Spécialisé dans la harira, ce restaurant à Rabat propose une soupe savoureuse avec un bouillon parfumé et de délicates épices.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/harira-casablanca">Harira Casablanca</a></h3>
                <p><span>Adresse :</span> Boulevard de la Corniche, Casablanca, Maroc</p>
                <p><span>Contact :</span> +212 5 22 75 18 12</p>
                <p>Connu pour ses soupes marocaines traditionnelles, le restaurant sert une harira aux saveurs authentiques, idéale pour le Ramadan ou toute autre occasion.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Harira.blade.php ENDPATH**/ ?>