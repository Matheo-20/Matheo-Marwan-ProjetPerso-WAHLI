<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires espagnoles, préparées avec tradition et passion.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/pays.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/specialites.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités Espagnoles</title>
     
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités Espagnoles</h1>
        <p>Découvrez le meilleur de la gastronomie espagnole</p>
    </header>


    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers l'Espagne</h2>
        <p>La cuisine espagnole est connue pour sa richesse et sa diversité. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Paella.jpeg" alt="Paella">
                <h3><a href="/Paella">Paella</a></h3>
                <p>Un plat emblématique à base de riz, de fruits de mer, de poulet et d'épices safranées, typique de Valence.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Tapas.jpeg" alt="Tapas">
                <h3><a href="/Tapas">Tapas</a></h3>
                <p>Une variété de petits plats savoureux, parfaits pour partager et découvrir les saveurs espagnoles.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Gaspacho.jpeg" alt="Gazpacho">
                <h3><a href="/Gazpa">Gazpacho</a></h3>
                <p>Une soupe froide rafraîchissante à base de tomates, concombres, poivrons et huile d'olive, idéale pour l'été.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Tortilla.jpeg" alt="Tortilla">
                <h3><a href="/Tortilla">Tortilla</a></h3>
                <p>Une omelette épaisse garnie de pommes de terre et d'oignons, simple mais délicieuse.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Churros.jpeg" alt="Churros">
                <h3><a href="/Churros">Churros</a></h3>
                <p>Des pâtisseries croustillantes et dorées, souvent accompagnées d'une tasse de chocolat chaud.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Espagne.blade.php ENDPATH**/ ?>