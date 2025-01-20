<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Explorez des spécialités culinaires du monde entier avec des recettes exquises et savoureuses.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/Accueil.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour l'icône -->
    <title>WAHLI - Spécialités Culinaires</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Logo en haut à gauche */
        .logo {
            position: fixed; /* Fixé en haut à gauche */
            top: 10px; /* Distance du haut */
            left: 10px; /* Distance de la gauche */
            background-color: #3498db; /* Fond bleu pour le logo */
            color: #fff; /* Couleur de la lettre en blanc */
            font-size: 24px; /* Taille de la lettre */
            font-weight: bold; /* Épaisseur de la lettre */
            padding: 10px; /* Espacement intérieur autour de la lettre */
            border-radius: 50%; /* Forme arrondie */
            text-align: center; /* Centrer le texte */
            width: 50px; /* Largeur fixe */
            height: 50px; /* Hauteur fixe */
            line-height: 50px; /* Aligner verticalement la lettre */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre pour un effet visuel */
        }

        /* Header */
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

        /* Navigation */
        nav {
            background-color: #5dade2; /* Bleu clair */
            text-align: center;
            padding: 15px 0;
            position: relative; /* Pour positionner l'icône dans le coin droit */
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 15px 25px;
            margin: 0 20px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #3498db; /* Bleu */
            border-radius: 5px;
        }

        /* Positionnement de l'icône de buste à droite */
        .user-icon {
            position: absolute;  /* Permet de positionner l'icône précisément */
            top: 50%;  /* Position verticale au centre */
            right: 20px;  /* Position horizontale à 20px du bord droit */
            font-size: 40px;   /* Taille de l'icône */
            color: white;  /* Couleur de l'icône */
            transform: translateY(-50%); /* Ajuste pour que l'icône soit parfaitement centrée */
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .user-icon:hover {
            color: #2980b9;   /* Couleur bleue plus foncée au survol */
        }

        a {
            text-decoration: none;  /* Retirer le soulignement du lien */
        }

        /* Main content */
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

        /* Grid for specialities */
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
            height: auto;
            border-bottom: 4px solid #3498db; /* Bleu */
        }

        .speciality h3 {
            font-size: 24px;
            color: #3498db; /* Bleu */
            padding: 20px;
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

    <!-- Logo en haut à gauche -->
    <div class="logo">
  <span>W</span>
    </div>


    <!-- Header -->
    <header>
        <h1>WAHLI</h1>
        <p>Voyagez à travers les saveurs du monde entier</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="ListePlat">Pays et spécialités</a>
        <a href="Contact">Contact</a>
        
        <!-- Icone buste de connexion en haut à droite -->
        <a href="seConnecterClient" class="user-icon">
            <i class="fa fa-user"></i>
        </a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Nos Spécialités Culinaires</h2>
        <p>Découvrez des plats uniques, préparés avec soin et amour. Chaque recette raconte une histoire et une tradition culinaire.</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="specialite1.jpg" alt="Spécialité 1">
                <h3>Le Couscous Traditionnel</h3>
                <p>Un plat emblématique d'Afrique du Nord, préparé avec de la semoule fine, des légumes frais et de la viande tendre.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="specialite2.jpg" alt="Spécialité 2">
                <h3>Sushi Japonais</h3>
                <p>Une spécialité japonaise à base de poisson frais, de riz vinaigré et d'algues marines, idéale pour les amateurs de fraîcheur.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="specialite3.jpg" alt="Spécialité 3">
                <h3>Paella Espagnole</h3>
                <p>Un plat savoureux à base de riz, de fruits de mer, de poulet et de légumes, typique de la région de Valence en Espagne.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="specialite4.jpg" alt="Spécialité 4">
                <h3>Pizza Napolitaine</h3>
                <p>La fameuse pizza italienne, avec une pâte fine, une sauce tomate maison, du fromage mozzarella et des garnitures de saison.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/AccueilClient.blade.php ENDPATH**/ ?>