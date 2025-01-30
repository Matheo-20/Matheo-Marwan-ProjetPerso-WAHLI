<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants portugais pour déguster la Carne de Porco à l'Alentejana.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top Restaurants pour Déguster la Carne de Porco à l'Alentejana au Portugal</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster la Carne de Porco à l'Alentejana au Portugal</h1>
        <p>La Carne de Porco à l'Alentejana est un plat typique de la cuisine portugaise, délicieux et savoureux, à base de porc et de palourdes. Découvrez où le déguster.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Carne de Porco à l'Alentejana, une Spécialité du Portugal</h2>
        <p>Ce plat traditionnel est une véritable spécialité de l'Alentejo, où le porc se marie parfaitement avec des palourdes, le tout cuit avec des épices et des herbes. C'est un incontournable pour les amateurs de cuisine portugaise.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/carne-alejano-lisbonne">Adega da Tia Matilde - Lisbonne</a></h3>
                <p><span>Adresse :</span> Rua dos Bacalhoeiros 16, 1100-070 Lisbonne</p>
                <p><span>Contact :</span> +351 21 880 0167</p>
                <p>Un restaurant authentique où la Carne de Porco à l'Alentejana est préparée selon la recette traditionnelle avec des produits locaux frais.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/carne-alejano-evora">Taberna do Adro - Évora</a></h3>
                <p><span>Adresse :</span> Praça do Giraldo 17, 7000-508 Évora</p>
                <p><span>Contact :</span> +351 266 743 320</p>
                <p>Dans le cœur historique d'Évora, ce restaurant vous propose une Carne de Porco à l'Alentejana pleine de saveurs et accompagnée de bons vins de la région.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/carne-alejano-portimao">O Barril - Portimão</a></h3>
                <p><span>Adresse :</span> Rua da Praia 14, 8500-201 Portimão</p>
                <p><span>Contact :</span> +351 282 415 416</p>
                <p>Situé en bord de mer, ce restaurant vous servira une Carne de Porco à l'Alentejana avec une touche moderne et une ambiance détendue.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/carne-alejano-beja">Restaurante O Comércio - Beja</a></h3>
                <p><span>Adresse :</span> Rua de São Sebastião 17, 7800-060 Beja</p>
                <p><span>Contact :</span> +351 284 327 739</p>
                <p>Un restaurant traditionnel dans la région de l'Alentejo, où la Carne de Porco à l'Alentejana est un véritable délice, accompagné de pain maison et d'une bonne sangria.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/carne-alejano-albufeira">A Ruína - Albufeira</a></h3>
                <p><span>Adresse :</span> Largo do Castelo 15, 8200-147 Albufeira</p>
                <p><span>Contact :</span> +351 289 591 567</p>
                <p>Un restaurant de la région de l'Algarve où la Carne de Porco à l'Alentejana est servie dans un cadre typique et agréable, à quelques pas de la mer.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Carne.blade.php ENDPATH**/ ?>