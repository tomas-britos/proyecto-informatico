<?php
function headerGlobal()
{
  echo '
      <header class="bg-dark p-3">
        <h1 class="color-blue ff-primary fs-30 text-center">
          Foro no oficial de Star Wars
        </h1>
        <h2 class="color-red ff-secondary fs-20 text-center mt-2">
          De fans para fans
        </h2>
      </header>
    ';
}

function navGlobal()
{
  $paginas = [
    'Historia y actualidad',
    'Tabla de personajes',
    'Quiero ser un Jedi',
    'Max Rebo'
  ];
  echo '
      <nav class="navGlobal color-blue-light bg-dark-light text-center p-2">
        <a class="mr-auto border-radius-1 color-blue-light fs-16 px-3 py-2 text-decoration-none" href="/trabajo_final/index.php">Inicio</a>
    ';
  foreach ($paginas as $index => $nombre) {
    $numeroPagina = $index + 1; // Para que empiece en 1 en lugar de 0
    $archivo = "/trabajo_final/paginas/pagina{$numeroPagina}.php";
    echo "<a class=\"border-radius-1 color-blue-light fs-16 px-3 py-2 text-decoration-none\" href=\"$archivo\">$nombre</a> ";
  }
  echo '
      </nav>
    ';
}


function footerGlobal()
{
  echo '
      <footer class="align-items-center bg-dark-light color-blue-light d-flex flex-wrap gap-3 justify-content-space-between px-4 py-3 text-center">
        <p>
          &copy; 2025 Tomás Britos. Todos los derechos reservados.
        </p>
        <div class="d-flex align-items-center justify-content-center gap-3">
          <p>Mis redes: </p>
          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/tomas-britos/" target="_blank" title="LinkedIn" style="display:inline-block; vertical-align:middle; margin-right:10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#0077b5" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm15.5 11.268h-3v-5.604c0-1.337-.026-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.563 2.841-1.563 3.039 0 3.6 2.001 3.6 4.601v5.595z"/>
            </svg>
          </a>
          <!-- GitHub -->
          <a href="https://github.com/tomas-britos" target="_blank" title="GitHub" style="display:inline-block; vertical-align:middle; margin-right:10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#181717" viewBox="0 0 24 24">
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.084-.729.084-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.305-5.466-1.334-5.466-5.931 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.301 1.23a11.52 11.52 0 0 1 3.003-.404c1.018.005 2.045.138 3.003.404 2.291-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.119 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.803 5.624-5.475 5.921.43.371.823 1.102.823 2.222 0 1.606-.014 2.898-.014 3.293 0 .322.216.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
            </svg>
          </a>
          <!-- Portfolio -->
          <a href="https://tomas-britos.github.io/Tomas-Britos__Portfolio-2025/" target="_blank" title="Portfolio" style="display:inline-block; vertical-align:middle;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#4a90e2" viewBox="0 0 24 24">
              <path d="M6 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.828A2 2 0 0 0 19.414 7.414l-4.828-4.828A2 2 0 0 0 13.172 2H6zm0 2h7v5a1 1 0 0 0 1 1h5v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4zm9 0.414L19.586 9H16a1 1 0 0 1-1-1V4.414z"/>
            </svg>
          </a>
        </div>
      </footer>
    ';
}

function asideGlobal()
{
  $novedades = [
    ['titulo' => 'Nueva serie: The Acolyte', 'texto' => 'Descubre los secretos de los Sith en la nueva serie de Disney+.'],
    ['titulo' => 'Anunciado Star Wars Outlaws 2', 'texto' => 'La continuación del juego de mundo abierto de Star Wars llegará en 2026.'],
    ['titulo' => 'Rumores de una nueva trilogía', 'texto' => 'Fuentes cercanas a Lucasfilm hablan de una nueva saga cinematográfica.'],
  ];

  echo '
      <aside class="bg-dark-light-low-opacity d-flex flex-column gap-3 p-3">
        <h3 class="color-blue-light">Novedades</h3>
    ';
  // Dinamizar las novedades y sanear textos
  foreach ($novedades as $novedad) {
    echo '
        <div class="bg-light-low-opacity border-glow-blue border-radius-1 p-2 color-white">
          <h4 class="color-blue-medium">' . htmlspecialchars($novedad['titulo']) . '</h4>
          <p>' . htmlspecialchars($novedad['texto']) . '</p>
        </div>
      ';
  }

  echo '</aside>';
}

