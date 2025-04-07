<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires colombiennes, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de la Colombie</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de la Colombie</h1>
        <p>Découvrez le meilleur de la gastronomie colombienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la Colombie</h2>
        <p>La cuisine colombienne est un mélange riche de saveurs et d'ingrédients locaux. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Arepa.jpeg" alt="Arepa">
                <h3><a href="/Arepa">Arepa</a></h3>
                <p>Une galette de maïs, parfaite pour accompagner divers plats ou garnie de fromage, viande, ou œuf.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Ajiaco.jpeg" alt="Ajiaco">
                <h3><a href="/Ajiaco">Ajiaco</a></h3>
                <p>Une soupe traditionnelle à base de poulet, de pommes de terre et de maïs, accompagnée de riz et de crème.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Bandeja.jpeg" alt="Bandeja Paisa">
                <h3><a href="/Bandeja">Bandeja Paisa</a></h3>
                <p>Un plat copieux composé de viande hachée, d'œuf, de riz, de haricots rouges et d'avocat.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/EmC.jpeg" alt="Empanada Colombienne">
                <h3><a href="/EmpanadaC">Empanada Colombienne</a></h3>
                <p>Une délicieuse pâte frite farcie de viande, de pommes de terre et d'épices, parfaite pour un en-cas.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Pandebono.jpeg" alt="Pandebono">
                <h3><a href="/Pandebono">Pandebono</a></h3>
                <p>Un petit pain moelleux à base de fromage et de farine de maïs, souvent servi au petit-déjeuner ou en collation.</p>
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
