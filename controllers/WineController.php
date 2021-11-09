<?php

require __DIR__."/../models/Wine.php";

class WineController
{
    public function index() {
        $wineModel = new Wine();
        $wines = $wineModel->findAll();

        require __DIR__."/../pages/wines.php";
    }
}