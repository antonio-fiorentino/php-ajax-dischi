<?php

// è il php dedicato al frontend (alla view)

// per la prima milestone
require_once __DIR__ . '/database/database.php';

// print_r($dischi);
?>
<!-- // qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
// e stampare copertina, titolo e così via, come da screenshot. -->


<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Album</title>
    <link rel="stylesheet" href="./dist/app.css">
  </head>
  <body>

    <header>
      <div class="nav-bar">
        <img src="http://www.resetfestival.it/wp-content/uploads/2017/07/spotify-logo-big-test-800x400.jpg" alt="">
      </div>
    </header>

    <div class="container">
      <?php foreach ($dischi as $disco) {?>
        <div class="album">
          <div class="poster">
            <img src="<?php echo $disco['poster']?>">
          </div>
          <div class="name-song">
            <h2><?php echo $disco['name']?></h2>
          </div>
          <div class="author">
            <h3><?php echo $disco['artist']?></h3>
          </div>
          <div class="year">
            <h4><?php echo $disco['year']?></h4>
          </div>
        </div>

      <?php } ?>

    </div>

  </body>
</html>
