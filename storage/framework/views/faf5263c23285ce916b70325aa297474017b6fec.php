<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Les pays d'Afrique - WAHLI</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les Pays d'Afrique</h1>
        <p>Découvrez les recettes des pays africains les plus connus</p>
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

        <!-- Buttons for African countries -->
        <div class="country-buttons">
            <button class="country-btn" onclick="window.location.href='Maroc'">Maroc</button>
            <button class="country-btn" onclick="window.location.href='Egypte'">Egypte</button>
            <button class="country-btn" onclick="window.location.href='AfriqueDuSud'">Afrique du Sud</button>
            <button class="country-btn" onclick="window.location.href='Nigeria'">Nigeria</button>
            <button class="country-btn" onclick="window.location.href='Cameroun'">Cameroun</button>
            <button class="country-btn" onclick="window.location.href='Kenya'">Kenya</button>
            <button class="country-btn" onclick="window.location.href='CoteDivoire'">Côte d'Ivoire</button>
            <button class="country-btn" onclick="window.location.href='Tunisie'">Tunisie</button>
            <button class="country-btn" onclick="window.location.href='Senegal'">Sénégal</button>
            <button class="country-btn" onclick="window.location.href='Ghana'">Ghana</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/AfriqueSpe.blade.php ENDPATH**/ ?>