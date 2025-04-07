<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Angola pour déguster la Funge de Milho, un plat traditionnel à base de farine de maïs, accompagné de sauces ou de viande.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster la Funge de Milho en Angola</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster la Funge de Milho en Angola</h1>
        <p>Un plat traditionnel à base de farine de maïs, dégustez la véritable Funge de Milho d'Angola.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Funge de Milho : Un Plat Traditionnel Angolais</h2>
        <p>La Funge de Milho est un plat traditionnel angolais à base de farine de maïs, généralement accompagné de sauces, viande ou poisson. Découvrez où savourer ce délice :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/funge-milho-chez-angolais">Funge de Milho Chez Angolais</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 923 456 789</p>
                <p>Chez Angolais, la Funge de Milho est servie avec une sauce savoureuse, mettant en valeur les traditions culinaires de l'Angola.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/funge-milho-nature">Funge de Milho Nature</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 923 876 543</p>
                <p>Un restaurant où la Funge de Milho est servie de manière traditionnelle, accompagnée de sauce tomate épicée et de viande grillée.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/funge-de-milho-roya">Funge de Milho Roya</a></h3>
                <p><span>Adresse :</span> Benguela, Angola</p>
                <p><span>Contact :</span> +244 933 123 456</p>
                <p>La Funge de Milho Roya propose une version généreuse du plat avec une sauce à base d'ingrédients locaux de première qualité.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/funge-de-milho-village">Funge de Milho Village</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 912 345 678</p>
                <p>Un cadre convivial où la Funge de Milho est préparée avec amour et accompagnée de poissons frais ou de viande savoureuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/funge-de-milho-totale">Funge de Milho Totale</a></h3>
                <p><span>Adresse :</span> Huambo, Angola</p>
                <p><span>Contact :</span> +244 931 234 567</p>
                <p>Un restaurant où la Funge de Milho est servie dans toute sa splendeur, avec des accompagnements locaux et épicés.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Funge.blade.php ENDPATH**/ ?>