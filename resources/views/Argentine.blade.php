<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires argentines, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de l'Argentine</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de l'Argentine</h1>
        <p>Découvrez le meilleur de la gastronomie argentine</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers l'Argentine</h2>
        <p>La cuisine argentine est réputée pour ses viandes exceptionnelles et ses saveurs riches. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/asado.jpeg" alt="Asado">
                <h3><a href="/Asado">Asado</a></h3>
                <p>Le barbecue argentin, une tradition incontournable avec des viandes grillées à la perfection.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Empanadas.jpeg" alt="Empanadas">
                <h3><a href="/EmpanadasA">Empanadas</a></h3>
                <p>Des chaussons farcis avec des viandes, des légumes ou du fromage, parfaits pour une collation.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Milanesa.jpeg" alt="Milanesa">
                <h3><a href="/Milanesa">Milanesa</a></h3>
                <p>Une escalope de viande panée et frite, souvent servie avec des frites ou une salade.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Choripan.jpeg" alt="Choripán">
                <h3><a href="/Choripan">Choripán</a></h3>
                <p>Un sandwich de chorizo grillé, un plat de rue populaire en Argentine, souvent accompagné de chimichurri.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Dulce.jpeg" alt="Dulce de Leche">
                <h3><a href="/Dulce">Dulce de Leche</a></h3>
                <p>Un caramel crémeux à base de lait, utilisé dans de nombreux desserts argentins, comme les alfajores.</p>
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
