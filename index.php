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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php foreach ($movies as $movie) {  ?>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $movie->img ?>" alt="Card image cap" />
                        <div class="card-body">
                            <h2 class="card-title"> <?php echo $movie->title ?></h2>
                            <p class="card-title"> <?php echo $movie->overview ?></p>
                            <h2> <?php $movie->getFlag() ?></h2>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>
</body>

</html>