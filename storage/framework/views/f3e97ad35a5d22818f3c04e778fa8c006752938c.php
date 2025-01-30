<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants portugais pour déguster des sardines grillées.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top Restaurants pour Déguster des Sardines Grillées au Portugal</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Sardines Grillées au Portugal</h1>
        <p>Les sardines grillées sont un incontournable de la cuisine portugaise, surtout lors des fêtes de l'été. Découvrez les meilleures adresses pour les savourer.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Sardines Grillées, un Plat Traditionnel Portugais</h2>
        <p>Les sardines grillées sont un plat populaire au Portugal, particulièrement durant les mois d'été. Ce plat simple mais délicieux est souvent servi avec du pain frais et de l'huile d'olive.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sardines-grillees-lisbonne">Cervejaria Ramiro - Lisbonne</a></h3>
                <p><span>Adresse :</span> Avenida Almirante Reis 1, 1150-007 Lisbonne</p>
                <p><span>Contact :</span> +351 21 885 1025</p>
                <p>Un lieu iconique à Lisbonne où vous pourrez déguster des sardines grillées parfaitement accompagnées de fruits de mer frais et d'une bière locale.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sardines-grillees-porto">Casa Guedes - Porto</a></h3>
                <p><span>Adresse :</span> Praça dos Poveiros 130, 4000-393 Porto</p>
                <p><span>Contact :</span> +351 22 201 7434</p>
                <p>Ce restaurant familial est réputé pour ses sardines grillées délicieuses, servies avec des légumes frais et du pain de campagne.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sardines-grillees-albufeira">O Veleiro - Albufeira</a></h3>
                <p><span>Adresse :</span> Rua 25 de Abril 12, 8200-103 Albufeira</p>
                <p><span>Contact :</span> +351 289 591 126</p>
                <p>Un restaurant côtier avec vue sur la mer, où les sardines grillées sont servies de manière traditionnelle, avec un goût unique et une qualité exceptionnelle.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sardines-grillees-funchal">Restaurante Do Forte - Funchal</a></h3>
                <p><span>Adresse :</span> Rua do Sabão 1, 9000-038 Funchal</p>
                <p><span>Contact :</span> +351 291 235 306</p>
                <p>Spécialisé dans les plats de fruits de mer, ce restaurant propose des sardines grillées savoureuses, dans un cadre accueillant avec une vue splendide.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sardines-grillees-setubal">O Mercado - Setúbal</a></h3>
                <p><span>Adresse :</span> Rua da Liberdade 5, 2900-216 Setúbal</p>
                <p><span>Contact :</span> +351 265 545 421</p>
                <p>Situé à Setúbal, ce restaurant est un excellent endroit pour goûter des sardines grillées fraîchement préparées, avec une touche locale et une ambiance chaleureuse.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Sardine.blade.php ENDPATH**/ ?>