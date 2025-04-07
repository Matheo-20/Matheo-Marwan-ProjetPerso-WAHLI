<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants espagnols pour savourer une délicieuse tortilla espagnole.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster une Tortilla Espagnole en Espagne</title>
    <style>
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
        <h1>Les Meilleurs Restaurants pour Déguster une Tortilla Espagnole</h1>
        <p>Venez savourer la véritable tortilla de patatas espagnole dans ces établissements renommés</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Traditionnel de l'Espagne</h2>
        <p>La tortilla espagnole est une spécialité à base d'œufs, de pommes de terre et d'oignons. Découvrez les restaurants qui la préparent le mieux :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-tortilla-de-oro">La Tortilla de Oro</a></h3>
                <p><span>Adresse :</span> Calle del Infante, 29000 Madrid</p>
                <p><span>Contact :</span> +34 91 447 53 78</p>
                <p>Un lieu historique à Madrid où la tortilla est servie avec des pommes de terre parfaitement cuites.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/las-tortillas-de-nerea">Las Tortillas de Nerea</a></h3>
                <p><span>Adresse :</span> Carrer de Pau Claris, 08010 Barcelona</p>
                <p><span>Contact :</span> +34 93 518 22 11</p>
                <p>La tortilla de Nerea est connue pour sa recette traditionnelle et sa consistance parfaite.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-barril">El Barril</a></h3>
                <p><span>Adresse :</span> 58 Calle de Cea Bermúdez, 28003 Madrid</p>
                <p><span>Contact :</span> +34 91 554 27 11</p>
                <p>Ce restaurant propose une tortilla parfaite, à la fois moelleuse et savoureuse, avec des produits frais.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-tortilla-de-susana">La Tortilla de Susana</a></h3>
                <p><span>Adresse :</span> 25 Calle de la Princesa, 28008 Madrid</p>
                <p><span>Contact :</span> +34 91 521 98 11</p>
                <p>La tortilla de Susana est préparée selon la recette traditionnelle avec une touche moderne.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tortilla-deluxe">Tortilla Deluxe</a></h3>
                <p><span>Adresse :</span> 72 Calle de Vallehermoso, 28015 Madrid</p>
                <p><span>Contact :</span> +34 91 858 73 82</p>
                <p>La tortilla la plus délicieuse de Madrid, servie avec une garniture innovante et originale.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Tortilla.blade.php ENDPATH**/ ?>