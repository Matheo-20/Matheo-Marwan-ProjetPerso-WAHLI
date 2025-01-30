<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants portugais pour savourer les délicieux Pastéis de Nata.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Pastéis de Nata au Portugal</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Pastéis de Nata au Portugal</h1>
        <p>Les Pastéis de Nata, ces petites merveilles crémeuses et croustillantes, sont un incontournable de la pâtisserie portugaise.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Pastéis de Nata, un Délice à Déguster Partout au Portugal</h2>
        <p>Ces tartelettes crémeuses sont un trésor gastronomique du Portugal. Découvrez les meilleures adresses où vous pouvez savourer des pastéis de nata à travers le pays.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pasteis-belem">Pastéis de Belém - Lisbonne</a></h3>
                <p><span>Adresse :</span> Rua de Belém nº 84-92, 1300-085 Lisbonne</p>
                <p><span>Contact :</span> +351 21 363 7423</p>
                <p>Le lieu emblématique pour déguster les pastéis de nata à Lisbonne. La recette secrète a traversé les générations, offrant une saveur unique et inimitable.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/alcochete">Confeitaria Alcochete - Alcochete</a></h3>
                <p><span>Adresse :</span> Rua Dom José 58, 2890-105 Alcochete</p>
                <p><span>Contact :</span> +351 21 235 3592</p>
                <p>À Alcochete, cette pâtisserie familiale est réputée pour ses pastéis de nata fondants et délicieusement sucrés, cuits au four traditionnel.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mercearia">Mercearia do Bairro - Porto</a></h3>
                <p><span>Adresse :</span> Rua de José Falcão 199, 4050-314 Porto</p>
                <p><span>Contact :</span> +351 22 200 7329</p>
                <p>Un lieu moderne et convivial, où les pastéis de nata sont préparés avec amour et une touche de créativité, offrant une version contemporaine du classique.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pasteis-evora">Pastéis de Évora - Évora</a></h3>
                <p><span>Adresse :</span> Praça do Giraldo, 7000-508 Évora</p>
                <p><span>Contact :</span> +351 266 747 677</p>
                <p>Un petit coin de paradis à Évora, où les pastéis de nata sont réputés pour leur pâte légère et leur crème onctueuse, faites maison chaque jour.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/loja-da-nata">Loja da Nata - Lisbonne</a></h3>
                <p><span>Adresse :</span> Rua das Portas de Santo Antão 136, 1150-268 Lisbonne</p>
                <p><span>Contact :</span> +351 21 342 3967</p>
                <p>Une adresse incontournable pour les gourmands de Lisbonne, où vous pourrez goûter à des pastéis de nata croustillants et généreusement garnis de crème.</p>
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
