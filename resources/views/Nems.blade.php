<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleurs restaurants en Chine pour savourer les nems, une spécialité croustillante et savoureuse.">
    <link rel="stylesheet" href="{{ asset('Css/restaurants.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/plat.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/app.css') }}">
    <title>Top 5 Restaurants pour Déguster des Nems en Chine</title>
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
        <h1>Les Meilleurs Restaurants pour Déguster des Nems</h1>
        <p>Découvrez où savourer ces spécialités croustillantes et savoureuses</p>
    </header>

    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <div class="main-content">
        <h2>Un Classique Indémodable</h2>
        <p>Les nems, ces délicieuses bouchées croustillantes et fourrées, sont parfaits pour les amateurs de cuisine asiatique. Voici les meilleurs endroits où les déguster en Chine :</p>

        <div class="restaurant-list">
            <!-- Restaurant 1 -->
            <div class="restaurant">
                <h3><a href="/restaurant/crispy-delight">Crispy Delight</a></h3>
                <p><span>Adresse :</span> Dongzhimen, Pékin</p>
                <p><span>Contact :</span> +86 10 2345 6789</p>
                <p>Un restaurant réputé pour ses nems croustillants faits maison, accompagnés d'une sauce nuoc-mâm authentique.</p>
            </div>
            <!-- Restaurant 2 -->
            <div class="restaurant">
                <h3><a href="/restaurant/golden-roll">Golden Roll</a></h3>
                <p><span>Adresse :</span> Pudong, Shanghai</p>
                <p><span>Contact :</span> +86 21 9876 5432</p>
                <p>Spécialisé dans les nems traditionnels et innovants, Golden Roll est un incontournable pour les amateurs de croustillant.</p>
            </div>
            <!-- Restaurant 3 -->
            <div class="restaurant">
                <h3><a href="/restaurant/lotus-bites">Lotus Bites</a></h3>
                <p><span>Adresse :</span> Tianhe District, Guangzhou</p>
                <p><span>Contact :</span> +86 20 3456 7890</p>
                <p>Ce restaurant propose des nems garnis de porc, crevettes ou légumes, préparés avec soin.</p>
            </div>
            <!-- Restaurant 4 -->
            <div class="restaurant">
                <h3><a href="/restaurant/asian-treats">Asian Treats</a></h3>
                <p><span>Adresse :</span> West Lake, Hangzhou</p>
                <p><span>Contact :</span> +86 571 2345 6789</p>
                <p>Un lieu cosy où vous pourrez savourer des nems accompagnés de garnitures locales uniques.</p>
            </div>
            <!-- Restaurant 5 -->
            <div class="restaurant">
                <h3><a href="/restaurant/spring-crunch">Spring Crunch</a></h3>
                <p><span>Adresse :</span> Nanjing Road, Shanghai</p>
                <p><span>Contact :</span> +86 21 8765 4321</p>
                <p>Offrant une grande variété de nems, ce restaurant est parfait pour une expérience gourmande et authentique.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
