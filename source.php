<?php
require './dati.php';
$genere = [];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./master.css">
    <title>Get from DB</title>
</head>
<body>
<div id='root'>
    <nav>
        <select  name='album' id='selAlbum'>
            <option value='' selected>All</option>

            <?php

                foreach ($database as $key => $disco) {
                    if (!array_search($disco->genre,$genere)){
                        array_push($genere,$disco->genre);
                        echo "<option value='$disco->genre'>$disco->genre</option>";
                    }
                }
            ?>
            <
        </select>

    </nav>

<main>


<?php
    //ciclo array di oggetti e stampo
    foreach ($database as $key => $disco) {
            $title = $disco->title;
            $author = $disco->author;
            $year = $disco->year;
            $poster = $disco->poster;
            $genre = $disco->genre;
            echo "          
            <div class='card'>
            <img src='$poster' alt='$title'>
            <div class='overlay'>
                <p class='titolo'>$title</p>
                <p class='autore'>$author</p>
                <p class='anno'>$year</p>
                <p class='genere'>$genre</p>
            </div>
        </div>";
    }
?>
</main>
</div>
</body>
</html>
