<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Argentine pour savourer la milanesa, une spécialité incontournable.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster la Milanesa en Argentine</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster la Milanesa en Argentine</h1>
        <p>Savourez ce plat emblématique, croustillant à l'extérieur et tendre à l'intérieur.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Classique Argentin</h2>
        <p>La milanesa, une viande panée et dorée, est un incontournable de la cuisine argentine. Découvrez les meilleurs endroits pour la déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-milanesa-clasica">La Milanesa Clásica</a></h3>
                <p><span>Adresse :</span> Av. Corrientes 1500, 1042 Buenos Aires, Argentine</p>
                <p><span>Contact :</span> +54 11 1234-5678</p>
                <p>Un restaurant renommé pour sa milanesa préparée selon une recette traditionnelle.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/delicias-pampeanas">Delicias Pampeanas</a></h3>
                <p><span>Adresse :</span> Calle Florida 500, 5000 Córdoba, Argentine</p>
                <p><span>Contact :</span> +54 351 678-9101</p>
                <p>Un incontournable pour savourer des milanesas accompagnées de garnitures généreuses.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/milano-argentino">Milano Argentino</a></h3>
                <p><span>Adresse :</span> Av. San Martín 200, 5500 Mendoza, Argentine</p>
                <p><span>Contact :</span> +54 261 234-5678</p>
                <p>Connue pour sa spécialité de milanesa napolitana avec fromage et sauce tomate.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/los-crujientes">Los Crujientes</a></h3>
                <p><span>Adresse :</span> Plaza Independencia, 4000 Salta, Argentine</p>
                <p><span>Contact :</span> +54 387 765-4321</p>
                <p>Une adresse qui se distingue par ses milanesas croustillantes et variées.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-gran-milanesa">El Gran Milanesa</a></h3>
                <p><span>Adresse :</span> Calle Sarmiento 750, 7000 Tandil, Argentine</p>
                <p><span>Contact :</span> +54 249 987-6543</p>
                <p>Réputé pour ses portions généreuses et ses accompagnements maison.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Milanesa.blade.php ENDPATH**/ ?>