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

    <form method="get" action="index.php">
        <div class="mb-3">
            <label for="search" class="form-label">Recherche</label>
            <input type="search" class="form-control" id="search" name="search">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        Tu as cherché : <?php echo $_GET["search"] ?>
    </form>

    <?php require "./templates/footer.php" ?>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>