<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires ivoiriennes, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de la Côte d'Ivoire</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de la Côte d'Ivoire</h1>
        <p>Découvrez le meilleur de la gastronomie ivoirienne</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers la Côte d'Ivoire</h2>
        <p>La cuisine ivoirienne est riche en saveurs et en traditions, influencée par les cultures locales et régionales. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Attiieke.jpeg" alt="Attiéké au Poisson">
                <h3><a href="/Attieke">Attiéké au Poisson</a></h3>
                <p>Le plat emblématique à base de semoule de manioc, accompagné de poisson grillé et d'une sauce épicée.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Sauce.jpeg" alt="Sauce Arachide">
                <h3><a href="/SauceArachide">Sauce Arachide</a></h3>
                <p>Une sauce riche et savoureuse à base d’arachides, souvent servie avec du riz ou du foutou.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Kedjenou.jpeg" alt="Kedjenou de Poulet">
                <h3><a href="/Kedjenou">Kedjenou de Poulet</a></h3>
                <p>Un poulet mijoté aux légumes et épices, cuit lentement pour un goût intense et parfumé.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Alloco.jpeg" alt="Alloco">
                <h3><a href="/Alloco">Alloco</a></h3>
                <p>Des bananes plantains frites, croustillantes et dorées, servies avec une sauce tomate épicée.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Foutou.jpeg" alt="Foutou">
                <h3><a href="/Foutou">Foutou</a></h3>
                <p>Une pâte moelleuse à base de banane plantain ou d’igname, accompagnée de différentes sauces.</p>
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
