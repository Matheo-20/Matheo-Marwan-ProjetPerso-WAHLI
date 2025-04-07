<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires angolaises, préparées avec tradition et passion.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/specialites.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/pays.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de l'Angola</title>
    <style>
        
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de l'Angola</h1>
        <p>Découvrez le meilleur de la gastronomie angolaise</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers l'Angola</h2>
        <p>La cuisine angolaise est un savoureux mélange d’influences africaines et portugaises. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Calulu.jpeg" alt="Calulu">
                <h3><a href="/Calulu">Calulu</a></h3>
                <p>Un ragoût de poisson séché ou frais, cuit avec des légumes et de l’huile de palme, servi avec du riz ou du funge.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Cachupa.jpeg" alt="Cachupa à l'angolaise">
                <h3><a href="/Cachupa">Cachupa à l'angolaise</a></h3>
                <p>Une variante angolaise de ce ragoût de maïs et de haricots, souvent enrichi de viande ou de poisson.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Funge.jpeg" alt="Funge de Milho">
                <h3><a href="/Funge">Funge de Milho</a></h3>
                <p>Un accompagnement typique de farine de maïs, parfait avec les ragoûts et les plats en sauce.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Muamba.jpeg" alt="Muamba de Galinha">
                <h3><a href="/Muamba">Muamba de Galinha</a></h3>
                <p>Un ragoût de poulet à base d’huile de palme, d’arachides et d’épices, accompagné de riz ou de funge.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Doce.jpeg" alt="Doce de Ginguba">
                <h3><a href="/Doce">Doce de Ginguba</a></h3>
                <p>Un dessert croquant et sucré à base de cacahuètes caramélisées.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Angola.blade.php ENDPATH**/ ?>