function aboutProjectSection()
{
  $parrafosAbout = [
    ['parrafo' => ' Este proyecto está centrado en simular una web de foro de Star Wars. Toda su estética está inspirado en posters,merchandising e ilustraciones de la epoca dorada de Star Wars.'],
    ['parrafo' => 'La idea central sería que los usuarios pudieran crear sus posteos, puntarlos y comentarlos, con una funcionalidad a Taringa o Reddit.El mundo de Star Wars es tan amplio, apasionante y vivo que da pie a libres interpretaciones y cada debate revive el fuego de los fanaticos.'],
    ['parrafo' => 'Por eso, este sitio sería el lugar donde esos debates sean dados y guardados, porque en un tiempo donde todo es efímero y volátil, es bueno tener un lugar donde volver, una resistencia.'],
  ];


  echo '
      <section class="bg-dark-light-low-opacity border-glow-blue border-radius-1 color-yellow d-flex flex-column gap-3 line-height-1-3 m-auto mw-700 my-6 p-3 py-4 w-90">
      <h2 class="text-center color-blue-light pb-2">
        Hace mucho tiempo en una web muy, muy lejana...
      </h2>
    ';

  foreach ($parrafosAbout as $parrafoAbout) {
    echo '
        <p class="fs-20 fw-600">' . htmlspecialchars($parrafoAbout['parrafo']) . '</p>
      ';
  }

  echo '
      </section>
    ';
}

function goalsProjectSection()
{
  $goalsProjectSectionTexts = [
    ['text-list-red' => 'Crear un proyecto final de acuerdo con el trabajo pedido.'],
    ['text-list-red' => 'Aplicar los conocimientos adquiridos durante el año cursado.'],
    ['text-list-red' => 'Demostrar capacidad y manejo en tecnologias como html, php y css.'],
    ['text-list-red' => 'Entregar el proyecto en tiempo y forma.'],
    ['text-list-red' => 'Disfrutar el desarrollo y aprender cosas nuevas por el camino.'],
  ];

  echo '
      <section class="bg-dark-light-low-opacity border-glow-red border-radius-1 d-flex flex-column gap-3 line-height-1-3 m-auto mw-700 my-6 p-3 py-4 w-90 color-white">
        <h2 class="text-center color-red-dark pb-2">
          Objetivos de esta página web
        </h2>
        <div>
          <ul class="list-style-none">';
  foreach ($goalsProjectSectionTexts as $goalsProjectSectionText) {
    echo '
                <li class="align-items-center color-red d-flex fs-20 gap-2 pb-2">
                  <img style="max-width: 40px;" src="imagenes/index/darth-vader.svg">
                  ' . htmlspecialchars($goalsProjectSectionText['text-list-red']) . '
                </li>
              ';
  }
  echo '
          </ul>
        </div>
      </section>
      ';
}

