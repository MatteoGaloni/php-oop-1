<?php
class Movie
{
    public $title;
    public $language;
    public $overview = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    public $category = [];
    public $actor;
    public $img = "https://www.kevingage.com/assets/clapboard.png";


    function __construct($_title, $_language, array $_category, Actor $_actor)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->category = $_category;
        $this->actor = $_actor;
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
