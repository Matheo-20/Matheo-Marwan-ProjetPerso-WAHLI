<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Bloquer utilisateur</title>
    </head>
    <body>
        <h2> Vous pouvez vous selectionner un utilisateur a bloquer </h2>
    </body>
</html>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Explorez des spécialités culinaires du monde entier avec des recettes exquises et savoureuses.">
    <title>WAHLI - Spécialités Culinaires</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header */
        header {
            background-color: #FF5733;
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
            background-color: #FFC300;
            text-align: center;
            padding: 15px 0;
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
            background-color: #FF5733;
            border-radius: 5px;
        }

        /* Main content */
        .main-content {
            padding: 40px 20px;
            text-align: center;
        }

        .main-content h2 {
            font-size: 36px;
            color: #FF5733;
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
            border-bottom: 4px solid #FF5733;
        }

        .speciality h3 {
            font-size: 24px;
            color: #FF5733;
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
            color: #FF5733;
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
        <h1>WAHLI</h1>
        <p>Voyagez à travers les saveurs du monde entier</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#">Accueil</a>
        <a href="#">Nos Spécialités</a>
        <a href="#">Recettes</a>
        <a href="#">Contact</a>
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

<?php /**PATH /var/www/html/WAHLI/resources/views/bloquerUtilisateur.blade.php ENDPATH**/ ?>