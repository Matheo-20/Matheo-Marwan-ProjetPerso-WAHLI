<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux États-Unis pour savourer des BBQ Ribs parfaitement fumées et enrobées de sauce barbecue.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants Américains pour Déguster des BBQ Ribs</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent avec les autres pages */
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

        /* Section principale */
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

        /* Liste des restaurants */
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

        /* Footer */
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

    <!-- Header -->
    <header>
        <h1>Les 5 Meilleurs Restaurants Américains pour des BBQ Ribs</h1>
        <p>Découvrez des côtes levées tendres, fumées à la perfection et nappées de sauce barbecue.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Les BBQ Ribs : Une Icône de la Cuisine Américaine</h2>
        <p>Les côtes levées barbecue sont un incontournable de la cuisine américaine, particulièrement dans le Sud. Voici nos recommandations :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/franklin-bbq">Franklin Barbecue</a></h3>
                <p><span>Adresse :</span> 900 E 11th St, Austin, TX 78702</p>
                <p><span>Contact :</span> +1 512-653-1187</p>
                <p>Considéré comme une institution au Texas, Franklin Barbecue est célèbre pour ses BBQ Ribs fumées lentement au bois de chêne.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pappy-s-smokehouse">Pappy's Smokehouse</a></h3>
                <p><span>Adresse :</span> 3106 Olive St, St. Louis, MO 63103</p>
                <p><span>Contact :</span> +1 314-535-4340</p>
                <p>Un incontournable à St. Louis pour des côtes levées tendres et juteuses, accompagnées de sauces maison.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/hometown-bbq">Hometown Bar-B-Que</a></h3>
                <p><span>Adresse :</span> 454 Van Brunt St, Brooklyn, NY 11231</p>
                <p><span>Contact :</span> +1 347-294-4644</p>
                <p>Situé à Brooklyn, Hometown BBQ offre une expérience culinaire unique avec ses ribs au style texan et ses saveurs fumées intenses.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-shed-bbq">The Shed BBQ & Blues Joint</a></h3>
                <p><span>Adresse :</span> 7501 MS-57, Ocean Springs, MS 39565</p>
                <p><span>Contact :</span> +1 228-875-9590</p>
                <p>Ce restaurant du Mississippi combine musique live et BBQ Ribs savoureuses, marinées avec amour.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/central-bbq">Central BBQ</a></h3>
                <p><span>Adresse :</span> 2249 Central Ave, Memphis, TN 38104</p>
                <p><span>Contact :</span> +1 901-272-9377</p>
                <p>Central BBQ, à Memphis, est connu pour ses ribs cuites à basse température, offrant une saveur et une tendreté incomparables.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Barbecue.blade.php ENDPATH**/ ?>