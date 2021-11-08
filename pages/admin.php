<?php

    // var_dump($_POST); --> debug

    if($_POST["username"] === "maxime" && $_POST["password"] === "blanc") {
        echo "Bienvenue dans l'admin";
    } else {
        echo "Accès refusé";
    }