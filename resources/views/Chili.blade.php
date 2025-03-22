<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires chiliennes, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités du Chili</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités du Chili</h1>
        <p>Découvrez le meilleur de la gastronomie chilienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Chili</h2>
        <p>La cuisine chilienne, influencée par la richesse de ses terres et mers, offre une variété de plats authentiques et savoureux. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/EmpC.jpeg" alt="Empanadas Chiliennes">
                <h3><a href="/EmpanadaCh">Empanadas Chiliennes</a></h3>
                <p>Des chaussons fourrés à la viande, aux œufs durs, olives et épices, un classique savoureux.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/PastelC.jpeg" alt="Pastel de Choclo">
                <h3><a href="/PastelD">Pastel de Choclo</a></h3>
                <p>Un gratin de maïs avec du bœuf haché, du poulet et des œufs durs, une spécialité réconfortante.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Curanto.jpeg" alt="Curanto">
                <h3><a href="/Curanto">Curanto</a></h3>
                <p>Un plat traditionnel à base de fruits de mer, viande, pommes de terre et légumes cuits dans un four souterrain.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Caldillo.jpeg" alt="Caldillo de Congrio">
                <h3><a href="/Caldillo">Caldillo de Congrio</a></h3>
                <p>Une soupe de congre, poissons et légumes, célébrée même par le poète Pablo Neruda.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Sopaipillas.jpeg" alt="Sopaipillas">
                <h3><a href="/Sopaipillas">Sopaipillas</a></h3>
                <p>Des galettes frites à base de courge, parfaites en accompagnement ou en collation sucrée.</p>
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
