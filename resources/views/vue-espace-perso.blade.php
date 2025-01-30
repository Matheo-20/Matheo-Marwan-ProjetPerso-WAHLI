<body>
        <h1>Espace personnel<h1>
            <h2>{{Session::get('clients') ->nom}}</h2>
            <h3>{{Session::get('clients') ->email}}</h3>
            <a href="AccueilClient">Accueil</a>
</body>