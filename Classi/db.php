<?php
class Movie
{
    public $title;
    public $language;
    public $overview;
    public $category = [];


    function __construct($_title, $_language, array $_category)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->category = $_category;
    }

    public function getFlag()
    {
        if ($this->language == "EN") {
            echo "The movie language is English";
        } else {

            echo "Sorry the movie is not in English";
        }
    }
}
