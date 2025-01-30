<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants espagnols pour savourer des churros authentiques.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Churros en Espagne</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Churros en Espagne</h1>
        <p>Venez savourer ce délice sucré au goût authentique de l'Espagne.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les Churros, une Tradition Espagnole</h2>
        <p>Les churros, croustillants à l'extérieur et fondants à l'intérieur, sont l'un des desserts les plus emblématiques d'Espagne. Découvrez les meilleures adresses pour les déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chocolateria-san-gines">Chocolatería San Ginés</a></h3>
                <p><span>Adresse :</span> Pasadizo de San Ginés, 5, 28013 Madrid</p>
                <p><span>Contact :</span> +34 913 65 65 46</p>
                <p>Incontournable à Madrid, cette chocolaterie est célèbre pour ses churros accompagnés de chocolat chaud.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-churreria">La Churrería</a></h3>
                <p><span>Adresse :</span> Carrer del Carme, 28, 08001 Barcelona</p>
                <p><span>Contact :</span> +34 933 17 55 16</p>
                <p>Un lieu traditionnel où l'on sert des churros frais, faits maison, dans une ambiance conviviale.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churreria-la-madrid">Churrería La Madrid</a></h3>
                <p><span>Adresse :</span> Gran Vía, 45, 28013 Madrid</p>
                <p><span>Contact :</span> +34 914 59 99 77</p>
                <p>Churros délicieux et dorés, accompagnés d'un chocolat onctueux à la hauteur des attentes.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/churreria-paco">Churrería Paco</a></h3>
                <p><span>Adresse :</span> Calle de Santa Engracia, 140, 28003 Madrid</p>
                <p><span>Contact :</span> +34 915 93 92 42</p>
                <p>Un établissement familial offrant des churros tendres, à déguster avec un café ou un chocolat.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chocolateria-la-vienna">Chocolatería La Viena</a></h3>
                <p><span>Adresse :</span> Calle de Vallehermoso, 69, 28015 Madrid</p>
                <p><span>Contact :</span> +34 913 46 88 16</p>
                <p>Ce café historique propose des churros accompagnés de chocolat chaud crémeux, parfait pour une pause gourmande.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Churros.blade.php ENDPATH**/ ?>