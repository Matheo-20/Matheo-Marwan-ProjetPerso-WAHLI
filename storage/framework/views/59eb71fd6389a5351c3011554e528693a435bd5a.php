<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Les pays d'Asie - WAHLI</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les Pays d'Asie</h1>
        <p>Découvrez les recettes des pays asiatiques les plus connus</p>
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

        <!-- Buttons for Asian countries -->
        <div class="country-buttons">
            <button class="country-btn" onclick="window.location.href='Chine'">Chine</button>
            <button class="country-btn" onclick="window.location.href='Japon'">Japon</button>
            <button class="country-btn" onclick="window.location.href='Thailande'">Thaïlande</button>
            <button class="country-btn" onclick="window.location.href='Pakistan'">Pakistan</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/AsieSpe.blade.php ENDPATH**/ ?>