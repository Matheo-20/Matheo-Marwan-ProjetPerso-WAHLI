<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires thaïlandaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de Thaïlande</title>
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
        <h1>Les 5 Meilleures Spécialités de Thaïlande</h1>
        <p>Découvrez le meilleur de la gastronomie thaïlandaise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la Thaïlande</h2>
        <p>La cuisine thaïlandaise, célèbre pour ses saveurs uniques, mélange harmonieusement le sucré, l'acide, le salé et le pimenté. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Pad.jpeg" alt="Pad Thaï">
                <h3><a href="/client/Pad">Pad Thaï</a></h3>
                <p>Un plat de nouilles sautées avec des crevettes, du tofu, des cacahuètes et une sauce aigre-douce.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Tom.jpeg" alt="Tom Yum">
                <h3><a href="/client/Tom">Tom Yum</a></h3>
                <p>Une soupe épicée et acidulée à base de citronnelle, galanga et crevettes.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/CurryV.jpeg" alt="Curry Vert">
                <h3><a href="/client/Curry">Curry Vert</a></h3>
                <p>Un curry thaïlandais à base de lait de coco, de pâte de curry vert, et de poulet ou légumes.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Mango.jpeg" alt="Mango Sticky Rice">
                <h3><a href="/client/Mango">Mango Sticky Rice</a></h3>
                <p>Un dessert traditionnel à base de riz gluant, lait de coco et mangue fraîche.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Som.jpeg" alt="Som Tam">
                <h3><a href="/client/Som">Som Tam</a></h3>
                <p>Une salade de papaye verte avec du piment, du citron vert, et des cacahuètes.</p>
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
