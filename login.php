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

    <form method="post" action="admin.php">
        <div class="mb-3">
            <label for="username" class="form-label">Pseudo</label>
            <input type="text"  class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="container">
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>