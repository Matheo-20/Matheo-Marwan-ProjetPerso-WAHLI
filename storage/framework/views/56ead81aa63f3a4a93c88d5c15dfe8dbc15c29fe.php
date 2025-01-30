<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Pakistan pour déguster de délicieux Seekh Kebabs, un plat incontournable de la cuisine pakistanaise.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster des Seekh Kebabs au Pakistan</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Seekh Kebabs au Pakistan</h1>
        <p>Venez savourer des Seekh Kebabs, un incontournable de la cuisine pakistanaise, dans les meilleurs restaurants du pays.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Seekh Kebabs : Des Brochettes de Viande Épicée à Ne Pas Manquer</h2>
        <p>Les Seekh Kebabs sont des brochettes de viande hachée, mélangée avec des épices, grillées à la perfection. Découvrez où les déguster au Pakistan :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seekh-kebab-house">Seekh Kebab House</a></h3>
                <p><span>Adresse :</span> 123 Main Street, Lahore</p>
                <p><span>Contact :</span> +92 42 1234 5678</p>
                <p>Seekh Kebab House est l'un des meilleurs endroits pour déguster des Seekh Kebabs parfumés et grillés à la perfection.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/karachi-seekh-kebabs">Karachi Seekh Kebabs</a></h3>
                <p><span>Adresse :</span> 56 Saddar Road, Karachi</p>
                <p><span>Contact :</span> +92 21 2345 6789</p>
                <p>Un lieu idéal pour savourer des Seekh Kebabs juteux accompagnés de sauces et de naan frais.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/tandoor-seekh">Tandoor Seekh Kebabs</a></h3>
                <p><span>Adresse :</span> 78 Gulberg, Lahore</p>
                <p><span>Contact :</span> +92 42 3456 7890</p>
                <p>Un restaurant réputé pour sa recette traditionnelle de Seekh Kebabs, préparée avec des épices authentiques.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seekh-kebab-tandoori">Seekh Kebab Tandoori</a></h3>
                <p><span>Adresse :</span> 12 M. A. Jinnah Road, Rawalpindi</p>
                <p><span>Contact :</span> +92 51 4567 8910</p>
                <p>Seekh Kebab Tandoori est une adresse incontournable pour les amateurs de brochettes épicées et tendres.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/seekh-kebab-king">Seekh Kebab King</a></h3>
                <p><span>Adresse :</span> 90 Ferozepur Road, Lahore</p>
                <p><span>Contact :</span> +92 42 5678 1234</p>
                <p>Seekh Kebab King propose des Seekh Kebabs excellents, cuits sur charbon de bois pour un goût unique.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Seekh.blade.php ENDPATH**/ ?>