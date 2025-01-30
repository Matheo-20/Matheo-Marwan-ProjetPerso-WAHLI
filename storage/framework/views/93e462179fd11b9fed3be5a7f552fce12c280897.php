<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Maroc pour déguster de délicieuses Seffas, un plat sucré-salé traditionnel de la cuisine marocaine.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster de la Seffa au Maroc</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster de la Seffa au Maroc</h1>
        <p>Un plat traditionnel sucré-salé, idéal pour les grandes occasions et les repas festifs.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Seffa : Un Délice Traditionnel du Maroc</h2>
        <p>La Seffa est un plat typique marocain, fait de semoule cuite, souvent accompagnée de poulet, d'amandes et d'épices sucrées. Voici une sélection de restaurants où vous pourrez savourer ce délice :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seffa-marrakech">Seffa Marrakech</a></h3>
                <p><span>Adresse :</span> Rue Moulay Ali, Médina, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 42 36 14</p>
                <p>Ce restaurant traditionnel de Marrakech propose une Seffa préparée selon la recette authentique, avec une généreuse garniture de poulet et d'amandes.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-mangeoire-fes">La Mangeoire Fès</a></h3>
                <p><span>Adresse :</span> Rue des Souks, Fès, Maroc</p>
                <p><span>Contact :</span> +212 5 35 63 29 10</p>
                <p>À Fès, La Mangeoire est un excellent endroit pour savourer une Seffa accompagnée de saveurs sucrées et salées parfaitement équilibrées.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seffa-casablanca">Seffa Casablanca</a></h3>
                <p><span>Adresse :</span> Rue Moulay Hassan, Casablanca, Maroc</p>
                <p><span>Contact :</span> +212 5 22 20 38 92</p>
                <p>Dans le quartier animé de Casablanca, ce restaurant propose une Seffa savoureuse, idéale pour les repas en famille ou entre amis.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seffa-ramadan-marrakech">Seffa Ramadan Marrakech</a></h3>
                <p><span>Adresse :</span> Place Jamaa el Fna, Marrakech, Maroc</p>
                <p><span>Contact :</span> +212 5 24 38 01 28</p>
                <p>Une adresse incontournable pour déguster une Seffa raffinée pendant le mois sacré du Ramadan, dans une ambiance chaleureuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seffa-rabat">Seffa Rabat</a></h3>
                <p><span>Adresse :</span> Avenue Hassan II, Rabat, Maroc</p>
                <p><span>Contact :</span> +212 5 37 65 18 24</p>
                <p>Ce restaurant à Rabat propose une Seffa parfumée et délicatement sucrée, servie avec une touche de cannelle et de sucre glace.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Seffa.blade.php ENDPATH**/ ?>