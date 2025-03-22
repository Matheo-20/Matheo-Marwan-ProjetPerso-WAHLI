<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires japonaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités du Japon</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités du Japon</h1>
        <p>Découvrez le meilleur de la gastronomie japonaise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Japon</h2>
        <p>La cuisine japonaise est un mélange d'élégance et de tradition. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Sushi.jpeg" alt="Sushi">
                <h3><a href="/Sushi">Sushi</a></h3>
                <p>Des bouchées élégantes de riz vinaigré garnies de poisson cru ou de fruits de mer.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Ramen.jpeg" alt="Ramen">
                <h3><a href="/Ramen">Ramen</a></h3>
                <p>Un bol de nouilles savoureuses dans un bouillon riche, garni de porc, d'œufs et de légumes.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Tempura.jpeg" alt="Tempura">
                <h3><a href="/Tempura">Tempura</a></h3>
                <p>Des légumes ou des fruits de mer enrobés de pâte légère et frits jusqu'à être dorés.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Okonomiyaki.jpeg" alt="Okonomiyaki">
                <h3><a href="/Oko">Okonomiyaki</a></h3>
                <p>Une sorte de crêpe salée garnie de chou, de viande ou de fruits de mer, nappée de sauces savoureuses.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Matcha.jpeg" alt="Desserts au Matcha">
                <h3><a href="/Matcha">Desserts au Matcha</a></h3>
                <p>Des douceurs délicates à base de thé vert matcha, parfaites pour finir un repas.</p>
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
