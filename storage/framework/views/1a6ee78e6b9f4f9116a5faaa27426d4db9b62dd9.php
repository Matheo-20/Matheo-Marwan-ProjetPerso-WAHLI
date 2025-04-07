<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Argentine pour savourer l'Asado, le célèbre barbecue argentin.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants pour Déguster l'Asado en Argentine</title>
    <style>
        /* Style global */
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
        <h1>Les 5 Meilleurs Restaurants pour Déguster l'Asado en Argentine</h1>
        <p>Découvrez la tradition argentine du barbecue, où la viande est un véritable art culinaire.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Le Plat National de l'Argentine</h2>
        <p>L'Asado, véritable symbole de convivialité et de savoir-faire argentin, est un incontournable pour les amateurs de viande grillée. Voici où le déguster :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-cabra-asador">La Cabra Asador</a></h3>
                <p><span>Adresse :</span> Av. Corrientes 3500, 1193 Buenos Aires, Argentine</p>
                <p><span>Contact :</span> +54 11 4865-2200</p>
                <p>Un classique de Buenos Aires, ce restaurant est réputé pour son Asado cuit à la perfection.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-parrillon">El Parrillón</a></h3>
                <p><span>Adresse :</span> Calle Mendoza 123, 5500 Mendoza, Argentine</p>
                <p><span>Contact :</span> +54 261 429-3333</p>
                <p>Situé au cœur des vignobles, El Parrillón propose un Asado accompagné des meilleurs vins de la région.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/asador-pampeano">Asador Pampeano</a></h3>
                <p><span>Adresse :</span> Ruta 1, 6300 Santa Rosa, Argentine</p>
                <p><span>Contact :</span> +54 2954 456-789</p>
                <p>Ce restaurant vous offre une expérience authentique de l'Asado dans un cadre rustique et chaleureux.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-parrilla-gaucha">La Parrilla Gaucha</a></h3>
                <p><span>Adresse :</span> Av. Belgrano 950, 4200 Santiago del Estero, Argentine</p>
                <p><span>Contact :</span> +54 385 421-9000</p>
                <p>Avec son ambiance conviviale et ses portions généreuses, c'est une adresse incontournable pour les amateurs de barbecue.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/el-fogon-criollo">El Fogón Criollo</a></h3>
                <p><span>Adresse :</span> Av. Sarmiento 555, 4000 Tucumán, Argentine</p>
                <p><span>Contact :</span> +54 381 423-5678</p>
                <p>Un lieu traditionnel où l'Asado est préparé selon les techniques ancestrales des gauchos argentins.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Asado.blade.php ENDPATH**/ ?>