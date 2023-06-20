<?php
include './Models/movie.php';
include './Models/actor.php';

$blackMirror = new Movie("Black-Mirror", "EN", ["Science fiction, Dystopia, Anthology Speculative fiction"], new Actor("Josh", "Hartnett", "Non Protagonista"));
$leFateIgnoranti = new Movie("Le fate Ignoranti", "IT", ["Commedia", "Drammatico"], new Actor("Stefano", "Accorsi", "Protagonista"));

$movies = [$blackMirror, $leFateIgnoranti];
