<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires de la Papouasie-Nouvelle-Guinée, préparées avec tradition et passion.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/specialites.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de la Papouasie-Nouvelle-Guinée</title>
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
        <h1>Les 5 Meilleures Spécialités de Papouasie-Nouvelle-Guinée</h1>
        <p>Découvrez le meilleur de la gastronomie papouasienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la Papouasie-Nouvelle-Guinée</h2>
        <p>La cuisine de la Papouasie-Nouvelle-Guinée est influencée par des ingrédients locaux et des traditions anciennes, avec des plats savoureux à base de viande, de légumes et de fruits frais. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="silanis.jpg" alt="Silanis">
                <h3><a href="/plat/silanis">Silanis</a></h3>
                <p>Des racines de manioc et de taro cuites avec de la viande ou du poisson dans des feuilles de bananier, un plat de fête traditionnel.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="kaukau.jpg" alt="Kaukau">
                <h3><a href="/plat/kaukau">Kaukau</a></h3>
                <p>Patate douce, un aliment de base en Papouasie-Nouvelle-Guinée, souvent cuite sous terre ou bouillie, accompagnée de viande ou de poisson.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="bila.jpg" alt="Bila">
                <h3><a href="/plat/bila">Bila</a></h3>
                <p>Un plat à base de farine de manioc, de lait de coco et de fruits locaux, souvent servi comme dessert.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="tuluk.jpg" alt="Tuluk">
                <h3><a href="/plat/tuluk">Tuluk</a></h3>
                <p>Viande, poisson ou poulet cuit dans des feuilles de bananier, une spécialité populaire dans les régions rurales.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="futali.jpg" alt="Futali">
                <h3><a href="/plat/futali">Futali</a></h3>
                <p>Un plat sucré à base de fruits frais et de lait de coco, souvent servi comme en-cas ou dessert léger.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Papouasie-Nouvelle-Guinée.blade.php ENDPATH**/ ?>