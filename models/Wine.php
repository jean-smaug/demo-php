<?php

class Wine
{
    private $db;

    public function __construct()
    {
        $this->db = require __DIR__."/../config/database.php";
    }

    public function findAll() {
        $result = $this->db->query("SELECT * FROM wines");

        return $result->fetchAll();
    }

    public function create($name, $year) {
        $stmt = $this->db->prepare("INSERT INTO wines(name, year) VALUES (:name, :year)");

        $stmt->execute([
            ":name" => $name,
            ":year" => $year
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM wines WHERE id = :id");

        $stmt->execute([
            ":id" => $id,
        ]);
    }
}