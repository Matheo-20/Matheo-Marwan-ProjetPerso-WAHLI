<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires mexicaines, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités Mexicaines</title>
    
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités Mexicaines</h1>
        <p>Découvrez le meilleur de la gastronomie mexicaine</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Mexique</h2>
        <p>La cuisine mexicaine est célèbre pour ses saveurs riches, ses épices et ses plats réconfortants. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Tacos.jpeg" alt="Tacos">
                <h3><a href="/Tacos">Tacos</a></h3>
                <p>Des tortillas garnies de viande, de légumes, de salsa et d'une touche de citron vert.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Enchiladas.jpeg" alt="Enchiladas">
                <h3><a href="/Enchiladas">Enchiladas</a></h3>
                <p>Des tortillas farcies et enroulées, nappées de sauce épicée et gratinées au fromage.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Guacamole.jpeg" alt="Guacamole">
                <h3><a href="/Guacamole">Guacamole</a></h3>
                <p>Un mélange d'avocats frais, de tomates, d'oignons, de coriandre et de jus de citron vert.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Pozole.jpeg" alt="Pozole">
                <h3><a href="/Pozole">Pozole</a></h3>
                <p>Une soupe traditionnelle à base de maïs nixtamalisé, de viande et d'épices.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Barbacoa.jpeg" alt="Barbacoa">
                <h3><a href="/Barbacoa">Barbacoa</a></h3>
                <p>Un plat de viande lentement cuite à la vapeur ou enfouie dans le sol, avec des épices mexicaines traditionnelles.</p>
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
