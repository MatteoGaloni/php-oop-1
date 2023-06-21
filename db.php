<?php
include './Models/movie.php';
include './Models/actor.php';

$blackMirror = new Movie("Black-Mirror", "EN", ["Science fiction, Dystopia, Anthology Speculative fiction"], new Actor("Josh", "Hartnett", "Non Protagonista"));
$leFateIgnoranti = new Movie("Le fate Ignoranti", "IT", ["Commedia", "Drammatico", "Romantico", "Italiano"], new Actor("Stefano", "Accorsi", "Protagonista"));

$blackMirror->img = "https://upload.wikimedia.org/wikipedia/en/2/24/BlackMirrorTitleCard.jpg";
$leFateIgnoranti->img = "https://static2.iodonna.it/wp-content/uploads/2022/04/le-fate-ignoranti-ozpetek-poster-scaled.jpg";
$movies = [$blackMirror, $leFateIgnoranti];
