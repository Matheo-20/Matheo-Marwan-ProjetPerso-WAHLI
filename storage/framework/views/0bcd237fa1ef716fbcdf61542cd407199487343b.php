<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires marocaines, préparées avec tradition et passion.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/specialites.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/pays.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités du Maroc</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités du Maroc</h1>
        <p>Découvrez le meilleur de la gastronomie marocaine</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers le Maroc</h2>
        <p>La cuisine marocaine est réputée pour ses épices riches, ses plats mijotés et ses influences méditerranéennes. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Couscous.jpeg" alt="Couscous">
                <h3><a href="/Couscous">Couscous</a></h3>
                <p>Un plat emblématique à base de semoule, accompagné de légumes et souvent de viande.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Tajine.jpeg" alt="Tagine">
                <h3><a href="/Tagine">Tajine</a></h3>
                <p>Un ragoût mijoté aux épices, cuit dans un plat en terre cuite, avec du poulet, de l'agneau ou des légumes.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Pastilla.jpeg" alt="Pastilla">
                <h3><a href="/Pastilla">Pastilla</a></h3>
                <p>Une tourte feuilletée sucrée-salée, farcie de poulet ou de pigeons, aux amandes et à la cannelle.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Harira.jpeg" alt="Harira">
                <h3><a href="/Harira">Harira</a></h3>
                <p>Une soupe riche en saveurs, à base de tomates, lentilles et pois chiches.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Chebakia.jpeg" alt="Chebakia">
                <h3><a href="/Chebakia">Chebakia</a></h3>
                <p>Une pâtisserie au miel et aux graines de sésame, délicieusement croquante et sucrée.</p>
            </div>
            <!-- Speciality 6 -->
            <div class="speciality">
                <img src="/Image/Seffa.jpeg" alt="Seffa">
                <h3><a href="/Seffa">Seffa</a></h3>
                <p>La seffa, plat marocain à base de semoule, est un couscous sucré à la cannelle et aux amandes. </p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Maroc.blade.php ENDPATH**/ ?>