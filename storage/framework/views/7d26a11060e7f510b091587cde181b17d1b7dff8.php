<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour déguster un délicieux aligot, un plat traditionnel de l'Auvergne.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants d'Aligot en France</title>
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
        <h1>Les 5 Meilleurs Restaurants d'Aligot en France</h1>
        <p>Savourez ce délicieux plat traditionnel auvergnat dans les meilleures adresses</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Authentique d'Auvergne</h2>
        <p>L'aligot, un plat à base de purée de pommes de terre, de fromage et de crème, est une véritable spécialité auvergnate. Voici nos suggestions :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-table-d-augustin">La Table d'Augustin</a></h3>
                <p><span>Adresse :</span> 10 Rue des Saints-Pères, 75006 Paris</p>
                <p><span>Contact :</span> +33 1 42 34 56 78</p>
                <p>Ce restaurant parisien propose un aligot onctueux, préparé avec des ingrédients de la plus haute qualité.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-petit-gourmet">Le Petit Gourmet</a></h3>
                <p><span>Adresse :</span> 21 Rue Saint-Louis, 33000 Bordeaux</p>
                <p><span>Contact :</span> +33 5 56 00 99 88</p>
                <p>Le Petit Gourmet est une adresse incontournable pour déguster un aligot traditionnel accompagné de viandes locales.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/auvergnat-pure">Auvergnat Pur</a></h3>
                <p><span>Adresse :</span> 15 Rue des Templiers, 63200 Riom</p>
                <p><span>Contact :</span> +33 4 73 28 91 22</p>
                <p>Un véritable restaurant auvergnat, où l'aligot est fait maison avec un fromage du pays, dans une ambiance chaleureuse.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/l-aligotier">L'Aligotier</a></h3>
                <p><span>Adresse :</span> 24 Rue Victor Hugo, 63600 Ambert</p>
                <p><span>Contact :</span> +33 4 73 82 27 14</p>
                <p>Spécialiste de l'aligot, L'Aligotier propose ce plat authentique dans un cadre chaleureux et convivial.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-bon-aligot">Le Bon Aligot</a></h3>
                <p><span>Adresse :</span> 3 Place de la Mairie, 15100 Saint-Flour</p>
                <p><span>Contact :</span> +33 4 71 60 11 22</p>
                <p>Un restaurant familial où l'aligot est préparé avec soin et servi avec une touche de tradition et de modernité.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Aligot.blade.php ENDPATH**/ ?>