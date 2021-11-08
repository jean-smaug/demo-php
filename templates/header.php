<?php $uri = $_SERVER["REQUEST_URI"]; ?>

<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link <?php if($uri === "/index.php") echo "active";  ?>" aria-current="page">Accueil</a></li>
        <li class="nav-item"><a href="/login" class="nav-link <?= $uri === "/login.php" ? "active" : "";  ?>">Connexion</a></li>
    </ul>
</header>