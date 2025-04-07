<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants au Brésil pour déguster l'authentique Pão de Queijo, un délice à base de fromage.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Pão de Queijo au Brésil</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db; /* Bleu cohérent */
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
        <h1>Les 5 Meilleurs Restaurants de Pão de Queijo au Brésil</h1>
        <p>Goûtez à la douceur du fromage dans les meilleurs restaurants brésiliens</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Délice Brésilien Indémodable</h2>
        <p>Le Pão de Queijo, avec sa texture légère et son goût délicieux de fromage, est une spécialité incontournable du Brésil. Voici nos restaurants recommandés :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pao-de-queijo-dona-ana">Pão de Queijo Dona Ana</a></h3>
                <p><span>Adresse :</span> Rua dos Três Irmãos, 130, 30180-130 Belo Horizonte, Brésil</p>
                <p><span>Contact :</span> +55 31 3221-6969</p>
                <p>Un endroit incontournable pour déguster un Pão de Queijo authentique et tout droit sorti du four.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/cantinho-de-minas">Cantinho de Minas</a></h3>
                <p><span>Adresse :</span> Avenida Ipiranga, 701, 01039-001 São Paulo, Brésil</p>
                <p><span>Contact :</span> +55 11 3335-4433</p>
                <p>Les Pão de Queijo y sont fameux, préparés selon une recette familiale qui fait le bonheur de tous.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/queijaria-de-belo">Queijaria de Belo</a></h3>
                <p><span>Adresse :</span> Rua da Bahia, 1234, 30160-063 Belo Horizonte, Brésil</p>
                <p><span>Contact :</span> +55 31 2123-4567</p>
                <p>Un petit café parfait pour une pause goûter avec des Pão de Queijo faits maison à partir des meilleurs fromages du Brésil.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pao-queijo-beija-flor">Pão Queijo Beija-Flor</a></h3>
                <p><span>Adresse :</span> Rua Rio Branco, 234, 22250-300 Rio de Janeiro, Brésil</p>
                <p><span>Contact :</span> +55 21 2556-7890</p>
                <p>Un café charmant avec des Pão de Queijo à la fois traditionnels et créatifs, un régal pour tous.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/pao-queijo-sabor-minas">Pão Queijo Sabor Minas</a></h3>
                <p><span>Adresse :</span> Rua dos Fernandes, 520, 30640-130 Belo Horizonte, Brésil</p>
                <p><span>Contact :</span> +55 31 3336-1234</p>
                <p>Un établissement familial où vous pourrez déguster des Pão de Queijo classiques et d'autres spécialités du Minas Gerais.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Pao.blade.php ENDPATH**/ ?>