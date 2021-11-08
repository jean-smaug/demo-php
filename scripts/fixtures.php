<?php

$db = require __DIR__."/../config/database.php";

$stmt = $db->prepare("INSERT INTO wines(name, year) VALUES (:name, :year)");

for($i = 0; $i < 100; $i++) {
    $stmt->execute([
       ":name" => "Vin " . $i,
       ":year" => 2017
    ]);
}
