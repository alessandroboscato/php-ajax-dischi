<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajax-dischi</title>
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
    <div id="cds" class="container">

    </div>
  </main>
  <!--/main -->
  <script type="text/javascript" src="dist/app.js"></script>
  <script id="entry-template" type="text/x-handlebars-template">
    <div class="cd">
      <img src="{{poster}}" alt="poster cd">
      <h3>{{title}}</h3>
      <span>{{author}}</span>
      <span>{{year}}</span>
    </div>
</script>
</body>
</html>
