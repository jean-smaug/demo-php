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
<body class="d-flex flex-column min-vh-100">
<div class="container">
    <?php require "./templates/header.php" ?>

    <?php
    $dbh = new PDO('mysql:host=localhost:8889;dbname=cours_php_g4', "root", "root");

    ?>

    <!-- Mon contenu -->
    <?php
        // $uri = str_replace("?".$_SERVER["QUERY_STRING"], "", $_SERVER["REQUEST_URI"]);
        $uri = $_SERVER["PATH_INFO"];

        if($uri === null) {
            echo "Page d'accueil";
        } else {
            require "./pages".$uri.".php";
        }
    ?>

    <?php require "./templates/footer.php" ?>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>