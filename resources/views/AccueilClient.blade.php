<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Explorez des spécialités culinaires du monde entier avec des recettes exquises et savoureuses.">
    <link rel="stylesheet" href="{{ asset('Css/Accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/logo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>WAHLI - Spécialités Culinaires</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            overflow-x: hidden;
        }

        /* Logo */
        .logo {
            position: fixed;
            top: 10px;
            left: 10px;
            background-color: #3498db;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            line-height: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000; /* Assure que le logo est au premier plan */
        }

        /* Header Section */
        header {
            background-image: url("/Image/terre.png"); /* Utilisation de l'image locale */
            background-size: cover;
            background-position: center;
            color: white;
            height: 80vh;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }

        header h1 {
            font-size: 56px;
            margin: 0;
        }

        header p {
            font-size: 20px;
            font-style: italic;
        }

        header .cta-btn {
            background-color: #3498db;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        header .cta-btn:hover {
            background-color: #2980b9;
        }

        /* Navigation */
        nav {
            background-color: #5dade2;
            text-align: center;
            padding: 15px 0;
            position: relative;
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
            background-color: #3498db;
            border-radius: 5px;
        }

        .user-icon {
            position: absolute;
            top: 50%;
            right: 20px;
            font-size: 40px;
            color: white;
            transform: translateY(-50%);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .user-icon:hover {
            color: #2980b9;
        }

        /* Main Content */
        .main-content {
            padding: 60px 20px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: -60px 0 60px 0;
            border-radius: 10px;
        }

        .main-content h2 {
            font-size: 36px;
            color: #3498db;
            margin-bottom: 20px;
        }

        .main-content p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        /* Objectives Section */
        .specialties {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .specialty-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
            position: relative;
        }

        .specialty-card:hover {
            transform: scale(1.05);
        }

        .specialty-card img {
            width: 100%;
            height: auto;
            border-bottom: 4px solid #3498db;
        }

        .specialty-card h3 {
            font-size: 24px;
            color: #3498db;
            padding: 20px;
        }

        .specialty-card p {
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
            color: #3498db;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Logo -->
    <div class="logo">
        <span>W</span>
    </div>

    <!-- Header Section -->
    <header>
        <h1>WAHLI</h1>
        <p>Voyagez à travers les saveurs du monde entier</p>
        <!-- Bouton "Pays et Spécialités" -->
        <button class="cta-btn" onclick="window.location.href='ListePlat'">Pays et Spécialités</button>
    </header>
    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
        <a href="seConnecterClient" class="user-icon">
            <i class="fa fa-user"></i>
        </a>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Nos Objectifs</h2>
        <p>Découvrez les principales missions et objectifs de notre site, dédiés à la découverte et à la célébration des cuisines du monde entier.</p>

        <!-- Objectives Grid -->
        <div class="specialties">
            <!-- Objectif 1 -->
            <div class="specialty-card">
                <img src="objectif1-placeholder.jpg" alt="Objectif">
                <h3>Faire découvrir la Culture Culinaire Mondiale</h3>
                <p>Notre premier objectif est de faire découvrir les traditions culinaires de chaque pays, en partageant des recettes authentiques et savoureuses qui reflètent la diversité culturelle du Monde. Tout en vous conseillant des plats à découvrir lors de vos voyages.</p>
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
