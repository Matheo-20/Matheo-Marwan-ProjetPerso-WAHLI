<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Explorez des spécialités culinaires du monde entier avec des recettes exquises et savoureuses.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/Accueil.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>WAHLI - Spécialités Culinaires</title>
       
</head>
<body>

    <!-- Logo -->
    <div class="logo">
        <span>W</span>
    </div>

    <!-- Header Section -->
    <header>
        <h1>WAHLI</h1>
        <p>Voyagez à travers les saveurs du monde entier</p>
        <!-- Bouton "Pays et Spécialités" -->
        <button class="cta-btn" onclick="window.location.href='ListePlat'">Pays et Spécialités</button>
    </header>
    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
        <a href="seConnecterClient" class="user-icon">
            <i class="fa fa-user"></i>
        </a>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Nos Objectifs</h2>
        <p>Découvrez les principales missions et objectifs de notre site, dédiés à la découverte et à la célébration des cuisines du monde entier.</p>

        <!-- Objectives Grid -->
        <div class="specialties">
            <!-- Objectif 1 -->
            <div class="specialty-card">
                <img src="objectif1-placeholder.jpg" alt="Objectif">
                <h3>Faire découvrir la Culture Culinaire Mondiale</h3>
                <p>Notre premier objectif est de faire découvrir les traditions culinaires de chaque pays, en partageant des recettes authentiques et savoureuses qui reflètent la diversité culturelle du Monde. Tout en vous conseillant des plats à découvrir lors de vos voyages.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/AccueilClient.blade.php ENDPATH**/ ?>