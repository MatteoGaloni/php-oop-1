<?php
include './Models/movie.php';
include './Models/actor.php';

$blackMirror = new Movie("Black-Mirror", "EN", ["Science fiction, Dystopia, Anthology Speculative fiction"], new Actor("Josh", "Hartnett", "Non Protagonista"));
$leFateIgnoranti = new Movie("Le fate Ignoranti", "IT", ["Commedia", "Drammatico"], new Actor("Stefano", "Accorsi", "Protagonista"));

$movies = [$blackMirror, $leFateIgnoranti];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP-OOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $blackMirror->img ?>" alt="Card image cap" />
                    <div class="card-body">
                        <h2 class="card-title"> <?php echo $blackMirror->title ?></h2>
                        <p class="card-title"> <?php echo $blackMirror->overview ?></p>
                        <h2> <?php $blackMirror->getFlag() ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $leFateIgnoranti->img ?>" alt="Card image cap" />
                    <div class="card-body">
                        <h2 class="card-title"> <?php echo $leFateIgnoranti->title ?></h2>
                        <p class="card-title"> <?php echo $leFateIgnoranti->overview ?></p>
                        <h2> <?php $leFateIgnoranti->getFlag() ?></h2>
                    </div>
                </div>
            </div>
            <?php foreach ($movies as $key => $value) {
                var_dump($value);
            }
            ?>
        </div>
    </div>
</body>

</html>