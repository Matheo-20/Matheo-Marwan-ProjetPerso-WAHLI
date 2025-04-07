<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les 5 meilleurs restaurants en France pour savourer un gratin dauphinois authentique, une spécialité culinaire emblématique de la région des Alpes.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/restaurants.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">
    <title>Top 5 Restaurants de Gratin Dauphinois en France</title>
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
        <h1>Les 5 Meilleurs Restaurants de Gratin Dauphinois en France</h1>
        <p>Découvrez l'authenticité du gratin dauphinois dans les meilleures adresses culinaires de France</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <h2>Un Plat Savoureux et Crémeux des Alpes</h2>
        <p>Le gratin dauphinois, une recette à base de pommes de terre, de crème et d'ail, est un classique de la cuisine française, particulièrement apprécié dans la région des Alpes. Voici les restaurants où vous pourrez savourer ce plat dans toute sa splendeur :</p>

        <!-- Liste des restaurants -->
        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/la-table-dauphinoise">La Table Dauphinoise</a></h3>
                <p><span>Adresse :</span> 45 Rue de la Détente, 38000 Grenoble</p>
                <p><span>Contact :</span> +33 4 76 50 33 22</p>
                <p>Un restaurant typiquement dauphinois où le gratin dauphinois est préparé selon la recette traditionnelle, avec une texture crémeuse et fondante.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-dauphin-savoureux">Le Dauphin Savoureux</a></h3>
                <p><span>Adresse :</span> 12 Avenue des Alpes, 69002 Lyon</p>
                <p><span>Contact :</span> +33 4 72 42 43 55</p>
                <p>Un véritable délice du terroir, ce restaurant sert un gratin dauphinois onctueux, parfait pour accompagner vos plats principaux.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/chez-marie-anne">Chez Marie-Anne</a></h3>
                <p><span>Adresse :</span> 26 Rue des Montagnes, 74200 Thonon-les-Bains</p>
                <p><span>Contact :</span> +33 4 50 72 22 11</p>
                <p>Un cadre chaleureux et authentique pour déguster un gratin dauphinois fondant, qui rappelle les recettes maison de la région.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-gratin-dauphinois">Le Gratin Dauphinois</a></h3>
                <p><span>Adresse :</span> 15 Place des Alpes, 38500 Voiron</p>
                <p><span>Contact :</span> +33 4 76 69 01 56</p>
                <p>Un restaurant dédié au gratin dauphinois, où ce plat est préparé à la perfection, avec une croûte dorée et une crème onctueuse.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/le-dauphinois-gourmand">Le Dauphinois Gourmand</a></h3>
                <p><span>Adresse :</span> 7 Rue des Savoie, 73000 Chambéry</p>
                <p><span>Contact :</span> +33 4 79 62 19 78</p>
                <p>Le gratin dauphinois de ce restaurant est reconnu pour sa richesse en saveurs et sa texture fondante. Un vrai régal.</p>
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
<?php /**PATH /var/www/html/WAHLI/resources/views/Gratin.blade.php ENDPATH**/ ?>