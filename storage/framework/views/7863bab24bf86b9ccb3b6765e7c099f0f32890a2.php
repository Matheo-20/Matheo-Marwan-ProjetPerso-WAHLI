<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires italiennes, préparées avec tradition et passion.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/specialites.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/pays.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités Italiennes</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités Italiennes</h1>
        <p>Découvrez le meilleur de la gastronomie italienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers l'Italie</h2>
        <p>La cuisine italienne est connue pour sa richesse et sa diversité. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Margarita.jpeg" alt="Pizza Margherita">
                <h3><a href="Pizza">Pizza Margherita</a></h3>
                <p>Un classique mondial à base de pâte fine, de tomate, de mozzarella et de basilic, incarnant les couleurs du drapeau italien.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Carbonara.jpeg" alt="Pâtes Carbonara">
                <h3><a href="/Pates">Pâtes Carbonara</a></h3>
                <p>Des pâtes savoureuses préparées avec des œufs, du pecorino, du guanciale et une touche de poivre noir.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Risotto.jpeg" alt="Risotto">
                <h3><a href="/Risotto">Risotto</a></h3>
                <p>Un plat crémeux à base de riz, souvent cuisiné avec des champignons, du safran ou des fruits de mer.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Lasagne.jpeg" alt="Lasagnes">
                <h3><a href="/Lasagnes">Lasagnes</a></h3>
                <p>Des couches de pâtes alternant avec une garniture de sauce tomate, de viande hachée et de béchamel.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Tiramisu.jpeg" alt="Tiramisu">
                <h3><a href="/Tiramisu">Tiramisu</a></h3>
                <p>Un dessert emblématique composé de mascarpone, de café et de biscuits savoiardi saupoudrés de cacao.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Italie.blade.php ENDPATH**/ ?>