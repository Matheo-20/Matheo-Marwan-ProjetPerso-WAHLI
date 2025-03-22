<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures spécialités culinaires cubaines, préparées avec tradition et passion.">
    <link rel="stylesheet" href="{{ asset('Css/specialites.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/pays.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome pour les icônes -->
    <title>Top 5 Spécialités de Cuba</title>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleures Spécialités de Cuba</h1>
        <p>Découvrez le meilleur de la gastronomie cubaine</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Voyage Culinaire à Travers Cuba</h2>
        <p>La cuisine cubaine est un mélange de traditions espagnoles, africaines et caribéennes. Voici une sélection de 5 spécialités incontournables :</p>

        <!-- Grid for specialities -->
        <div class="specialities">
            <!-- Speciality 1 -->
            <div class="speciality">
                <img src="/Image/Ropa.jpeg" alt="Ropa Vieja">
                <h3><a href="/Ropa">Ropa Vieja</a></h3>
                <p>Un ragoût de bœuf effiloché cuit lentement avec des légumes et des épices, servi avec du riz.</p>
            </div>
            <!-- Speciality 2 -->
            <div class="speciality">
                <img src="/Image/Lechon.jpeg" alt="Lechón Asado">
                <h3><a href="/Lechon">Lechón Asado</a></h3>
                <p>Du porc rôti lentement, souvent servi lors des fêtes et célébrations cubaines.</p>
            </div>
            <!-- Speciality 3 -->
            <div class="speciality">
                <img src="/Image/Arroz.jpeg" alt="Arroz Congrí">
                <h3><a href="/Arroz">Arroz Congrí</a></h3>
                <p>Un mélange délicieux de riz et de haricots noirs, un accompagnement classique.</p>
            </div>
            <!-- Speciality 4 -->
            <div class="speciality">
                <img src="/Image/Tostones.jpeg" alt="Tostones">
                <h3><a href="/Tostones">Tostones</a></h3>
                <p>Des bananes plantains frites deux fois, croustillantes et dorées.</p>
            </div>
            <!-- Speciality 5 -->
            <div class="speciality">
                <img src="/Image/Flan.jpeg" alt="Flan Cubain">
                <h3><a href="/Flan">Flan Cubain</a></h3>
                <p>Un dessert crémeux à base d'œufs et de caramel, une touche sucrée parfaite pour terminer un repas.</p>
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
