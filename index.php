<?php

    ob_start();

    // $uri = str_replace("?".$_SERVER["QUERY_STRING"], "", $_SERVER["REQUEST_URI"]);
    $uri = $_SERVER["PATH_INFO"];
    $method = $_SERVER["REQUEST_METHOD"];

    if($uri === "/wines") {
        require "./controllers/WineController.php";

        $wineController = new WineController();

        if($method === "GET") {
            $wineController->index();
        }

        if($method === "POST") {
            $wineController->new();
        }
    }
    else if($uri === null) {
        echo "Page d'accueil";
    } else {
      require "./pages".$uri.".php";
    }

$content = ob_get_clean();

require "./templates/base.php";