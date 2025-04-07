<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires canadiennes, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités Canadiennes</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités Canadiennes</h1>
        <p>Découvrez le meilleur de la gastronomie canadienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Canada</h2>
        <p>La cuisine canadienne est célèbre pour ses plats réconfortants, ses ingrédients frais et ses influences multiculturelles. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Poutine.jpeg" alt="Poutine">
                <h3><a href="/Poutine">Poutine</a></h3>
                <p>Un plat emblématique composé de frites, de fromage en grains et de sauce brune.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Tourtiere.jpeg" alt="Tourtière">
                <h3><a href="/Tourtiere">Tourtière</a></h3>
                <p>Une tarte salée traditionnelle remplie de viande assaisonnée, populaire au Québec.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Sirop.jpeg" alt="Sirop d'Érable">
                <h3><a href="/Sirop">Sirop d'Érable</a></h3>
                <p>Un délice sucré extrait des érables canadiens, parfait pour les pancakes et bien plus.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Homard.jpeg" alt="Homard de l'Atlantique">
                <h3><a href="/Homard">Homard de l'Atlantique</a></h3>
                <p>Un mets délicat provenant des côtes de l'est du Canada, souvent servi avec du beurre fondu.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Beaver.jpeg" alt="BeaverTails">
                <h3><a href="/Beaver">BeaverTails</a></h3>
                <p>Une pâtisserie frite en forme de queue de castor, garnie de diverses saveurs sucrées.</p>
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
