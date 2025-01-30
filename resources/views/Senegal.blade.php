<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires sénégalaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités du Sénégal</title>
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

        /* Grid pour les spécialités */
        .specialities {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .speciality {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .speciality:hover {
            transform: scale(1.05);
        }

        .speciality img {
            width: 100%;
            height: 200px; /* Taille fixe pour uniformiser les images */
            object-fit: cover; /* Maintient le ratio d'aspect */
            border-bottom: 4px solid #3498db; /* Bleu */
        }

        .speciality h3 {
            font-size: 24px;
            color: #3498db; /* Bleu */
            padding: 20px;
            margin: 0;
        }

        .speciality h3 a {
            text-decoration: none; /* Supprime le soulignement */
            color: #3498db; /* Bleu */
            transition: color 0.3s ease;
        }

        .speciality h3 a:hover {
            color: #1abc9c; /* Vert clair */
        }

        .speciality p {
            font-size: 16px;
            color: #555;
            padding: 0 20px 20px;
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
        <h1>Les 5 Meilleures Spécialités du Sénégal</h1>
        <p>Découvrez le meilleur de la gastronomie sénégalaise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Sénégal</h2>
        <p>La cuisine sénégalaise est réputée pour ses saveurs riches et ses plats traditionnels, inspirés par les cultures locales et internationales. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Thieb.jpeg" alt="Thieboudienne">
                <h3><a href="/client/Tieb">Thieboudienne</a></h3>
                <p>Le plat national à base de riz, de poisson, de légumes et d'épices, cuisiné dans une sauce tomate savoureuse.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Yassa.jpeg" alt="Yassa Poulet">
                <h3><a href="/client/Yassa">Yassa Poulet</a></h3>
                <p>Un poulet mariné dans du citron, des oignons et des épices, puis mijoté pour un goût acidulé unique.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Mafe.jpeg" alt="Mafé">
                <h3><a href="/client/Mafe">Mafé</a></h3>
                <p>Un ragoût de viande ou de poisson cuisiné avec une sauce riche à base d’arachides.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Domoda.jpeg" alt="Domoda">
                <h3><a href="/client/Domoda">Domoda</a></h3>
                <p>Une sauce onctueuse à base de tomates et de farine, souvent servie avec du riz et du poisson.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Millet.jpeg" alt="Beignets de Millet">
                <h3><a href="/client/Beignet">Beignets de Millet</a></h3>
                <p>De délicieux beignets sucrés, à base de farine de millet, parfaits pour les collations ou desserts.</p>
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
