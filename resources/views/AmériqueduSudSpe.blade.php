<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Les pays d'Amérique du Sud - WAHLI</title>
    
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les Pays d'Amérique du Sud</h1>
        <p>Découvrez les recettes des pays sud-américains les plus connus</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Sélectionner un pays</h2>
        <p>Cliquez sur un pays pour découvrir ses spécialités culinaires</p>

        <!-- Buttons for South American countries -->
        <div class="country-buttons">
            <button class="country-btn" onclick="window.location.href='Brésil'">Brésil</button>
            <button class="country-btn" onclick="window.location.href='Argentine'">Argentine</button>
            <button class="country-btn" onclick="window.location.href='Colombie'">Colombie</button>
            <button class="country-btn" onclick="window.location.href='Pérou'">Pérou</button>
            <button class="country-btn" onclick="window.location.href='Chili'">Chili</button>
            <button class="country-btn" onclick="window.location.href='Équateur'">Équateur</button>
            <button class="country-btn" onclick="window.location.href='Venezuela'">Venezuela</button>
            <button class="country-btn" onclick="window.location.href='Bolivie'">Bolivie</button>
            <button class="country-btn" onclick="window.location.href='Paraguay'">Paraguay</button>
            <button class="country-btn" onclick="window.location.href='Uruguay'">Uruguay</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
