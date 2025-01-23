<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants à Cuba pour savourer un authentique Arroz Congrí, le délicieux mélange de riz et de haricots noirs.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants d'Arroz Congrí à Cuba</title>
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
        <h1>Les 5 Meilleurs Restaurants d'Arroz Congrí à Cuba</h1>
        <p>Dégustez l'incontournable mélange de riz et de haricots noirs cubains.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Arroz Congrí : Une Symphonie de Saveurs</h2>
        <p>Ce plat emblématique de la cuisine cubaine, fait de riz et de haricots noirs assaisonnés, est un accompagnement parfait ou un plat principal. Voici où le savourer à Cuba :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-aljibe">El Aljibe</a></h3>
                <p><span>Adresse :</span> Ave. 7ma, Miramar, La Havane</p>
                <p><span>Contact :</span> +53 7 209 4490</p>
                <p>Célèbre pour ses plats cubains, leur Arroz Congrí est un mariage parfait de saveurs traditionnelles.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-bodeguita-del-medio">La Bodeguita del Medio</a></h3>
                <p><span>Adresse :</span> Calle Empedrado, La Havane</p>
                <p><span>Contact :</span> +53 7 867 1374</p>
                <p>Un lieu incontournable où vous pourrez déguster un Arroz Congrí préparé selon une recette maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/paladar-los-mercaderes">Paladar Los Mercaderes</a></h3>
                <p><span>Adresse :</span> Calle Mercaderes, La Havane</p>
                <p><span>Contact :</span> +53 7 801 2437</p>
                <p>Dans une ambiance chaleureuse, ce restaurant propose un Arroz Congrí savoureux, accompagné de viande rôtie.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-cocinero">El Cocinero</a></h3>
                <p><span>Adresse :</span> Calle 26, Vedado, La Havane</p>
                <p><span>Contact :</span> +53 7 832 2355</p>
                <p>Une adresse moderne où la cuisine cubaine classique rencontre une touche contemporaine.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/san-cristobal">San Cristóbal Paladar</a></h3>
                <p><span>Adresse :</span> Calle San Rafael, La Havane</p>
                <p><span>Contact :</span> +53 7 860 9109</p>
                <p>Une expérience gastronomique unique, où l'Arroz Congrí est un incontournable du menu.</p>
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
