<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Angola pour déguster le Calulu, un plat traditionnel à base de poisson et de légumes, typique de la cuisine angolaise.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster le Calulu en Angola</title>
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster le Calulu en Angola</h1>
        <p>Un plat traditionnel angolais, délicieux et riche en saveurs.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Calulu : Un Plat Incontournable de la Cuisine Angolaise</h2>
        <p>Le Calulu est un plat traditionnel angolais, composé principalement de poisson, légumes, et épices. Ce mets est souvent accompagné de riz ou de manioc, pour un goût exceptionnel. Découvrez où déguster cette spécialité en Angola :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/calulu-chez-angolais">Calulu Chez Angolais</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 923 456 789</p>
                <p>Chez Angolais, le Calulu est préparé selon la recette traditionnelle, offrant une explosion de saveurs avec du poisson frais et des légumes locaux.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/calulu-du-port">Calulu du Port</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 923 876 543</p>
                <p>Un endroit réputé pour son Calulu, mijoté avec du poisson et des légumes, accompagné de riz ou de manioc, pour un repas délicieux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/calulu-express">Calulu Express</a></h3>
                <p><span>Adresse :</span> Benguela, Angola</p>
                <p><span>Contact :</span> +244 933 123 456</p>
                <p>Calulu Express vous offre une version rapide et savoureuse de ce plat traditionnel, parfait pour un déjeuner sur le pouce.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/calulu-a-dakar">Calulu à Dakar</a></h3>
                <p><span>Adresse :</span> Luanda, Angola</p>
                <p><span>Contact :</span> +244 912 345 678</p>
                <p>Restaurant réputé pour son Calulu épicé, combinant poisson frais et légumes locaux dans une préparation soignée et savoureuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/calulu-village">Calulu Village</a></h3>
                <p><span>Adresse :</span> Huambo, Angola</p>
                <p><span>Contact :</span> +244 931 234 567</p>
                <p>Dans ce restaurant du village, le Calulu est une spécialité incontournable, servi avec des accompagnements traditionnels comme le riz ou le manioc.</p>
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
