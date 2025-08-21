<?php
@include_once '../php/variables_globales.php';
?>

<head>
  <link rel="stylesheet" href="../css/all.css">
</head>

<body>
  <?php
  headerGlobal();
  navGlobal();
  ?>
  <main style="min-height: 78.5dvh;" class="d-grid gtc-20-1fr">
    <?php
    asideGlobal();
    ?>
    <section class="p-4">
      <h2 class="color-yellow fs-24 mb-4 text-center">Personajes Principales de Star Wars</h2>
      <?php
      tablaDePersonajes();
      ?>
    </section>
  </main>
  <?php
  footerGlobal();
  ?>
</body>