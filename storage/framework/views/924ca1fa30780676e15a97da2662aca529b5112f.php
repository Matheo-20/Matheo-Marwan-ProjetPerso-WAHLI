
<header>
    <h1>WAHLI</h1>
    <p>Voyagez à travers les saveurs du monde entier</p>
    
    <link rel="stylesheet" href="<?php echo e(asset('Css/logo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/contact.css')); ?>">
</header>

<div class="logo">
    <span>W</span>
</div>


<nav>
    <a href="AccueilClient">Accueil</a>
    <a href="LaisserAvis">Laisser un avis</a>
    <a href="LesAvis">Les Avis</a>
</nav>


<body>



<link rel="stylesheet" href="<?php echo e(asset('Css/app.css')); ?>">





    <h1>Espace personnel</h1>

    <?php if(Session::has('clients') && Session::get('clients') !== null): ?>
        <h3><?php echo e(Session::get('clients')->nom); ?></h3>
        <h3><?php echo e(Session::get('clients')->prenom); ?></h3>
        <h3><?php echo e(Session::get('clients')->email); ?></h3>
        
        
    <?php else: ?>
        <h3>Client non connecté.</h3>
    <?php endif; ?>

    
</body>
<?php /**PATH /var/www/html/WAHLI/resources/views/vue-espace-perso.blade.php ENDPATH**/ ?>