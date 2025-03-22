<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires brésiliennes, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités du Brésil</title>
 
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités du Brésil</h1>
        <p>Découvrez le meilleur de la gastronomie brésilienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Brésil</h2>
        <p>La cuisine brésilienne est riche en saveurs variées, influencée par les cultures indigènes, africaines et européennes. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/acaraje.jpeg" alt="Acarajé">
                <h3><a href="/Acaraje">Acarajé</a></h3>
                <p>Des boules de pâte de haricots frites, souvent servies avec des crevettes et des légumes, un plat emblématique du Brésil.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Pao.jpeg" alt="Pão de Queijo">
                <h3><a href="/Pao">Pão de Queijo</a></h3>
                <p>De petites boules de pain au fromage, délicieusement moelleuses et populaires au Brésil.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Moqueca.jpeg" alt="Moqueca">
                <h3><a href="/Moqueca">Moqueca</a></h3>
                <p>Un ragoût de poisson cuit avec du lait de coco, des tomates et des épices, typique des côtes brésiliennes.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Churrasco.jpeg" alt="Churrasco">
                <h3><a href="/Churrasco">Churrasco</a></h3>
                <p>Un barbecue brésilien avec de la viande grillée sur une broche, servi avec des accompagnements.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Brigadeiro.jpeg" alt="Brigadeiro">
                <h3><a href="/Brigadeiro">Brigadeiro</a></h3>
                <p>Des bonbons à base de lait concentré, de chocolat et de beurre, un véritable délice sucré brésilien.</p>
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
