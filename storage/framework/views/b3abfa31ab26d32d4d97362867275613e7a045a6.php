<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants de lasagnes en Italie, où tradition et excellence culinaire se rencontrent.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Lasagnes en Italie</title>
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
        <h1>Les 5 Meilleurs Restaurants de Lasagnes en Italie</h1>
        <p>Découvrez l'excellence des lasagnes italiennes</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Délice Italien Authentique</h2>
        <p>Les lasagnes, symbole de générosité et de goût, se déclinent dans une variété de recettes savoureuses. Voici notre sélection :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/osteria-ai-scudi">Osteria ai Scudi</a></h3>
                <p><span>Adresse :</span> Piazza Erbe, 5, 37121 Vérone</p>
                <p><span>Contact :</span> +39 045 8036600</p>
                <p>Famous for its traditional lasagne al forno, prepared with homemade pasta and rich Bolognese sauce.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-mezzogiorno">Casa Mezzogiorno</a></h3>
                <p><span>Adresse :</span> Via Mezzogiorno, 12, 84122 Salerne</p>
                <p><span>Contact :</span> +39 089 9951234</p>
                <p>Known for its seafood lasagne, a delightful twist on the classic recipe featuring fresh local catch.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-bella-napoli">La Bella Napoli</a></h3>
                <p><span>Adresse :</span> Via Partenope, 13, 80121 Naples</p>
                <p><span>Contact :</span> +39 081 2345678</p>
                <p>Specializes in vegetarian lasagne, layered with grilled vegetables and creamy béchamel.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/trattoria-al-sole">Trattoria al Sole</a></h3>
                <p><span>Adresse :</span> Corso Italia, 77, 80067 Sorrente</p>
                <p><span>Contact :</span> +39 081 9981234</p>
                <p>Offers gourmet lasagne with truffles, an indulgent choice for food lovers.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/dal-nonna">Dal Nonna</a></h3>
                <p><span>Adresse :</span> Via Roma, 45, 53042 Chianciano Terme</p>
                <p><span>Contact :</span> +39 057 8661234</p>
                <p>Traditional lasagne recipe passed down generations, with a rich and hearty flavor.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Lasagnes.blade.php ENDPATH**/ ?>