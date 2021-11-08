<?php

$db = new PDO('mysql:host=localhost:8889;dbname=cours_php_g4', "root", "root");

$stmt = $db->prepare("INSERT INTO wines(name, year) VALUES (:name, :year)");

for($i = 0; $i < 100; $i++) {
    $stmt->execute([
       ":name" => "Vin " . $i,
       ":year" => 2017
    ]);
}
