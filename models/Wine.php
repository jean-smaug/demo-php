<?php

class Wine
{
    public function findAll() {
        $db = require __DIR__."/../config/database.php";

        $result = $db->query("SELECT * FROM wines");

        return $result->fetchAll();
    }

    public function create($name, $year) {
        $db = require __DIR__."/../config/database.php";

        $stmt = $db->prepare("INSERT INTO wines(name, year) VALUES (:name, :year)");

        $stmt->execute([
            ":name" => $name,
            ":year" => $year
        ]);
    }
}