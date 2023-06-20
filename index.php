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

    public function getFlag()
    {
        if ($this->language == "EN") {
            echo "The movie language is English";
        } else {

            echo "Sorry the movie is not in English";
        }
    }
    // public function getFlagByParam($lingua)
    // {
    //     if ($lingua == "EN") {
    //         echo "You passed the param EN, than the language is English";
    //     }
    // }
}

$blackMirror = new Movie("Black-Mirror", "EN");
$leFateIgnoranti = new Movie("Le fate Ignoranti", "IT")
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
        <h2> <?php $leFateIgnoranti->getFlag() ?></h2>
    </div>
</body>

</html>