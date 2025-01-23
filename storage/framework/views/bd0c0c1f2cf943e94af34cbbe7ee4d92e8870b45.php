<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Mexique pour savourer des enchiladas authentiques et riches en saveurs.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants d'Enchiladas au Mexique</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent avec les autres pages */
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
        <h1>Les 5 Meilleurs Restaurants d'Enchiladas au Mexique</h1>
        <p>Dégustez des enchiladas authentiques dans les meilleurs restaurants mexicains.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Enchiladas : Un Plat Traditionnel Mexicain</h2>
        <p>Un classique de la cuisine mexicaine, les enchiladas sont garnies de viande, de fromage ou de légumes, et nappées de sauce. Voici où en savourer de délicieuses :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/enchiladas-doña-maria">Enchiladas Doña María</a></h3>
                <p><span>Adresse :</span> Calle Madero 123, Mexico City</p>
                <p><span>Contact :</span> +52 55 5555 1234</p>
                <p>Connues pour leurs enchiladas verdes au poulet, servies avec une touche de crème fraîche et de fromage.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-huequito">El Huequito</a></h3>
                <p><span>Adresse :</span> Av. Juárez 456, Puebla</p>
                <p><span>Contact :</span> +52 222 444 5678</p>
                <p>Un lieu emblématique proposant des enchiladas poblano, accompagnées de riz et de haricots noirs.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/enchiladas-tulum">Enchiladas Tulum</a></h3>
                <p><span>Adresse :</span> Carretera Tulum-Boca Paila Km 5, Tulum</p>
                <p><span>Contact :</span> +52 984 888 9999</p>
                <p>Idéal pour savourer des enchiladas au bord de la plage, avec des options végétariennes et épicées.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/enchiladas-las-flores">Enchiladas Las Flores</a></h3>
                <p><span>Adresse :</span> Av. Reforma 234, Guadalajara</p>
                <p><span>Contact :</span> +52 33 1234 5678</p>
                <p>Un restaurant familial célèbre pour ses enchiladas rojas, préparées avec une sauce maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cocina-tradicional">Cocina Tradicional</a></h3>
                <p><span>Adresse :</span> Centro Histórico, Oaxaca</p>
                <p><span>Contact :</span> +52 951 654 3210</p>
                <p>Une adresse incontournable pour des enchiladas au mole, une spécialité de la région d’Oaxaca.</p>
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

<?php /**PATH /var/www/html/WAHLI/resources/views/Enchiladas.blade.php ENDPATH**/ ?>