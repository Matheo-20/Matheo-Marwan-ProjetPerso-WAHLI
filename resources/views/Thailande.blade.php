<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires thaïlandaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de Thaïlande</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de Thaïlande</h1>
        <p>Découvrez le meilleur de la gastronomie thaïlandaise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la Thaïlande</h2>
        <p>La cuisine thaïlandaise, célèbre pour ses saveurs uniques, mélange harmonieusement le sucré, l'acide, le salé et le pimenté. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Pad.jpeg" alt="Pad Thaï">
                <h3><a href="/Pad">Pad Thaï</a></h3>
                <p>Un plat de nouilles sautées avec des crevettes, du tofu, des cacahuètes et une sauce aigre-douce.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Tom.jpeg" alt="Tom Yum">
                <h3><a href="/Tom">Tom Yum</a></h3>
                <p>Une soupe épicée et acidulée à base de citronnelle, galanga et crevettes.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/CurryV.jpeg" alt="Curry Vert">
                <h3><a href="/Curry">Curry Vert</a></h3>
                <p>Un curry thaïlandais à base de lait de coco, de pâte de curry vert, et de poulet ou légumes.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Mango.jpeg" alt="Mango Sticky Rice">
                <h3><a href="/Mango">Mango Sticky Rice</a></h3>
                <p>Un dessert traditionnel à base de riz gluant, lait de coco et mangue fraîche.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Som.jpeg" alt="Som Tam">
                <h3><a href="/Som">Som Tam</a></h3>
                <p>Une salade de papaye verte avec du piment, du citron vert, et des cacahuètes.</p>
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
