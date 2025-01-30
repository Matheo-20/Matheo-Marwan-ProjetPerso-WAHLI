<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en Espagne pour déguster une authentique paella, un plat emblématique de la cuisine espagnole.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants de Paella en Espagne</title>
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
    <header>
        <h1>Les 5 Meilleurs Restaurants de Paella en Espagne</h1>
        <p>Découvrez les meilleurs endroits en Espagne pour déguster une paella authentique et savoureuse.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Une Paella Savoureuse à Déguster</h2>
        <p>La paella, un plat espagnol riche en saveurs, est l'un des mets les plus appréciés au monde. Voici une sélection des meilleurs restaurants pour en savourer une :</p>

        <div class="restaurant-list">
            <div class="restaurant">
                <h3><a href="/restaurant/la-pepa">La Pepa</a></h3>
                <p><span>Adresse :</span> Calle del Mar, 12, 46001 Valence</p>
                <p><span>Contact :</span> +34 963 52 45 78</p>
                <p>Un restaurant emblématique de Valence servant une paella traditionnelle au goût inégalé.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/casa-roberto">Casa Roberto</a></h3>
                <p><span>Adresse :</span> Avenida de Aragón, 5, 46021 Valence</p>
                <p><span>Contact :</span> +34 962 34 56 78</p>
                <p>Un établissement célèbre pour sa paella valencienne cuisinée avec des produits locaux de première qualité.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/restaurante-levante">Restaurante Levante</a></h3>
                <p><span>Adresse :</span> Carrer de Murillo, 9, 46183 L'Eliana</p>
                <p><span>Contact :</span> +34 961 23 45 67</p>
                <p>Un lieu incontournable pour savourer une paella au safran et aux ingrédients soigneusement sélectionnés.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/el-palmar">El Palmar</a></h3>
                <p><span>Adresse :</span> Calle Mayor, 45, 46012 Valence</p>
                <p><span>Contact :</span> +34 964 78 90 12</p>
                <p>Situé près de l'Albufera, ce restaurant propose une paella typique au riz de qualité supérieure.</p>
            </div>
            <div class="restaurant">
                <h3><a href="/restaurant/la-matandeta">La Matandeta</a></h3>
                <p><span>Adresse :</span> Carretera Alfafar, 46012 Valence</p>
                <p><span>Contact :</span> +34 963 45 67 89</p>
                <p>Un restaurant champêtre offrant une expérience gastronomique authentique avec des recettes traditionnelles.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>
</body>
</html>
