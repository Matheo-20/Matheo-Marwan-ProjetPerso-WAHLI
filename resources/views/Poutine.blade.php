<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants au Canada pour déguster une Poutine, un plat traditionnel québécois à base de frites, de fromage en grains et de sauce brune.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants Canadiens de Poutine au Canada</title>
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
        <h1>Les 5 Meilleurs Restaurants Canadiens de Poutine au Canada</h1>
        <p>Venez déguster la poutine, un plat québécois incontournable à base de frites, fromage en grains et sauce brune.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Poutine : Un Plat Iconique du Québec</h2>
        <p>La poutine est un plat emblématique du Québec, combinant des frites croustillantes, du fromage en grains fondant et une sauce brune savoureuse. Découvrez où déguster ce délice au Canada :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-poutine-queen">La Poutine Queen</a></h3>
                <p><span>Adresse :</span> 1234 Rue Sainte-Catherine O, Montréal, QC H3B 1K5</p>
                <p><span>Contact :</span> +1 514-123-4567</p>
                <p>Spécialisé dans la poutine, ce restaurant offre des versions classiques et variées de ce plat québécois. Ne manquez pas la poutine "Royal" avec viandes et légumes grillés.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/poutineville">Poutineville</a></h3>
                <p><span>Adresse :</span> 1534 Avenue du Mont-Royal E, Montréal, QC H2J 1Z3</p>
                <p><span>Contact :</span> +1 514-987-6543</p>
                <p>Une chaîne incontournable pour les amateurs de poutine où vous pouvez personnaliser votre plat avec une variété de garnitures et de sauces maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-suzie">Chez Suzie</a></h3>
                <p><span>Adresse :</span> 9 Rue des Oblats, Québec, QC G1R 1M2</p>
                <p><span>Contact :</span> +1 418-123-9876</p>
                <p>Restaurant traditionnel québécois offrant une poutine authentique avec un mélange de viandes fumées et de fromage en grains de qualité.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-bonne-poutine">La Bonne Poutine</a></h3>
                <p><span>Adresse :</span> 1789 Boulevard René-Lévesque, Montréal, QC H3H 2M1</p>
                <p><span>Contact :</span> +1 514-654-3210</p>
                <p>Un endroit populaire où la poutine est servie avec un large choix de garnitures, des frites fraîches et des sauces savoureuses. Le plat idéal pour se réchauffer.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mr-poutine">Mr. Poutine</a></h3>
                <p><span>Adresse :</span> 2235 Boulevard Saint-Laurent, Montréal, QC H2X 2T7</p>
                <p><span>Contact :</span> +1 514-234-5678</p>
                <p>Le spécialiste de la poutine avec une variété de recettes créatives. Vous pouvez y déguster une poutine avec des ingrédients variés, allant des légumes grillés à la viande de porc effilochée.</p>
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
