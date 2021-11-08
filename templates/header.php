<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<?php $uri = $_SERVER["REQUEST_URI"]; ?>

<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link <?php if($uri === "/index.php") echo "active";  ?>" aria-current="page">Accueil</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link <?= $uri === "/login.php" ? "active" : "";  ?>">Connexion</a></li>
    </ul>
</header>