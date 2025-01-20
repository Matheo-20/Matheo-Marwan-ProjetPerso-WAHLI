<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WAHLI - Connexion">
    <title>Se connecter - WAHLI</title>
    
    <link rel="stylesheet" href="{{ asset('Css/Con.css') }}">
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
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror

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
