<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants de risotto en Italie, où tradition et raffinement se rencontrent.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Risotto en Italie</title>
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
        <h1>Les 5 Meilleurs Restaurants de Risotto en Italie</h1>
        <p>Explorez les saveurs riches et crémeuses du risotto italien</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Spécialité Italienne Intemporelle</h2>
        <p>Le risotto, ce plat crémeux et raffiné, est une véritable œuvre d'art culinaire en Italie. Voici notre sélection des meilleures adresses :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/risotto-oro">Risotto d'Oro</a></h3>
                <p><span>Adresse :</span> Via Vittorio Emanuele, 22, 20121 Milan</p>
                <p><span>Contact :</span> +39 02 1234567</p>
                <p>Célèbre pour son risotto à la milanaise, préparé avec du safran de première qualité.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-risotto">Casa del Risotto</a></h3>
                <p><span>Adresse :</span> Corso Italia, 10, 56125 Pise</p>
                <p><span>Contact :</span> +39 050 9876543</p>
                <p>Propose une variété de risottos, du classique au créatif, avec des ingrédients frais et locaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-risotteria">La Risotteria</a></h3>
                <p><span>Adresse :</span> Piazza della Libertà, 15, 50129 Florence</p>
                <p><span>Contact :</span> +39 055 2345678</p>
                <p>Un paradis pour les amateurs de risotto, connu pour son risotto aux cèpes et truffes.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/risotto-magnifico">Risotto Magnifico</a></h3>
                <p><span>Adresse :</span> Via Napoli, 5, 80100 Naples</p>
                <p><span>Contact :</span> +39 081 8765432</p>
                <p>Spécialité : risotto aux fruits de mer, directement inspiré par la côte napolitaine.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/trattoria-riso">Trattoria del Riso</a></h3>
                <p><span>Adresse :</span> Via San Marco, 7, 37100 Vérone</p>
                <p><span>Contact :</span> +39 045 1234567</p>
                <p>Offre un risotto al radicchio, une spécialité régionale pleine de saveurs.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Risotto.blade.php ENDPATH**/ ?>