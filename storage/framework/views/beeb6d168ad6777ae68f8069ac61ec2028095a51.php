<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confirmation de réception du message.">
    <link rel="stylesheet" href="<?php echo e(asset('Css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <title>Confirmation - WAHLI</title>
    <style>
        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centrage vertical */
            align-items: center; /* Centrage horizontal */
            min-height: 100vh; /* Prend toute la hauteur de la fenêtre */
        }

        /* Bande bleue en haut */
        .top-banner {
            background-color: #3498db;
            color: #fff;
            width: 100%;
            text-align: center;
            padding: 25px 0; /* Augmentation de la hauteur de la bannière */
            font-size: 35px;
            font-weight: bold;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: center; /* Centre le texte horizontalement */
            align-items: center; /* Centre le texte verticalement */
        }

        /* Logo */
        .logo {
            background-color: #3498db;
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            padding: 12px;
            border-radius: 50%;
            text-align: center;
            width: 60px;
            height: 60px;
            line-height: 60px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            margin-left: 20px; /* Ajoute de l'espace à gauche pour le logo */
            position: absolute; /* Position absolue pour que le logo soit en haut à gauche */
            left: 20px;
        }

        .logo:hover {
            background-color: #2980b9;
        }

        /* Section principale de la page */
        .confirmation-section {
            max-width: 1000px; /* Augmente la largeur du rectangle */
            margin: 80px auto 30px auto; /* Ajuste pour éviter que le contenu soit caché sous la bande bleue et le logo */
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%; /* Assure que la section occupe toute la largeur possible */
            box-sizing: border-box; /* Pour que le padding n'affecte pas la largeur */
        }

        h1 {
            font-size: 48px;
            color: #3498db;
            margin-bottom: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }

        p {
            font-size: 20px;
            color: #666;
            margin: 15px 0;
            max-width: 800px; /* Limite la largeur du texte pour une lecture agréable */
            margin-left: auto;
            margin-right: auto;
        }

        /* Bouton retour à l'accueil */
        .home-button {
            margin-top: 20px; /* Ajuste l'espace entre le texte et le bouton */
            padding: 16px 35px;
            background-color: #3498db;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: relative; /* Permet de le placer en dehors du rectangle */
            top: 30px; /* Remonter le bouton */
        }

        .home-button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .home-button:focus {
            outline: none;
        }

        /* Navigation */
        nav {
            margin-top: 40px;
        }

        nav a {
            margin: 0 20px;
            text-decoration: none;
            font-size: 20px;
            color: #3498db;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #2980b9;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
            margin-top: 50px;
            width: 100%;
            box-sizing: border-box;
        }

        footer a {
            color: #3498db;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 32px;
            }
            p {
                font-size: 18px;
            }
            .home-button {
                padding: 12px 25px;
                font-size: 16px;
                top: 20px; /* Ajuste la position pour mobile */
            }
            nav a {
                font-size: 16px;
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Bande bleue en haut -->
    <div class="top-banner">
        <!-- Logo -->
        <div class="logo">
            <span>W</span>
        </div>
        <!-- Texte centré -->
        <span>Confirmation de Réception</span>
    </div>

    <!-- Section Confirmation -->
    <div class="confirmation-section">
        <h1>Merci pour votre message !</h1>
        <p>Nous avons bien reçu votre message et vous répondrons dans les plus brefs délais. En attendant, vous pouvez revenir à l'accueil ou nous contacter à nouveau si nécessaire.</p>
    </div>

    <!-- Bouton retour à l'accueil, positionné hors de la section -->
    <a href="AccueilClient" class="home-button">Retour à l'accueil</a>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/confirmation.blade.php ENDPATH**/ ?>