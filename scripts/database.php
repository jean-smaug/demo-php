<?php

$db = require __DIR__."/../config/database.php";

$schemaUrl = __DIR__."/../database/schema.sql";

$query = file_get_contents($schemaUrl);

$db->query($query);