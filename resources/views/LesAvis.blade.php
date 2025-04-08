<!doctype html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('Css/logo.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/contact.css') }}">
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
    <a href="Contact">Contact</a>

   
</nav>

<h3>Les avis des clients :</h3>

@foreach($avis as $a)
    <div class="avis">
        <p><strong>Client :</strong> {{ $a->client_nom }}</p>
        <p><strong>Plat :</strong> {{ $a->plat_nom }}</p>
        <p><strong>Note :</strong> {{ $a->note }} / 5</p>
        <p><strong>Commentaire :</strong> {{ $a->commentaire }}</p>
        <hr>
    </div>
@endforeach





<footer>
    <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    <p>Conçu avec passion. <a href="#">Mentions légales</a></p>
</footer>

</body>
</html>