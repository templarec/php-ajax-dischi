<?php
$raw = file_get_contents("raw.json");
$database = json_decode($raw);
$db = [];
foreach ($database as $key => $disco) {
       array_push($db,$disco);
}
$database = $db;
