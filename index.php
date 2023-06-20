<?php
include './db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP-OOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie) {  ?>
                <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $movie->img ?>" alt="Card image cap" />
                        <div class="card-body">
                            <h2 class="card-title"> <?php echo $movie->title ?></h2>
                            <p class="card-text"> <?php echo $movie->overview ?></p>
                            <h4>Starring</h4>
                            <span><?php echo $movie->actor->name ?></span>
                            <span> <?php echo $movie->actor->surname ?></span>
                            <h4>Role</h4>
                            <span><?php echo $movie->actor->role ?></span>
                            <h4>Genre</h4>
                            <?php foreach ($movie->category as $item) { ?>
                                <span>
                                    <?php echo $item ?>
                                </span>
                            <?php  } ?>
                            <h4> <?php $movie->getFlag() ?></h4>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</body>

</html>