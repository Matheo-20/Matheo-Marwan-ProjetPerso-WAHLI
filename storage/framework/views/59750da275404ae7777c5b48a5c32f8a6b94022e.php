<!doctype html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/contact.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laisser un avis - WAHLI</title>
    </head>
    <body>


<header>
    <h1>WAHLI</h1>
    <p>Voyagez à travers les saveurs du monde entier</p>
</header>


<div class="logo">
    <span>W</span>
</div>


<nav>
    <a href="AccueilClient">Accueil</a>
   
</nav>

<h3>Laisser un avis :</h3>

<?php if(Session::has('message')): ?>
    <p><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>

<form action="<?php echo e(route('evaluers.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <label for="plats">Choisissez un plat :</label>
    <select name="plat_id" id="plats" required>
        <option value="">-- Sélectionner un plat --</option>
        <?php $__currentLoopData = $plats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($plat->id); ?>"><?php echo e($plat->nom); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

  
    <label for="commentaire">Votre avis :</label><br>
    <textarea name="commentaire" id="commentaire" rows="4" required></textarea><br>

    <label for="note">Note (1 à 5) :</label>
    <select name="note" id="note">
        <option value="">-- Choisir une note --</option>
        <?php for($i = 1; $i <= 5; $i++): ?>
            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
        <?php endfor; ?>
    </select><br>

    

    <button type="submit">Envoyer</button>
</form>






<div class="contact-details">
    <p>Email : <a href="mailto:contact@wahli.com">contact@wahli.com</a></p>
    <p>Téléphone : <a href="tel:+330123456789">+33 6 10 10 64 29</a></p>
</div>


<footer>
    <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
</footer>

</body>
</html><?php /**PATH /var/www/html/WAHLI/resources/views/LaisserAvis.blade.php ENDPATH**/ ?>