<?php

require __DIR__."/../models/Wine.php";

class WineController
{
    public function index() {
        $wineModel = new Wine();
        $wines = $wineModel->findAll();

        require __DIR__."/../pages/wines.php";
    }


    public function new() {
        $wineModel = new Wine();
        $wineModel->create($_POST["name"], $_POST["year"]);

        header("Location: /wines");
    }
}