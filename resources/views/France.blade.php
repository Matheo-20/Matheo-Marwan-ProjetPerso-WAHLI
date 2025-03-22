<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires françaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités Françaises</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités Françaises</h1>
        <p>Découvrez le meilleur de la gastronomie française</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la France</h2>
        <p>La cuisine française est connue pour sa richesse et sa diversité. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Aligot.jpeg" alt="Aligot">
                <h3><a href="/Aligot">Aligot</a></h3>
                <p>Une purée onctueuse de pommes de terre mélangée à de la tomme fraîche, une spécialité réconfortante de l'Aubrac.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Gratin.jpeg" alt="Gratin Dauphinois">
                <h3><a href="/Gratin">Gratin Dauphinois</a></h3>
                <p>Un plat savoureux composé de pommes de terre, de crème et de lait, délicatement gratiné au four.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Quiche.jpeg" alt="Quiche Lorraine">
                <h3><a href="/Quiche">Quiche Lorraine</a></h3>
                <p>Une tarte salée garnie de crème, d'œufs, de lardons et de fromage, originaire de la région de Lorraine.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Bourguignon.jpeg" alt="Bœuf Bourguignon">
                <h3><a href="/Boeuf">Bœuf Bourguignon</a></h3>
                <p>Un ragoût de bœuf braisé au vin rouge avec des légumes, une spécialité de Bourgogne.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Tartiflette.jpeg" alt="Tartiflette">
                <h3><a href="/Tartiflette">Tartiflette</a></h3>
                <p>Un plat réconfortant à base de pommes de terre, de lardons, d'oignons et de fromage reblochon, typique des Alpes.</p>
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
