<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Les pays d'Europe - WAHLI</title>                
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les Pays d'Europe</h1>
        <p>Découvrez les recettes des pays européens les plus connus</p>
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

        <!-- Buttons for European countries -->
        <div class="country-buttons">
            <button class="country-btn" onclick="window.location.href='France'">France</button>
            <button class="country-btn" onclick="window.location.href='Italie'">Italie</button>
            <button class="country-btn" onclick="window.location.href='Espagne'">Espagne</button>
            <button class="country-btn" onclick="window.location.href='Portugal'">Portugal</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/EuropeSpe.blade.php ENDPATH**/ ?>