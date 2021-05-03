<?php
//importo file JSON preso da postman
$raw = file_get_contents("raw.json");
//lo trasformo in oggetto php
$database = json_decode($raw);
$db = [];
//gli tolgo un livello
foreach ($database as $key => $disco) {
       array_push($db,$disco);
}
//lo risalvo in $database
$database = $db;
