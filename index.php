<?php
include './Classi/db.php';



$blackMirror = new Movie("Black-Mirror", "EN", ["Science fiction, Dystopia, Anthology Speculative fiction"]);
$leFateIgnoranti = new Movie("Le fate Ignoranti", "IT", [])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP-OOP</title>
</head>

<body>
    <div>
        <h1> <?php var_dump($blackMirror) ?> </h1>
        <h2> <?php $blackMirror->getFlag() ?></h2>
    </div>
    <div>
        <h1> <?php var_dump($leFateIgnoranti) ?> </h1>
        <h2> <?php $leFateIgnoranti->getFlag() ?></h2>
    </div>
</body>

</html>