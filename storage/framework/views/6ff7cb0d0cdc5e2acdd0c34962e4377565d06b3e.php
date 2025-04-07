<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Découvrez des recettes authentiques et savoureuses.">
    <title>Recettes - WAHLI</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>WAHLI</h1>
        <p>Explorez les recettes culinaires du monde entier</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Selectionner une destination</h2>
        <p>Voici une sélection des destinations et de leurs spécialités culinaires</p>

        <!-- Buttons for continents -->
        <div class="continent-buttons">
            <button class="continent-btn" onclick="window.location.href='EuropeSpe'">Europe</button>
            <button class="continent-btn" onclick="window.location.href='AmériqueduNordSpe'">Amérique du Nord</button>
            <button class="continent-btn" onclick="window.location.href='AmériqueduSudSpe'">Amérique du Sud</button>
            <button class="continent-btn" onclick="window.location.href='AfriqueSpe'">Afrique</button>
            <button class="continent-btn" onclick="window.location.href='AsieSpe'">Asie</button>
            <button class="continent-btn" onclick="window.location.href='OceanieSpe'">Océanie</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/ListePlat.blade.php ENDPATH**/ ?>