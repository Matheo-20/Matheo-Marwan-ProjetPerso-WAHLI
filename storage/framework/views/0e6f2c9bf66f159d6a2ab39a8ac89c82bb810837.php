<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/contact.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez-nous pour toute demande d'information ou de support.">
    <title>Contactez-nous - WAHLI</title>
    
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