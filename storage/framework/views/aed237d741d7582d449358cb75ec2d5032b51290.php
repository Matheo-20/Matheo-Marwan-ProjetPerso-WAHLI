<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Connexion">
    <title>Se connecter - WAHLI</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/Con.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>WAHLI - Connexion</h1>
        <p>Accédez à votre compte pour découvrir des recettes savoureuses</p>
    </header>

    <!-- Main content -->
    <div class="auth-container">
    
        <!-- Connexion Form -->
        <div class="auth-form">
            <h2>Se connecter</h2>
            <?php if( !empty($connexion_nok)): ?>
            <p>Connexion refusée.</P>
            <?php endif; ?>

            <form method="POST" action="connecter" >
                <?php echo e(csrf_field()); ?>

                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
                <label for="mdp">Mot de passe : </label>
                <input type="password" name="mdp" id="mdp">
                <input type="submit" value="Se connecter">
                <p>Pas encore de compte ? <a href="inscription">Inscrivez-vous ici</a></p>
             </form>

            <!-- Retour à l'accueil -->
            <div class="back-to-home">
                <a href="AccueilClient" class="button">Retour à l'accueil</a>
            </div>
        </div>

    </div>



</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/seConnecterClient.blade.php ENDPATH**/ ?>