function tablaDePersonajes()
{
  $personajes = [
    ['nombre' => 'Luke Skywalker', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Jedi / Alianza Rebelde', 'especie' => 'Humano', 'planeta_natal' => 'Tatooine', 'clase_bg' => 'bg-dark'],
    ['nombre' => 'Darth Vader / Anakin Skywalker', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Sith / Imperio Galáctico', 'especie' => 'Humano', 'planeta_natal' => 'Tatooine', 'clase_bg' => 'bg-dark-light'],
    ['nombre' => 'Princesa Leia Organa', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Alianza Rebelde / Resistencia', 'especie' => 'Humana', 'planeta_natal' => 'Alderaan', 'clase_bg' => 'bg-dark'],
    ['nombre' => 'Han Solo', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Alianza Rebelde', 'especie' => 'Humano', 'planeta_natal' => 'Corellia', 'clase_bg' => 'bg-dark-light'],
    ['nombre' => 'Obi-Wan Kenobi', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'Una Nueva Esperanza (1977)', 'bando' => 'Jedi / República Galáctica', 'especie' => 'Humano', 'planeta_natal' => 'Stewjon', 'clase_bg' => 'bg-dark'],
    ['nombre' => 'Yoda', 'primera_aparicion' => 'El Imperio Contraataca (1980)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Jedi / República Galáctica', 'especie' => 'Desconocida', 'planeta_natal' => 'Desconocido', 'clase_bg' => 'bg-dark-light'],
    ['nombre' => 'Chewbacca', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Alianza Rebelde / Resistencia', 'especie' => 'Wookiee', 'planeta_natal' => 'Kashyyyk', 'clase_bg' => 'bg-dark'],
    ['nombre' => 'R2-D2', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Alianza Rebelde / Resistencia', 'especie' => 'Droide Astromecánico', 'planeta_natal' => 'Naboo', 'clase_bg' => 'bg-dark-light'],
    ['nombre' => 'C-3PO', 'primera_aparicion' => 'Una Nueva Esperanza (1977)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Droide de Protocolo', 'especie' => 'Droide de Protocolo', 'planeta_natal' => 'Tatooine', 'clase_bg' => 'bg-dark'],
    ['nombre' => 'Lando Calrissian', 'primera_aparicion' => 'El Imperio Contraataca (1980)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Alianza Rebelde', 'especie' => 'Humano', 'planeta_natal' => 'Socorro', 'clase_bg' => 'bg-dark-light'],
    ['nombre' => 'Boba Fett', 'primera_aparicion' => 'El Imperio Contraataca (1980)', 'ultima_aparicion' => 'El Libro de Boba Fett (2021)', 'bando' => 'Cazarrecompensas', 'especie' => 'Humano (Clon)', 'planeta_natal' => 'Kamino', 'clase_bg' => 'bg-dark'],
    ['nombre' => 'Ahsoka Tano', 'primera_aparicion' => 'The Clone Wars (2008)', 'ultima_aparicion' => 'Ahsoka (2023)', 'bando' => 'Jedi / Alianza Rebelde', 'especie' => 'Togruta', 'planeta_natal' => 'Shili', 'clase_bg' => 'bg-dark-light'],
    ['nombre' => 'Emperador Palpatine / Darth Sidious', 'primera_aparicion' => 'El Imperio Contraataca (1980)', 'ultima_aparicion' => 'El Ascenso de Skywalker (2019)', 'bando' => 'Sith / Imperio Galáctico', 'especie' => 'Humano', 'planeta_natal' => 'Naboo', 'clase_bg' => 'bg-dark'],
  ];

  echo '
      <table class="color-white mx-auto my-4 w-100 border-collapse">
        <thead>
          <tr class="bg-dark-light">
            <th class="p-2 border-solid-grey text-center">Personaje</th>
            <th class="p-2 border-solid-grey text-center">Primera Aparición</th>
            <th class="p-2 border-solid-grey text-center">Última Aparición</th>
            <th class="p-2 border-solid-grey text-center">Bando</th>
            <th class="p-2 border-solid-grey text-center">Especie</th>
            <th class="p-2 border-solid-grey text-center">Planeta Natal</th>
          </tr>
        </thead>
        <tbody>';

  foreach ($personajes as $personaje) {
    echo '
          <tr class="' . htmlspecialchars($personaje['clase_bg']) . '">
            <td class="p-2 border-solid-grey text-center">' . htmlspecialchars($personaje['nombre']) . '</td>
            <td class="p-2 border-solid-grey text-center">' . htmlspecialchars($personaje['primera_aparicion']) . '</td>
            <td class="p-2 border-solid-grey text-center">' . htmlspecialchars($personaje['ultima_aparicion']) . '</td>
            <td class="p-2 border-solid-grey text-center">' . htmlspecialchars($personaje['bando']) . '</td>
            <td class="p-2 border-solid-grey text-center">' . htmlspecialchars($personaje['especie']) . '</td>
            <td class="p-2 border-solid-grey text-center">' . htmlspecialchars($personaje['planeta_natal']) . '</td>
          </tr>';
  }
  echo '
        </tbody>
      </table>';
}

function validarValor($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$interesesGlobal = [
    'sagas' => 'Sagas de películas',
    'personajes' => 'Personajes',
    'naves' => 'Naves y vehículos',
    'planetas' => 'Planetas y ubicaciones',
    'historia' => 'Historia y lore',
    'juegos' => 'Videojuegos',
    'libros' => 'Libros y cómics',
    'series' => 'Series de TV',
];

function generarOpcionesIntereses($intereses) {
  $html = '';
  foreach ($intereses as $valor => $texto) {
    $html .= '<option value="' . htmlspecialchars($valor) . '">' . htmlspecialchars($texto) . '</option>';
  }
  return $html;
}
