<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Colombie pour déguster la Bandeja Paisa, un plat emblématique et généreux de la cuisine colombienne.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster la Bandeja Paisa en Colombie</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster la Bandeja Paisa en Colombie</h1>
        <p>Un plat généreux et riche, symbole de la gastronomie colombienne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Iconique de la Région Paisa</h2>
        <p>La Bandeja Paisa, avec ses haricots rouges, riz, viande, chorizo, avocat et œuf frit, est un incontournable de la cuisine colombienne. Voici où la savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-rincon-paisa">El Rincón Paisa</a></h3>
                <p><span>Adresse :</span> Calle 10 #12-34, Medellín, Colombie</p>
                <p><span>Contact :</span> +57 4 123 4567</p>
                <p>Un restaurant typique paisa où la Bandeja Paisa est servie avec des ingrédients locaux et authentiques.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/los-andes">Los Andes</a></h3>
                <p><span>Adresse :</span> Carrera 15 #45-67, Bogotá, Colombie</p>
                <p><span>Contact :</span> +57 1 234 5678</p>
                <p>Ce restaurant propose une version généreuse et savoureuse de la Bandeja Paisa, fidèle à la tradition.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-fonda-paisa">La Fonda Paisa</a></h3>
                <p><span>Adresse :</span> Avenida 7 #23-45, Cali, Colombie</p>
                <p><span>Contact :</span> +57 2 345 6789</p>
                <p>Un incontournable à Cali pour découvrir les saveurs de la région Paisa dans une ambiance chaleureuse.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mi-casita">Mi Casita</a></h3>
                <p><span>Adresse :</span> Plaza Mayor, Cartagena, Colombie</p>
                <p><span>Contact :</span> +57 5 456 7890</p>
                <p>Un lieu familial connu pour ses plats traditionnels, notamment la fameuse Bandeja Paisa.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-paraiso-paisa">El Paraíso Paisa</a></h3>
                <p><span>Adresse :</span> Carrera 30 #10-20, Barranquilla, Colombie</p>
                <p><span>Contact :</span> +57 5 654 3210</p>
                <p>Ce restaurant sert une Bandeja Paisa généreuse, accompagnée d'une hospitalité colombienne inégalée.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Bandeja.blade.php ENDPATH**/ ?>