<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs endroits en Argentine pour déguster le dulce de leche, une douceur emblématique de la cuisine argentine.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Endroits pour Déguster le Dulce de Leche en Argentine</title>
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
        <h1>Les 5 Meilleurs Endroits pour Déguster le Dulce de Leche en Argentine</h1>
        <p>Une douceur emblématique de la cuisine argentine, à savourer absolument.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Une Icône de la Gourmandise Argentine</h2>
        <p>Le dulce de leche, une confiture de lait onctueuse et sucrée, est un plaisir incontournable. Découvrez les meilleurs endroits pour en profiter :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-dulceria-argentina">La Dulcería Argentina</a></h3>
                <p><span>Adresse :</span> Av. Corrientes 1234, 1043 Buenos Aires, Argentine</p>
                <p><span>Contact :</span> +54 11 4321-5678</p>
                <p>Célèbre pour ses desserts traditionnels, notamment des alfajores garnis de dulce de leche maison.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-postre-perfecto">El Postre Perfecto</a></h3>
                <p><span>Adresse :</span> Calle San Martín 450, 5500 Mendoza, Argentine</p>
                <p><span>Contact :</span> +54 261 876-5432</p>
                <p>Proposant des pâtisseries artisanales où le dulce de leche est toujours la star.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/casa-del-dulce">Casa del Dulce</a></h3>
                <p><span>Adresse :</span> Calle 9 de Julio 800, 5000 Córdoba, Argentine</p>
                <p><span>Contact :</span> +54 351 654-3210</p>
                <p>Une adresse idéale pour goûter des crêpes généreusement garnies de dulce de leche.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/delicias-pampeanas">Delicias Pampeanas</a></h3>
                <p><span>Adresse :</span> Plaza Mayor, 6000 Rosario, Argentine</p>
                <p><span>Contact :</span> +54 341 987-6543</p>
                <p>Un lieu réputé pour ses spécialités sucrées, notamment le flan nappé de dulce de leche.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-sabor-dulce">El Sabor Dulce</a></h3>
                <p><span>Adresse :</span> Ruta Nacional 40, 7000 Bariloche, Argentine</p>
                <p><span>Contact :</span> +54 294 543-2109</p>
                <p>Des desserts créatifs et modernes, avec le dulce de leche comme ingrédient central.</p>
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
