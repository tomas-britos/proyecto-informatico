<?php
@include_once 'php/variables_globales.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.css">
  <title>Trabajo Final - Star Wars</title>
</head>

<body>
  <?php
  headerGlobal();
  navGlobal();
  ?>
  <main>
    <section>
      <img class="hero-section__img" src="imagenes/index/hero_image.webp">
    </section>
    <?php
    aboutProjectSection();
    goalsProjectSection();
    ?>
  </main>
  <?php
  footerGlobal();
  ?>
</body>

</html>