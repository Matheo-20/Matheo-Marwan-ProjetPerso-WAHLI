<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants aux États-Unis pour déguster un Clam Chowder, la célèbre soupe de palourdes.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants Américains pour du Clam Chowder</title>
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
        <h1>Les 5 Meilleurs Restaurants Américains pour du Clam Chowder</h1>
        <p>Dégustez le célèbre Clam Chowder, une soupe de palourdes typique de la côte Est des États-Unis.</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Clam Chowder : Une Spécialité Incontournable</h2>
        <p>Cette soupe crémeuse aux palourdes est un plat phare des régions côtières des États-Unis. Voici les meilleurs endroits où en savourer :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/union-oyster-house">Union Oyster House</a></h3>
                <p><span>Adresse :</span> 41 Union St, Boston, MA 02108</p>
                <p><span>Contact :</span> +1 617-227-2750</p>
                <p>Situé à Boston, ce restaurant historique propose un Clam Chowder dans la plus pure tradition de la Nouvelle-Angleterre.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/legals-sea-food">Legal Sea Foods</a></h3>
                <p><span>Adresse :</span> Plusieurs emplacements sur la côte Est</p>
                <p><span>Contact :</span> Vérifiez leur site officiel</p>
                <p>Une chaîne renommée pour son Clam Chowder servi frais avec des ingrédients de qualité.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/the-codmother">The Codmother</a></h3>
                <p><span>Adresse :</span> 2824 Jones St, San Francisco, CA 94133</p>
                <p><span>Contact :</span> +1 415-606-9349</p>
                <p>Un spot incontournable à San Francisco pour déguster un Clam Chowder savoureux dans un bol de pain.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/moonstone-beach-bar">Moonstone Beach Bar & Grill</a></h3>
                <p><span>Adresse :</span> 6550 Moonstone Beach Dr, Cambria, CA 93428</p>
                <p><span>Contact :</span> +1 805-927-3859</p>
                <p>Un restaurant en bord de mer offrant une vue magnifique et un délicieux Clam Chowder fait maison.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/iveys-seafood-market">Ivey's Seafood Market</a></h3>
                <p><span>Adresse :</span> 135 SW Bay Blvd, Newport, OR 97365</p>
                <p><span>Contact :</span> +1 541-265-5581</p>
                <p>Ce petit restaurant de l'Oregon est réputé pour sa soupe aux palourdes riche et onctueuse.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Clam.blade.php ENDPATH**/ ?>