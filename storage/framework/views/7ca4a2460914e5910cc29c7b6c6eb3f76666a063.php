<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Mexique pour savourer une authentique barbacoa, un trésor de la cuisine traditionnelle mexicaine.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Barbacoa au Mexique</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent */
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
        <h1>Les 5 Meilleurs Restaurants de Barbacoa au Mexique</h1>
        <p>Découvrez la richesse de ce plat traditionnel cuit lentement pour un goût inoubliable.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Barbacoa : Une Délicatesse Ancestrale</h2>
        <p>Ce plat traditionnel mexicain, préparé avec soin et souvent cuit à la vapeur dans des feuilles d'agave, est une expérience culinaire unique. Voici nos recommandations :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/barbacoa-el-pastorcito">Barbacoa El Pastorcito</a></h3>
                <p><span>Adresse :</span> Calle Hidalgo 123, San Juan Teotihuacán</p>
                <p><span>Contact :</span> +52 55 1234 5678</p>
                <p>Un restaurant situé près des pyramides de Teotihuacán, connu pour sa barbacoa d'agneau tendre et savoureuse.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-casa-de-la-barbacoa">La Casa de la Barbacoa</a></h3>
                <p><span>Adresse :</span> Av. Juárez 456, Mexico City</p>
                <p><span>Contact :</span> +52 55 8765 4321</p>
                <p>Une adresse populaire pour la barbacoa traditionnelle, servie avec des tortillas fraîches et du consomé maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/barbacoa-los-primos">Barbacoa Los Primos</a></h3>
                <p><span>Adresse :</span> Centro Histórico, Querétaro</p>
                <p><span>Contact :</span> +52 442 654 3210</p>
                <p>Connu pour ses portions généreuses et son ambiance familiale, leur barbacoa est un vrai délice.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-sabor-de-la-barbacoa">El Sabor de la Barbacoa</a></h3>
                <p><span>Adresse :</span> Av. Revolución, Oaxaca</p>
                <p><span>Contact :</span> +52 951 321 7654</p>
                <p>Ce restaurant propose une barbacoa au goût fumé unique, accompagnée de sauces maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/barbacoa-don-rafael">Barbacoa Don Rafael</a></h3>
                <p><span>Adresse :</span> Playa del Carmen, Quintana Roo</p>
                <p><span>Contact :</span> +52 984 456 7890</p>
                <p>Une barbacoa délicieuse préparée selon les recettes traditionnelles, parfaite pour les amateurs de cuisine authentique.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Barbacoa.blade.php ENDPATH**/ ?>