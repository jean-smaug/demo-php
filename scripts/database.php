<?php

$db = new PDO('mysql:host=localhost:8889;dbname=cours_php_g4', "root", "root");

$schemaUrl = __DIR__."/../database/schema.sql";

$query = file_get_contents($schemaUrl);

$db->query($query);