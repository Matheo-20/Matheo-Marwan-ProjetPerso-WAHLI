<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Les pays d'Océanie - WAHLI</title>
    
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les Pays d'Océanie</h1>
        <p>Découvrez les recettes des pays océaniens les plus connus</p>
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

        <!-- Buttons for Oceanian countries -->
        <div class="country-buttons">
            <button class="country-btn" onclick="window.location.href='Australie'">Australie</button>
            <button class="country-btn" onclick="window.location.href='Nouvelle-Zélande'">Nouvelle-Zélande</button>
            <button class="country-btn" onclick="window.location.href='Papouasie-Nouvelle-Guinée'">Papouasie-Nouvelle-Guinée</button>
            <button class="country-btn" onclick="window.location.href='Fidji'">Fidji</button>
            <button class="country-btn" onclick="window.location.href='Samoa'">Samoa</button>
            <button class="country-btn" onclick="window.location.href='Tonga'">Tonga</button>
            <button class="country-btn" onclick="window.location.href='Vanuatu'">Vanuatu</button>
            <button class="country-btn" onclick="window.location.href='ÎlesCook'">Îles Cook</button>
            <button class="country-btn" onclick="window.location.href='Niue'">Niue</button>
            <button class="country-btn" onclick="window.location.href='Kiribati'">Kiribati</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
