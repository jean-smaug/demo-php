<?php

require __DIR__."/../models/Wine.php";

class WineController
{
    private $wineModel;

    public function __construct()
    {
        $this->wineModel = new Wine();
    }

    public function index() {
        $wines = $this->wineModel->findAll();

        require __DIR__."/../pages/wines.php";
    }

    public function new() {
        $this->wineModel->create($_POST["name"], $_POST["year"]);

        header("Location: /wines");
    }

    public function destroy () {
        $this->wineModel->delete($_POST["id"]);

        header("Location: /wines");
    }
}