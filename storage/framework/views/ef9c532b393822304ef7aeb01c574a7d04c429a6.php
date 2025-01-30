<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Sénégal pour déguster le Yassa Poulet, un plat sénégalais traditionnel à base de poulet mariné et de sauce citronnée.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster le Yassa Poulet au Sénégal</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Yassa Poulet au Sénégal</h1>
        <p>Un plat traditionnel et savoureux, mariné avec du citron et des oignons pour une explosion de saveurs.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Yassa Poulet : Un Plat Sénégalais Incontournable</h2>
        <p>Le Yassa Poulet est un plat emblématique du Sénégal, composé de poulet mariné dans une sauce au citron et aux oignons, généralement servi avec du riz. Découvrez où déguster ce délicieux plat dans les meilleurs restaurants du pays.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-momo">Chez Momo</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 820 12 34</p>
                <p>Chez Momo est l'adresse idéale pour déguster un Yassa Poulet savoureux, préparé avec des épices et des ingrédients locaux de qualité.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurant-senegalais">Restaurant Sénégalais</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 456 78 90</p>
                <p>Le Restaurant Sénégalais propose un Yassa Poulet traditionnel, avec une sauce riche et parfumée qui ravira vos papilles.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-gout-senegal">Le Goût Sénégal</a></h3>
                <p><span>Adresse :</span> Mbour, Sénégal</p>
                <p><span>Contact :</span> +221 33 789 12 45</p>
                <p>Le Goût Sénégal est reconnu pour son Yassa Poulet, servi avec du riz bien parfumé et une sauce onctueuse à base d'oignons et de citron.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-nana">Chez Nana</a></h3>
                <p><span>Adresse :</span> Saly, Sénégal</p>
                <p><span>Contact :</span> +221 33 876 45 67</p>
                <p>Chez Nana vous propose un Yassa Poulet accompagné de légumes frais, dans une ambiance chaleureuse et conviviale.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-restaurant-de-la-mer">Le Restaurant de la Mer</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 234 56 78</p>
                <p>Le Restaurant de la Mer sert un Yassa Poulet préparé selon les traditions sénégalaises, avec une sauce délicieuse et parfumée.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Yassa.blade.php ENDPATH**/ ?>