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

if (isset($_GET['api']) && $_GET['api'] == 'fff0'){
    if (isset($_GET['genere'])){
        $tmpArray = [];
        foreach ($db as $chiave => $valore){
            if ($valore->genre == $_GET['genere'])
                array_push($tmpArray,$valore);

        }
        echo json_encode($tmpArray,JSON_PRETTY_PRINT);
    } else {
        $objDatabase = (object)$database;
        echo json_encode($objDatabase, JSON_PRETTY_PRINT);
    }

}
