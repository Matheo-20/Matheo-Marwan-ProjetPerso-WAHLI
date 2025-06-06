<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Inscription">
    <title>S'inscrire - WAHLI</title>
    
    <link rel="stylesheet" href="{{ asset('Css/Con.css') }}">
</head>
<body>

    
    <header>
        <h1>WAHLI - Inscription</h1>
        <p>Créez votre compte pour accéder à toutes nos recettes</p>
    </header>

   
    <div class="auth-container">

        <!-- Inscription Form -->
<div class="auth-form">
    <h2>S'inscrire</h2>
    <form class="Client-form" action="{{ route('Client.create') }}" method="POST">
        @csrf

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" value="{{ old('nom') }}" required autofocus>
        @error('nom')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" value="{{ old('prenom') }}" required>
        @error('prenom')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Entrez votre email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" placeholder="Créez un mot de passe" required>
        @error('mdp')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmez votre mot de passe" required>

        <button type="submit">S'inscrire</button>

        <p>Déjà un compte ? <a href="seConnecterClient">Connectez-vous ici</a></p>
    </form>
</div>


            
            <div class="back-to-home">
                <a href="AccueilClient" class="button">Retour à l'accueil</a>
            </div>
        </div>

    </div>

    <footer>
        <p>&copy; 2025 WAHLI - Tous droits réservés</p>
    </footer>

</body>
</html>
