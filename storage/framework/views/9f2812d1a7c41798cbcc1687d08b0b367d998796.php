<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Inscription">
    <title>S'inscrire - WAHLI</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/Con.css')); ?>">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>WAHLI - Inscription</h1>
        <p>Créez votre compte pour accéder à toutes nos recettes</p>
    </header>

    <!-- Main content -->
    <div class="auth-container">

        <!-- Inscription Form -->
        <div class="auth-form">
            <h2>S'inscrire</h2>
            <form class="Client-form" action="<?php echo e(route('Client.create')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="nom">Nom </label>
                <input type="nom" name="nom" id="nom" placeholder="Entrez votre nom" value="<?php echo e(old('nom')); ?>" required autofocus>
                <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error-message"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
                <label for="prenom">Prenom </label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom" value="<?php echo e(old('prenom')); ?>" required autofocus>
                <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error-message"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" value="<?php echo e(old('email')); ?>" required>
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

                <label for="mdp">Mot de passe</label>
                <input type="mdp" name="mdp" id="password" placeholder="Créez un mot de passe" required>
                <?php $__errorArgs = ['mdp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error-message"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmez votre mot de passe" required>

                <button type="submit">S'inscrire</button>

                <p>Déjà un compte ? <a href="seConnecterClient">Connectez-vous ici</a></p>
            </form>

            <!-- Retour à l'accueil -->
            <div class="back-to-home">
                <a href="AccueilClient" class="button">Retour à l'accueil</a>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
<?php /**PATH /var/www/html/WAHLI/resources/views/inscription.blade.php ENDPATH**/ ?>