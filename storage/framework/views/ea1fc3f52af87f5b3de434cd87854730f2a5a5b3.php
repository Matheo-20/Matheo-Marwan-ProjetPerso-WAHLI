<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Colombie pour déguster l'Ajiaco, une soupe traditionnelle colombienne pleine de saveurs.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster l'Ajiaco en Colombie</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster l'Ajiaco en Colombie</h1>
        <p>Un plat chaleureux et réconfortant, symbole de la gastronomie colombienne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Soupe Traditionnelle Colombienne</h2>
        <p>L'Ajiaco, une soupe riche et savoureuse à base de poulet, de pommes de terre et d'herbes locales, est un classique incontournable en Colombie. Découvrez où en savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-cazuela">La Cazuela</a></h3>
                <p><span>Adresse :</span> Carrera 7 #45-30, Bogotá, Colombie</p>
                <p><span>Contact :</span> +57 1 345 6789</p>
                <p>Un incontournable à Bogotá, célèbre pour son ajiaco traditionnel servi avec crème et câpres.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sabor-andino">Sabor Andino</a></h3>
                <p><span>Adresse :</span> Calle 12 #34-56, Medellín, Colombie</p>
                <p><span>Contact :</span> +57 4 987 6543</p>
                <p>Une expérience gastronomique authentique avec des saveurs typiques des Andes colombiennes.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-fogon-de-mama">El Fogón de Mamá</a></h3>
                <p><span>Adresse :</span> Avenida 5 #22-44, Cali, Colombie</p>
                <p><span>Contact :</span> +57 2 456 7890</p>
                <p>Leur ajiaco est préparé selon une recette familiale transmise depuis des générations.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/ajiaco-y-mas">Ajiaco y Más</a></h3>
                <p><span>Adresse :</span> Calle 50 #10-20, Cartagena, Colombie</p>
                <p><span>Contact :</span> +57 5 876 5432</p>
                <p>Un mélange de tradition et de modernité, parfait pour les amateurs de cuisine colombienne.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-sabor-de-casa">El Sabor de Casa</a></h3>
                <p><span>Adresse :</span> Plaza Bolívar, Barranquilla, Colombie</p>
                <p><span>Contact :</span> +57 5 654 3210</p>
                <p>Une adresse conviviale où l'ajíaco est servi avec amour et générosité.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Ajiaco.blade.php ENDPATH**/ ?>