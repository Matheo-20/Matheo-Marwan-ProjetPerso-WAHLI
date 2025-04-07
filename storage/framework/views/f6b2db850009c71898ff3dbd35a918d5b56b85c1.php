<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux Fidji pour déguster le Roti Fidjien, un pain plat traditionnel souvent accompagné de currys et de viandes.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster le Roti Fidjien aux Fidji</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu */
            color: white;
            padding: 30px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 48px;
        }

        header p {
            font-size: 18px;
            font-style: italic;
        }

        .main-content {
            padding: 40px 20px;
            text-align: center;
        }

        .main-content h2 {
            font-size: 36px;
            color: #3498db; /* Bleu */
        }

        .main-content p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }

        .restaurant-list {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .restaurant {
            background-color: #fff;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .restaurant:hover {
            transform: translateY(-5px);
        }

        .restaurant h3 {
            font-size: 24px;
            color: #3498db; /* Bleu */
            margin-bottom: 10px;
        }

        .restaurant h3 a {
            text-decoration: none;
            color: #3498db; /* Bleu */
            transition: color 0.3s ease;
        }

        .restaurant h3 a:hover {
            color: #1abc9c; /* Vert clair */
        }

        .restaurant p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }

        .restaurant p span {
            font-weight: bold;
            color: #333;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 16px;
        }

        footer a {
            color: #3498db; /* Bleu */
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Les Meilleurs Restaurants pour Déguster le Roti Fidjien aux Fidji</h1>
        <p>Découvrez où savourer le Roti Fidjien, un pain traditionnel fidjien servi avec des currys et des viandes.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Le Roti Fidjien : Un Pain Traditionnel Fidjien</h2>
        <p>Le Roti Fidjien est un pain plat populaire aux Fidji, souvent accompagné de currys épicés et de viandes. Découvrez où déguster cette spécialité fidjienne dans les meilleurs restaurants du pays.</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/roti-fidjien-speciality">Roti Fidjien Speciality</a></h3>
                <p><span>Adresse :</span> 101 Island Street, Suva</p>
                <p><span>Contact :</span> +679 123 4567</p>
                <p>Ce restaurant est réputé pour sa version authentique du Roti Fidjien, servi avec des currys épicés et des viandes de qualité.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/taste-of-fiji">Taste of Fiji</a></h3>
                <p><span>Adresse :</span> 78 Coral Coast, Nadi</p>
                <p><span>Contact :</span> +679 234 5678</p>
                <p>Taste of Fiji propose une expérience culinaire fidèle aux traditions fidjiennes, avec des Roti Fidjiens fraîchement cuits à chaque commande.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/traditional-roti">Traditional Roti</a></h3>
                <p><span>Adresse :</span> 32 Beach Road, Lautoka</p>
                <p><span>Contact :</span> +679 345 6789</p>
                <p>Spécialisé dans la cuisine fidjienne traditionnelle, Traditional Roti vous propose un délicieux pain roti accompagné d'une variété de plats locaux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/roti-king">Roti King</a></h3>
                <p><span>Adresse :</span> 56 Marina Bay, Suva</p>
                <p><span>Contact :</span> +679 456 7890</p>
                <p>Roti King est célèbre pour ses Roti Fidjiens faits maison, avec un mélange unique d'épices et de garnitures savoureuses.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/fiji-roti-house">Fiji Roti House</a></h3>
                <p><span>Adresse :</span> 89 Pacific Avenue, Nadi</p>
                <p><span>Contact :</span> +679 567 8901</p>
                <p>Fiji Roti House est un incontournable pour déguster le Roti Fidjien, accompagné de curry au poulet, légumes et autres délices locaux.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Roti.blade.php ENDPATH**/ ?>