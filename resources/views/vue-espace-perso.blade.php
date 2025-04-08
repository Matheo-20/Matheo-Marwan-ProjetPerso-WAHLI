
<header>
    <h1>WAHLI</h1>
    <p>Voyagez à travers les saveurs du monde entier</p>
    
    <link rel="stylesheet" href="{{ asset('Css/logo.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/contact.css') }}">
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



<link rel="stylesheet" href="{{ asset('Css/app.css') }}">





    <h1>Espace personnel</h1>

    @if(Session::has('clients') && Session::get('clients') !== null)
        <h3>{{ Session::get('clients')->nom }}</h3>
        <h3>{{ Session::get('clients')->prenom }}</h3>
        <h3>{{ Session::get('clients')->email }}</h3>
        
        
    @else
        <h3>Client non connecté.</h3>
    @endif

    
</body>
