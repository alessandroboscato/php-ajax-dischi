<?php
  include "db.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Php-ajax-dischi</title>
  <link rel="stylesheet" href="dist/app.css">
</head>
<body>
  <!-- header -->
  <header>
    <div class="container">
      <img src="img/logo.png" alt="logo spotify">
    </div>
  </header>
  <!--/header -->
  <!-- main -->
  <main>
    <div class="container">
      <?php foreach ($database as $cd) { ?>
        <div class="cd">
          <img src="<?php echo $cd['poster'] ?>" alt="poster cd">
          <h3><?php echo $cd['title'] ?></h3>
          <span><?php echo $cd['author'] ?></span>
          <span><?php echo $cd['year'] ?></span>
        </div>
    <?php } ?>
    </div>
  </main>
  <!--/main -->
</body>
</html>
