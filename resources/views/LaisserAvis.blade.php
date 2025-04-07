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
   
</nav>

<h3>Laisser un avis :</h3>

@if(Session::has('message'))
    <p>{{ Session::get('message') }}</p>
@endif

<form action="{{ route('evaluers.store') }}" method="POST">
    @csrf

    <label for="plats">Choisissez un plat :</label>
    <select name="plat_id" id="plats" required>
        <option value="">-- Sélectionner un plat --</option>
        @foreach ($plats as $plat)
            <option value="{{ $plat->id }}">{{ $plat->nom }}</option>
        @endforeach
    </select>

  
    <label for="commentaire">Votre avis :</label><br>
    <textarea name="commentaire" id="commentaire" rows="4" required></textarea><br>

    <label for="note">Note (1 à 5) :</label>
    <select name="note" id="note">
        <option value="">-- Choisir une note --</option>
        @for ($i = 1; $i <= 5; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
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
</html>