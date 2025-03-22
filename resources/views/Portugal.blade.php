<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires portugaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités Portugaises</title>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités Portugaises</h1>
        <p>Découvrez le meilleur de la gastronomie portugaise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Portugal</h2>
        <p>La cuisine portugaise est célèbre pour ses saveurs authentiques et ses plats réconfortants. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Bacalhau.jpeg" alt="Bacalhau à Brás">
                <h3><a href="/Bacalhau">Bacalhau à Brás</a></h3>
                <p>Un plat savoureux à base de morue effilochée, de pommes de terre sautées, d'œufs et d'olives.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Pastel.jpeg" alt="Pastel de Nata">
                <h3><a href="/Pastel">Pastel de Nata</a></h3>
                <p>De délicieux flans pâtissiers dans une croûte feuilletée, saupoudrés de cannelle ou de sucre glace.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Francesinha.jpeg" alt="La Francesinha">
                <h3><a href="/Francesinha">La Francesinha</a></h3>
                <p>Un sandwich portugais emblématique garni de viande, recouvert de fromage fondu et nappé de sauce épicée.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Sardine.jpeg" alt="Sardines Grillées">
                <h3><a href="/Sardine">Sardines Grillées</a></h3>
                <p>Des sardines fraîches grillées, servies avec des pommes de terre et une salade.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Carne.jpeg" alt="La Carne de Porco à Alentejana">
                <h3><a href="/Carne">La Carne de Porco à Alentejana</a></h3>
                <p>Un plat savoureux à base de porc, de palourdes, de pommes de terre et d'épices.</p>
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
