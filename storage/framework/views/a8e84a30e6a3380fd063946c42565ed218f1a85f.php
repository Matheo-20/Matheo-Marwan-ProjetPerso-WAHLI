<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Inde pour savourer du Gulab Jamun, un délicieux dessert indien sucré et parfumé.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster du Gulab Jamun en Inde</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster du Gulab Jamun en Inde</h1>
        <p>Venez savourer du Gulab Jamun, un dessert traditionnel sucré et parfumé, dans les meilleurs restaurants de l'Inde.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Gulab Jamun : Un Dessert Indien Sucré et Délicieux</h2>
        <p>Le Gulab Jamun est un dessert populaire en Inde, composé de boules de lait frites, trempées dans un sirop de sucre aromatisé à la rose ou à la cardamome. Découvrez où vous pouvez en déguster les meilleures versions :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/gulab-jamun-house">Gulab Jamun House</a></h3>
                <p><span>Adresse :</span> 123 Connaught Place, New Delhi</p>
                <p><span>Contact :</span> +91 11 2345 6789</p>
                <p>Gulab Jamun House est célèbre pour son Gulab Jamun maison, servi chaud avec un sirop parfumé aux épices.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/sweet-delight">Sweet Delight</a></h3>
                <p><span>Adresse :</span> 56 MG Road, Mumbai</p>
                <p><span>Contact :</span> +91 22 3456 7890</p>
                <p>Sweet Delight propose une version innovante du Gulab Jamun, avec des touches modernes tout en préservant la recette traditionnelle.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/mithaiwala">Mithaiwala</a></h3>
                <p><span>Adresse :</span> 78 Chandra Nagar, Kolkata</p>
                <p><span>Contact :</span> +91 33 4567 8901</p>
                <p>Mithaiwala est une institution dans la ville pour les douceurs, avec des Gulab Jamuns fondants et délicieusement parfumés.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/ravi-sweets">Ravi Sweets</a></h3>
                <p><span>Adresse :</span> 90 Banjara Hills, Hyderabad</p>
                <p><span>Contact :</span> +91 40 5678 1234</p>
                <p>Ravi Sweets est réputé pour ses desserts authentiques, dont le Gulab Jamun, qui est toujours chaud et parfaitement sucré.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/gulab-sweets">Gulab Sweets</a></h3>
                <p><span>Adresse :</span> 120 Park Street, Chennai</p>
                <p><span>Contact :</span> +91 44 6789 1234</p>
                <p>Gulab Sweets est un lieu incontournable pour déguster des Gulab Jamuns, accompagnés d'une délicieuse crème de lait.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Gulab.blade.php ENDPATH**/ ?>