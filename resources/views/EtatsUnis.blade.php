<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires des États-Unis, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités des États-Unis</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités des États-Unis</h1>
        <p>Découvrez le meilleur de la gastronomie américaine</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers les États-Unis</h2>
        <p>La cuisine américaine est un mélange unique de traditions, de saveurs régionales et d'innovations. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Burger.jpeg" alt="Burger">
                <h3><a href="/Burger">Burger</a></h3>
                <p>Le classique sandwich américain avec un steak juteux, des légumes frais et une sauce savoureuse.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Ribs.jpeg" alt="Barbecue Ribs">
                <h3><a href="/Barbecue">Barbecue Ribs</a></h3>
                <p>Des côtes de porc tendres, marinées et grillées avec une sauce barbecue maison.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Macand.jpeg" alt="Mac and Cheese">
                <h3><a href="/Mac">Mac and Cheese</a></h3>
                <p>Un gratin de pâtes au fromage crémeux, un vrai régal pour les amateurs de fromage.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Applepie.jpeg" alt="Apple Pie">
                <h3><a href="/Apple">Apple Pie</a></h3>
                <p>La célèbre tarte aux pommes américaine, servie chaude avec une boule de glace.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Clam.jpeg" alt="Clam Chowder">
                <h3><a href="/Clam">Clam Chowder</a></h3>
                <p>Une soupe crémeuse à base de palourdes, de pommes de terre et d'oignons, typique de la Nouvelle-Angleterre.</p>
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
