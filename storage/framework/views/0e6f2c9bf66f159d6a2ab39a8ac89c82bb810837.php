<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez-nous pour toute demande d'information ou de support.">
    <title>Contactez-nous - WAHLI</title>
    <style>
        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Logo */
        .logo {
            position: fixed;
            top: 10px;
            left: 10px;
            background-color: #3498db;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            line-height: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000; /* Assure que le logo est au premier plan */
        }

        header {
            background-color: #3498db; /* Bleu */
            color: white;
            text-align: center;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            font-size: 1rem;
            margin: 5px 0 0;
        }

        nav {
            background-color: #5dade2; /* Bleu clair */
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            transition: background-color 0.3s;
            padding: 8px 15px;
        }

        nav a:hover {
            background-color: #3498db;
            border-radius: 5px;
        }

        .contact-section {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            text-align: center;
            color: #3498db;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-form {
            display: grid;
            gap: 15px;
        }

        .contact-form label {
            font-size: 1rem;
            color: #333;
        }

        .contact-form input, .contact-form textarea {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #3498db;
        }

        .contact-form textarea {
            min-height: 100px;
            width: 100%;
            resize: none;
        }

        .contact-form button {
            background-color: #3498db;
            color: white;
            font-size: 1rem;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #2980b9;
        }

        .contact-details {
            margin-top: 20px;
            text-align: center;
            font-size: 1rem;
        }

        .contact-details a {
            color: #3498db;
            text-decoration: none;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #333; /* Bande noire */
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
        }

        footer a {
            color: #3498db;
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
        <h1>WAHLI</h1>
        <p>Voyagez à travers les saveurs du monde entier</p>
    </header>

    <!-- Logo -->
    <div class="logo">
        <span>W</span>
    </div>

    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="Contact">Contact</a>
    </nav>

    <!-- Section Contact -->
    <div class="contact-section">
        <h2>Contactez-nous</h2>
        <form class="contact-form" action="<?php echo e(route('contact.create')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required placeholder="Votre nom">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required placeholder="Votre email">
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="message" required placeholder="Votre message"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <!-- Informations supplémentaires -->
    <div class="contact-details">
        <p>Email : <a href="mailto:contact@wahli.com">contact@wahli.com</a></p>
        <p>Téléphone : <a href="tel:+330123456789">+33 6 10 10 64 29</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
        <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/Contact.blade.php ENDPATH**/ ?>