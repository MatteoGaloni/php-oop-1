<?php
class Movie
{
    public $title;
    public $language;
    public $overview;

    function __construct($_title, $_language)
    {
        $this->title = $_title;
        $this->language = $_language;
    }
}

$blackMirror = new Movie("Black-Mirror", "EN");
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
    </div>
</body>

</html>