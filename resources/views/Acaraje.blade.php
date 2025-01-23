<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Brésil pour savourer les authentiques acarajés, une spécialité de la cuisine afro-brésilienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants d'Acarajés au Brésil</title>
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
        <h1>Les 5 Meilleurs Restaurants d'Acarajés au Brésil</h1>
        <p>Dégustez les saveurs authentiques des acarajés, symbole de la cuisine afro-brésilienne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Acarajés : Une Spécialité Croustillante et Savoureuse</h2>
        <p>Ces beignets à base de haricots, farcis de crevettes ou de vatapá, sont un véritable emblème de la culture culinaire brésilienne. Voici les meilleures adresses pour les découvrir :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/dona-teresa">Dona Teresa</a></h3>
                <p><span>Adresse :</span> Rua das Laranjeiras, Salvador, Bahia</p>
                <p><span>Contact :</span> +55 71 3021 3344</p>
                <p>Ce restaurant est réputé pour ses acarajés faits maison, croustillants et savoureux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/acaraje-da-cira">Acarajé da Cira</a></h3>
                <p><span>Adresse :</span> Largo da Mariquita, Salvador, Bahia</p>
                <p><span>Contact :</span> +55 71 3249 0010</p>
                <p>Un incontournable à Salvador, où les acarajés sont préparés selon des recettes traditionnelles.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurante-preta">Restaurante Preta</a></h3>
                <p><span>Adresse :</span> Ilha dos Frades, Bahia</p>
                <p><span>Contact :</span> +55 71 98888 4444</p>
                <p>Situé dans un cadre idyllique, ce restaurant propose des acarajés accompagnés de délicieuses garnitures.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/acaraje-da-dinha">Acarajé da Dinha</a></h3>
                <p><span>Adresse :</span> Largo de Santana, Salvador, Bahia</p>
                <p><span>Contact :</span> +55 71 3334 5678</p>
                <p>Les acarajés ici sont célèbres pour leur saveur authentique et leur texture parfaite.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/bahia-de-todos-os-sabores">Bahia de Todos os Sabores</a></h3>
                <p><span>Adresse :</span> Avenida Sete de Setembro, Salvador, Bahia</p>
                <p><span>Contact :</span> +55 71 3456 7890</p>
                <p>Un lieu chaleureux où vous pourrez savourer des acarajés préparés avec passion et tradition.</p>
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
