<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Les pays d'Amérique du Nord - WAHLI</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les Pays d'Amérique du Nord</h1>
        <p>Découvrez les recettes des pays nord-américains les plus connus</p>
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

        <!-- Buttons for North American countries -->
        <div class="country-buttons">
            <button class="country-btn" onclick="window.location.href='Canada'">Canada</button>
            <button class="country-btn" onclick="window.location.href='EtatsUnis'">États-Unis</button>
            <button class="country-btn" onclick="window.location.href='Mexique'">Mexique</button>
            <button class="country-btn" onclick="window.location.href='Cuba'">Cuba</button>
            <button class="country-btn" onclick="window.location.href='RepubliqueDominicaine'">République Dominicaine</button>
            <button class="country-btn" onclick="window.location.href='Guatemala'">Guatemala</button>
            <button class="country-btn" onclick="window.location.href='Panama'">Panama</button>
            <button class="country-btn" onclick="window.location.href='CostaRica'">Costa Rica</button>
            <button class="country-btn" onclick="window.location.href='Honduras'">Honduras</button>
            <button class="country-btn" onclick="window.location.href='ElSalvador'">El Salvador</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/AmériqueduNordSpe.blade.php ENDPATH**/ ?>