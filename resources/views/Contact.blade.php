<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez-nous pour toute demande d'information ou de support.">
    <link rel="stylesheet" href="{{ asset('Css/contact.css') }}">
    <title>Contactez-nous - WAHLI</title>
    <style>
        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
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

        /* Navigation */
        nav {
            background-color: #5dade2; /* Bleu clair */
            text-align: center;
            padding: 15px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 15px 25px;
            margin: 0 20px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #3498db; /* Bleu */
            border-radius: 5px;
        }

        /* Section contact */
        .contact-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            text-align: center;
            color: #3498db;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form label {
            font-size: 18px;
            color: #333;
        }

        .contact-form input, .contact-form textarea {
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #3498db;
        }

        .contact-form button {
            background-color: #3498db;
            color: white;
            font-size: 18px;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #2980b9;
        }

        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }

        .contact-info div {
            flex: 1;
            padding: 10px;
        }

        .contact-info h3 {
            color: #3498db;
            font-size: 24px;
        }

        .contact-info p {
            font-size: 16px;
            color: #666;
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
            color: #3498db;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-info {
                flex-direction: column;
                align-items: center;
            }

            .contact-info div {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>WAHLI</h1>
        <p>Voyagez à travers les saveurs du monde entier</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="AccueilClient">Accueil</a>
        <a href="ListePlat">Nos Spécialités</a>
        <a href="#">Contact</a>
    </nav>

    <!-- Section Contact -->
    <div class="contact-section">
        <h2>Contactez-nous</h2>

        <!-- Formulaire de contact -->
        <form action="" method="POST" class="contact-form">
            @csrf
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
                <textarea id="message" name="message" rows="6" required placeholder="Votre message"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>

        <!-- Informations de contact -->
        <div class="contact-info">
            <div>
                <h3>Adresse</h3>
                <p>12 Rue des Wahman, Montreuil, France</p>
            </div>
            <div>
                <h3>Téléphone</h3>
                <p>+33 6 10 10 64 29</p>
            </div>
            <div>
                <h3>Email</h3>
                <p>contact@wahli.com</p>
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
