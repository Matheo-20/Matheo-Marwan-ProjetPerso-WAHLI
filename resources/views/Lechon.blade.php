<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants à Cuba pour savourer un authentique Lechón Asado, le porc rôti emblématique de la cuisine cubaine.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Lechón Asado à Cuba</title>
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
        <h1>Les 5 Meilleurs Restaurants de Lechón Asado à Cuba</h1>
        <p>Dégustez le célèbre porc rôti cubain, un incontournable des fêtes et des banquets.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Lechón Asado : Une Tradition Cubaine</h2>
        <p>Le Lechón Asado, porc rôti à la perfection et assaisonné d'ail et d'agrumes, est le plat festif par excellence. Découvrez où le savourer à Cuba :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-aljibe">El Aljibe</a></h3>
                <p><span>Adresse :</span> Ave. 7ma, Miramar, La Havane</p>
                <p><span>Contact :</span> +53 7 209 4490</p>
                <p>Ce restaurant traditionnel est célèbre pour son Lechón Asado, servi avec du riz, des haricots noirs et des bananes plantains.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-fontana">La Fontana</a></h3>
                <p><span>Adresse :</span> Calle 3ra A, Miramar, La Havane</p>
                <p><span>Contact :</span> +53 7 202 8337</p>
                <p>Un lieu sophistiqué proposant un Lechón Asado savoureux et parfaitement épicé.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-rincon">El Rincón del Lechón</a></h3>
                <p><span>Adresse :</span> Calle 23, Vedado, La Havane</p>
                <p><span>Contact :</span> +53 7 838 1234</p>
                <p>Spécialisé dans les plats à base de porc, leur Lechón Asado est un incontournable pour les amateurs de viande.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-terraza-cojimar">La Terraza de Cojímar</a></h3>
                <p><span>Adresse :</span> Calle Real, Cojímar, La Havane</p>
                <p><span>Contact :</span> +53 7 797 4121</p>
                <p>Situé près de la mer, ce restaurant sert un Lechón Asado tendre et juteux, accompagné de légumes locaux.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/los-nardos">Los Nardos</a></h3>
                <p><span>Adresse :</span> Paseo del Prado, La Havane</p>
                <p><span>Contact :</span> +53 7 863 2985</p>
                <p>Un cadre élégant pour savourer un Lechón Asado préparé dans la pure tradition cubaine.</p>
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
