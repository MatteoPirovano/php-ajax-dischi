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
  <div class="app">
    <header>
      <div class="container">
        <img :src="logo" alt="spotify">
      </div>
    </header>
    <main>
      <div class="container">
        <div v-for="album in albums"  class="disc">
          <img :src="album.poster" :alt="album.title">
          <h4>{{album.title}}</h4>
          <p>{{album.author}}</p>
          <p>{{album.year}}</p>
        </div>
      </div>
    </main>
  </div>
  <script src="js/app.js" charset="utf-8"></script>
</body>
</html>
