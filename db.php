<?php

require './Models/Movies.php';
require './Models/Directors.php';


// first movie
$movie1Director = new Director("Christopher", "Nolan", "American");

$movie1 = new Movie("Oppenheimer", 2023, "'Oppenheimer' follows J. Robert Oppenheimer's pivotal role in the Manhattan Project, exploring his personal struggles, ethical dilemmas, and scientific brilliance amidst the race to develop the atomic bomb during World War II", "English", array("Biographic", "Dramatic", "Thriller", "Historical"));
$movie1->director = $movie1Director;



// second movie
$movie2Director = new Director("Naoko", "Yamada", "Japanese");

$movie2 = new Movie("A Silent Voice", 2016, "
'A Silent Voice' follows Shoya Ishida's journey of redemption as he seeks forgiveness from Shoko Nishimiya, a deaf girl he bullied in elementary school, addressing themes of empathy and reconciliation", "Japanese", array("Romantic", "Drama"));
$movie2->director = $movie2Director;


$movies = [
    $movie1,
    $movie2,
];
