<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Sénégal pour déguster le Mafé, un plat traditionnel à base de viande, de légumes et de sauce aux arachides.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Mafé au Sénégal</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Mafé au Sénégal</h1>
        <p>Un plat sénégalais savoureux à base de viande et de sauce aux arachides.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Mafé : Un Plat Traditionnel Sénégalais</h2>
        <p>Le Mafé est un plat traditionnel sénégalais composé de viande (souvent du poulet ou du bœuf) cuisinée dans une sauce épaisse à base de pâte d'arachide, accompagnée de légumes. Découvrez où déguster ce plat délicieux au Sénégal.</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-mama">Chez Mama</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 789 12 34</p>
                <p>Chez Mama est l'endroit idéal pour savourer un Mafé fait maison, avec une sauce crémeuse et bien parfumée.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-kedjenou">Le Kedjenou</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 456 78 90</p>
                <p>Le Kedjenou est un restaurant populaire qui propose un Mafé délicieux, accompagné de riz et de légumes frais.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/maison-du-mafe">La Maison du Mafé</a></h3>
                <p><span>Adresse :</span> Saly, Sénégal</p>
                <p><span>Contact :</span> +221 33 876 45 67</p>
                <p>La Maison du Mafé est spécialisée dans ce plat traditionnel, avec une préparation à base d'arachides et de viande de qualité.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-palais-du-mafe">Le Palais du Mafé</a></h3>
                <p><span>Adresse :</span> Mbour, Sénégal</p>
                <p><span>Contact :</span> +221 33 234 56 78</p>
                <p>Le Palais du Mafé propose une version exquise de ce plat avec une sauce aux arachides riche et onctueuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/restaurant-yassa">Restaurant Yassa</a></h3>
                <p><span>Adresse :</span> Dakar, Sénégal</p>
                <p><span>Contact :</span> +221 33 567 89 01</p>
                <p>Au Restaurant Yassa, le Mafé est un plat phare, préparé avec des produits locaux frais pour une explosion de saveurs.</p>
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
