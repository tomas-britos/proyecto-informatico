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
      <h2 class="color-yellow fs-24 mb-4 text-center">Formulario de Contacto</h2>
      <form action="../php/recibe_contacto.php" method="post" class="form-container">
        <div class="form-group">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" id="nombre" name="nombre" required class="form-control" minlength="3" maxlength="30" tabindex="1">
        </div>

        <div class="form-group">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="apellido" id="apellido" name="apellido" required class="form-control" minlength="3" maxlength="30" tabindex="2">
        </div>

        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="email" required class="form-control" minlength="10" maxlength="50" tabindex="3">
        </div>

        <div class="form-group">
          <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
          <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" tabindex="4">
        </div>

        <div class="form-group">
          <label for="fecha_nacimiento" class="form-label">Comentario</label>
          <textarea name="comentario" class="form-control" id="" placeholder="Comentario" required tabindex="5"></textarea>
        </div>

        <div class="form-group">
          <label for="opciones" class="form-label">Intereses</label>
          <select id="opciones" name="opciones" class="form-control" tabindex="6">
            <?php
            echo generarOpcionesIntereses($interesesGlobal);
            ?>
          </select>
        </div>

        <div class="form-group mb-0">
          <p class="form-label">Selecciona una opción</p>
          <div class="d-flex gap-3">
            <div class="form-check">
              <input type="radio" id="radio1" name="radio_opcion" value="radio_opcion1" class="form-check-input" tabindex="7">
              <label for="radio1" class="form-check-label">Argentino</label>
            </div>
            <div class="form-check">
              <input type="radio" id="radio2" name="radio_opcion" value="radio_opcion2" class="form-check-input" tabindex="8">
              <label for="radio2" class="form-check-label">Extranjero</label>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-3 justify-content-end">
          <input type="reset" value="Resetear" class="btn btn-secondary mt-3 px-3" tabindex="10">
          <input type="submit" value="Enviar" class="btn btn-primary mt-3 px-3" tabindex="9">
        </div>
      </form>
    </section>
  </main>
  <?php
  footerGlobal();
  ?>
</body>