<?php
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css">
  <title>Dischi</title>
</head>
<body>
  <header>
    <div class="container">
      <img src="img/1280px-Spotify_logo_with_text.svg.png" alt="spotify">
    </div>
  </header>
  <main>
    <div class="container">
      <?php foreach ($Albums as $cd) {?>
        <div class="disc">
          <img src="<?= $cd['poster'] ?>" alt="<?= $cd['title'] ?>">
          <h4><?= $cd['title'] ?></h4>
          <h5><?= $cd['author'] ?></h5>
          <h5><?= $cd['year'] ?></h5>
        </div>
      <?php }?>
    </div>
  </main>
</body>
</html>
