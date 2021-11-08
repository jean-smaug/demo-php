<?php $uri = $_SERVER["REQUEST_URI"]; ?>

<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link <?php if($uri === "/") echo "active";  ?>" aria-current="page">Accueil</a></li>
        <li class="nav-item"><a href="/login" class="nav-link <?= $uri === "/login" ? "active" : "";  ?>">Connexion</a></li>
        <li class="nav-item"><a href="/search" class="nav-link <?= $uri === "/search" ? "active" : "";  ?>">Recherche</a></li>
    </ul>
</header>