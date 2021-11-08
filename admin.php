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
    <?php require "./templates/header.php" ?>

    <?php

        // var_dump($_POST); --> debug

        if($_POST["username"] === "maxime" && $_POST["password"] === "blanc") {
            echo "Bienvenue dans l'admin";
        } else {
            echo "Accès refusé";
        }

    ?>

    <div class="container">
        <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>