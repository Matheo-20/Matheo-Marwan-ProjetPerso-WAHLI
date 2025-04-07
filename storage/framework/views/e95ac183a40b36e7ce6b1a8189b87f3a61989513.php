<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Brésil pour déguster la Moqueca, un délicieux ragoût de poisson typique du Brésil.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Moqueca au Brésil</title>
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
        <h1>Les 5 Meilleurs Restaurants de Moqueca au Brésil</h1>
        <p>Savourez la Moqueca, une spécialité brésilienne aux saveurs exquises</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Traditionnel de la Côte Brésilienne</h2>
        <p>La Moqueca, un ragoût de poisson aux saveurs de noix de coco et de coriandre, est un plat emblématique du Brésil. Découvrez les meilleurs restaurants pour le déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/moqueca-da-nana">Moqueca da Nana</a></h3>
                <p><span>Adresse :</span> Rua da Praia, 45, 40020-020 Salvador, Brésil</p>
                <p><span>Contact :</span> +55 71 3321-3344</p>
                <p>Un restaurant incontournable pour goûter une Moqueca traditionnelle de Bahia, préparée avec des ingrédients frais de la mer.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/moqueca-de-nossa-terra">Moqueca de Nossa Terra</a></h3>
                <p><span>Adresse :</span> Av. Oceanica, 102, 42630-100 Itacaré, Brésil</p>
                <p><span>Contact :</span> +55 73 3251-0987</p>
                <p>Situé à Itacaré, ce restaurant offre une Moqueca authentique, avec des touches locales et un cadre magnifique en bord de mer.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mariscada-da-bahia">Mariscada da Bahia</a></h3>
                <p><span>Adresse :</span> Praça Castro Alves, 123, 40015-330 Salvador, Brésil</p>
                <p><span>Contact :</span> +55 71 3032-5430</p>
                <p>Un lieu historique pour déguster des plats typiques de la région, dont une Moqueca de poisson au lait de coco et aux épices locales.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/moqueca-do-siri">Moqueca do Siri</a></h3>
                <p><span>Adresse :</span> Rua das Pedras, 55, 23970-000 Paraty, Brésil</p>
                <p><span>Contact :</span> +55 24 3371-5599</p>
                <p>Ce restaurant de Paraty vous invite à savourer une Moqueca de fruits de mer fraîchement préparée, une expérience inoubliable.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/moqueca-da-praia">Moqueca da Praia</a></h3>
                <p><span>Adresse :</span> Rua da Praia Grande, 187, 48000-000 Aracaju, Brésil</p>
                <p><span>Contact :</span> +55 79 3212-6677</p>
                <p>Une adresse idéale pour goûter à une Moqueca typique d'Aracaju, dans une ambiance conviviale en bord de mer.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Moqueca.blade.php ENDPATH**/ ?>