<body>
        <h1>Espace personnel<h1>
            <h2><?php echo e(Session::get('clients') ->nom); ?></h2>
            <h3><?php echo e(Session::get('clients') ->email); ?></h3>
            <a href="AccueilClient">Accueil</a>
</body><?php /**PATH /var/www/html/WAHLI/resources/views/vue-espace-perso.blade.php ENDPATH**/ ?>