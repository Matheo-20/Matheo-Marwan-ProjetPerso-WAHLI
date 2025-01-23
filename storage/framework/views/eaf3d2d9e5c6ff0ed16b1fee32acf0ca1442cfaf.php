<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour savourer une quiche traditionnelle, une spécialité incontournable de la cuisine française.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Quiche en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Quiche en France</h1>
        <p>Découvrez les meilleures adresses où savourer une délicieuse quiche en France.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Spécialité Française au Cœur de Chaque Région</h2>
        <p>La quiche, un incontournable de la cuisine française, avec sa pâte brisée et sa garniture savoureuse. Voici nos suggestions de restaurants où déguster ce plat délicieux :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-quiche-aux-herbes">La Quiche aux Herbes</a></h3>
                <p><span>Adresse :</span> 22 Rue de la Cuisine, 75012 Paris</p>
                <p><span>Contact :</span> +33 1 44 67 22 38</p>
                <p>Un restaurant réputé pour ses quiches aux saveurs variées, de la quiche lorraine à des créations plus audacieuses.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-margaux">Chez Margaux</a></h3>
                <p><span>Adresse :</span> 9 Rue de la Tarte, 69001 Lyon</p>
                <p><span>Contact :</span> +33 4 72 45 89 56</p>
                <p>Chez Margaux, la quiche lorraine est un classique, servie avec une pâte légère et une garniture fondante.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-saveurs-dauphines">Les Saveurs Dauphines</a></h3>
                <p><span>Adresse :</span> 34 Rue des Alpes, 38000 Grenoble</p>
                <p><span>Contact :</span> +33 4 76 56 12 45</p>
                <p>Les saveurs du Dauphiné se retrouvent dans chaque bouchée de quiche, une spécialité que vous ne pouvez manquer.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-jardin-de-la-quiche">Le Jardin de la Quiche</a></h3>
                <p><span>Adresse :</span> 55 Avenue de Verdun, 13000 Marseille</p>
                <p><span>Contact :</span> +33 4 91 22 18 67</p>
                <p>Un restaurant charmant où la quiche est préparée avec des légumes frais et des fromages locaux pour un goût authentique.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-queicherie">La Queicherie</a></h3>
                <p><span>Adresse :</span> 11 Place du Marché, 67000 Strasbourg</p>
                <p><span>Contact :</span> +33 3 88 36 77 88</p>
                <p>Un lieu spécialisé dans la quiche, avec des variantes à base de saumon, de chèvre ou de légumes de saison, idéal pour un déjeuner léger.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Quiche.blade.php ENDPATH**/ ?>