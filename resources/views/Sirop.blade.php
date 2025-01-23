<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants au Canada pour déguster des plats savoureux préparés avec du sirop d'érable, un ingrédient phare de la cuisine canadienne.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Canadiens avec Sirop d'Érable</title>
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
        <h1>Les 5 Meilleurs Restaurants Canadiens avec Sirop d'Érable</h1>
        <p>Goûtez à l'authenticité du Canada avec des plats savoureux préparés avec du sirop d'érable pur et délicieux.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Sirop d'Érable : Un Trésor Canadien</h2>
        <p>Le sirop d'érable est un ingrédient clé de la cuisine canadienne. Il est utilisé dans une variété de plats, des desserts aux plats salés. Découvrez où savourer les meilleures créations au sirop d'érable :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-cabane-a-sucre">La Cabane à Sucre</a></h3>
                <p><span>Adresse :</span> 265 Chemin du Rang, Mont-Saint-Grégoire, QC J0J 1K0</p>
                <p><span>Contact :</span> +1 450-123-4567</p>
                <p>Ce restaurant traditionnel québécois est spécialisé dans les repas à base de sirop d'érable. Vous pourrez y déguster des plats typiques comme les fèves au lard et les crêpes à l'érable.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/les-sapins">Les Sapins</a></h3>
                <p><span>Adresse :</span> 678 Rue Principale, Saint-Hyacinthe, QC J2S 5L3</p>
                <p><span>Contact :</span> +1 450-987-6543</p>
                <p>Les Sapins offre une cuisine raffinée avec des plats à base de sirop d'érable, allant des viandes grillées aux desserts créatifs comme la tarte au sucre d'érable.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/au-syrup">Au Syrup</a></h3>
                <p><span>Adresse :</span> 789 Boulevard Saint-Laurent, Montréal, QC H2X 2T7</p>
                <p><span>Contact :</span> +1 514-234-5678</p>
                <p>Au Syrup est un restaurant qui célèbre le sirop d'érable sous toutes ses formes, avec des plats allant du poulet au sirop d'érable aux gaufres sucrées et salées.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-forêt-de-syrup">La Forêt de Syrup</a></h3>
                <p><span>Adresse :</span> 1533 Route des Érables, Québec, QC G1R 1M3</p>
                <p><span>Contact :</span> +1 418-123-9876</p>
                <p>Dans un cadre pittoresque au cœur d'une érablière, La Forêt de Syrup propose des repas délicieux et créatifs avec du sirop d'érable comme ingrédient phare.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-maple">Chez Maple</a></h3>
                <p><span>Adresse :</span> 245 Rue des Laurentides, Laval, QC H7N 3T6</p>
                <p><span>Contact :</span> +1 514-876-5432</p>
                <p>Chez Maple est un restaurant moderne qui revisite les classiques de la cuisine canadienne avec du sirop d'érable, notamment dans ses salades, ses viandes grillées et ses desserts gourmands.</p>
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
