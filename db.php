<?php
include './Models/movie.php';
include './Models/actor.php';

$blackMirror = new Movie("Black-Mirror", "EN", ["Science fiction, Dystopia, Anthology Speculative fiction"], new Actor("Josh", "Hartnett", "Non Protagonista"));
$leFateIgnoranti = new Movie("Le fate Ignoranti", "IT", ["Commedia", "Drammatico", "Romantico", "Italiano"], new Actor("Stefano", "Accorsi", "Protagonista"));

$blackMirror->img = "https://upload.wikimedia.org/wikipedia/en/2/24/BlackMirrorTitleCard.jpg";
$leFateIgnoranti->img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR84CBsEsMhPZ3BN0mrjVHI_h_9KA--lEDesR1do640&s";

$movies = [$blackMirror, $leFateIgnoranti];
