<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Argentine pour savourer les empanadas, une spécialité incontournable.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Empanadas en Argentine</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster des Empanadas en Argentine</h1>
        <p>Profitez des saveurs uniques des empanadas, une véritable spécialité argentine.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Traditionnel Argentin</h2>
        <p>Les empanadas, garnies de viande, légumes ou fromage, sont un incontournable de la cuisine argentine. Voici les meilleurs endroits pour les savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/empanada-royal">Empanada Royal</a></h3>
                <p><span>Adresse :</span> Av. Santa Fe 1500, 1019 Buenos Aires, Argentine</p>
                <p><span>Contact :</span> +54 11 4321-1234</p>
                <p>Une adresse incontournable pour découvrir des empanadas croustillantes et savoureuses.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-esquina">La Esquina</a></h3>
                <p><span>Adresse :</span> Calle Córdoba 999, 5000 Córdoba, Argentine</p>
                <p><span>Contact :</span> +54 351 456-7890</p>
                <p>Un lieu traditionnel où les empanadas sont préparées selon des recettes familiales.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/empanadas-de-mendoza">Empanadas de Mendoza</a></h3>
                <p><span>Adresse :</span> Ruta 7, 5500 Mendoza, Argentine</p>
                <p><span>Contact :</span> +54 261 987-6543</p>
                <p>Ce restaurant met en avant des empanadas garnies de produits locaux et cuites au four traditionnel.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/las-empanadas-del-norte">Las Empanadas del Norte</a></h3>
                <p><span>Adresse :</span> Calle Belgrano 250, 4000 Salta, Argentine</p>
                <p><span>Contact :</span> +54 387 422-5678</p>
                <p>Une spécialité régionale de Salta avec une pâte fine et une garniture généreuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-maestro">El Maestro</a></h3>
                <p><span>Adresse :</span> Plaza San Martín, 7000 Tandil, Argentine</p>
                <p><span>Contact :</span> +54 249 445-6789</p>
                <p>Connue pour ses empanadas au bœuf épicé, cette adresse est prisée par les habitants et les touristes.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/EmpanadasA.blade.php ENDPATH**/ ?>