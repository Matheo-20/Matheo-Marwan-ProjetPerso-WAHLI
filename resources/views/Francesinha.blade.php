<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants portugais pour déguster une authentique Francesinha.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster une Francesinha au Portugal</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster une Francesinha au Portugal</h1>
        <p>La Francesinha, un plat typique portugais, est l'un des incontournables à découvrir lors d'un passage au Portugal.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>La Francesinha, un Plat Iconique du Portugal</h2>
        <p>La Francesinha, véritable plat réconfortant et savoureux, est un incontournable des cuisines portugaises. Découvrez où déguster les meilleures Francesinhas à travers le Portugal.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-porto">Café Santiago - Porto</a></h3>
                <p><span>Adresse :</span> Rua de Passos Manuel 226, 4000-382 Porto</p>
                <p><span>Contact :</span> +351 22 200 7651</p>
                <p>Un restaurant emblématique de Porto, où la Francesinha est servie dans une version authentique et généreuse. Le tout accompagné d'une sauce maison savoureuse.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-lisbonne">Avenida 48 - Lisbonne</a></h3>
                <p><span>Adresse :</span> Avenida Magalhães Lima 48, 1000-166 Lisbonne</p>
                <p><span>Contact :</span> +351 21 797 4678</p>
                <p>Dans un cadre agréable, ce restaurant propose une Francesinha préparée avec des ingrédients de qualité et une sauce épicée qui fait la différence.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-braga">Francesinha da Praça - Braga</a></h3>
                <p><span>Adresse :</span> Praça Conde Agrolongo 3, 4700-314 Braga</p>
                <p><span>Contact :</span> +351 253 204 539</p>
                <p>À Braga, ce restaurant est connu pour sa version originale et copieuse de la Francesinha, où le fromage fond parfaitement et la sauce est exquise.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-amadora">Café Restaurante O Fazendeiro - Amadora</a></h3>
                <p><span>Adresse :</span> Rua de Almirante Gago Coutinho 95, 2650-264 Amadora</p>
                <p><span>Contact :</span> +351 21 494 8393</p>
                <p>Un lieu populaire à Amadora, où la Francesinha est servie avec une sauce secrète qui ravit les papilles des habitués et des nouveaux venus.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/francesinha-matosinhos">O Pescador - Matosinhos</a></h3>
                <p><span>Adresse :</span> Avenida da Liberdade 50, 4450-143 Matosinhos</p>
                <p><span>Contact :</span> +351 22 937 1641</p>
                <p>Dans la ville côtière de Matosinhos, ce restaurant offre une version traditionnelle de la Francesinha, avec une viande tendre et une sauce parfaitement équilibrée.</p>
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
