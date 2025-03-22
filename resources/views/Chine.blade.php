<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires chinoises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de la Chine</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de la Chine</h1>
        <p>Découvrez le meilleur de la gastronomie chinoise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la Chine</h2>
        <p>La cuisine chinoise est un trésor de saveurs, de textures et de traditions. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Canard.jpeg" alt="Canard Laqué de Pékin">
                <h3><a href="/Canard">Canard Laqué de Pékin</a></h3>
                <p>Un classique raffiné, avec une peau croustillante et une viande juteuse, servi avec des crêpes fines.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Dumplings.jpeg" alt="Dumplings">
                <h3><a href="/Dumpling">Dumplings</a></h3>
                <p>De délicieuses bouchées farcies à la viande ou aux légumes, cuites à la vapeur ou frites.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Mapo.jpeg" alt="Mapo Tofu">
                <h3><a href="/Mapo">Mapo Tofu</a></h3>
                <p>Un plat épicé du Sichuan à base de tofu, de viande hachée et d'une sauce pimentée.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Nems.jpeg" alt="Nems">
                <h3><a href="/Nems">Nems</a></h3>
                <p>Rouleaux croustillants farcis au porc, aux légumes ou aux fruits de mer, servis avec une sauce aigre-douce.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/RizC.jpeg" alt="Riz Cantonnais">
                <h3><a href="/RizC">Riz Cantonnais</a></h3>
                <p>Un mélange savoureux de riz sauté, d'œufs, de légumes et de viande ou de fruits de mer.</p>
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
