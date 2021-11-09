<?php

class Wine
{
    public function findAll() {
        $db = require __DIR__."/../config/database.php";

        $result = $db->query("SELECT * FROM wines");

        return $result->fetchAll();
    }
}