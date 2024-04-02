<?php

require 'db.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-1</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <h1 class="text-center display-4 p-4">MOVIES</h1>

        <ul>
            <?php
            foreach ($movies as $movie) {

                echo "
                <li class='list-unstyled'>
                  <h2 class='text-center mt-3'> " . $movie->title . " </h2>
                  <div class='text-center mb-5 mt-5'>
                      <iframe src='" . $movie->getTrailerUrl() . "' frameborder='0' allowfullscreen width='600' height='400'></iframe>
                  </div>
                  <p class='px-5 pb-5 pt-3 mb-5 rounded-5'>" . $movie->getFullMovie() . "
                  " . $movie->director?->getDirector() . "</p>
                
                </li>";
            }
            ?>
        </ul>
    </div>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>