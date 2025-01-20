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
            <form action="seConnecterClient" method="POST">
                <?php echo csrf_field(); ?>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" value="<?php echo e(old('email')); ?>" required autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error-message"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error-message"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div>
                    <button type="submit">Se connecter</button>
                </div>

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