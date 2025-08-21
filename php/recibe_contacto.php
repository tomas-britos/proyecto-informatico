<?php
include_once 'variables_globales.php';


ob_start();
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
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $errores = [];

                if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
                    $nombre = validarValor($_POST["nombre"]);
                    if (strlen($nombre) < 3 || strlen($nombre) > 30) {
                        $errores[] = "El nombre debe tener entre 3 y 30 caracteres.";
                    }
                } else {
                    $errores[] = "El nombre es obligatorio.";
                }


                if (isset($_POST["apellido"]) && !empty($_POST["apellido"])) {
                    $apellido = validarValor($_POST["apellido"]);
                    if (strlen($apellido) < 3 || strlen($apellido) > 30) {
                        $errores[] = "El apellido debe tener entre 3 y 30 caracteres.";
                    }
                } else {
                    $errores[] = "El apellido es obligatorio.";
                }


                if (isset($_POST["email"]) && !empty($_POST["email"])) {
                    $email = validarValor($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errores[] = "El formato del email no es válido.";
                    } elseif (strlen($email) < 10 || strlen($email) > 50) {
                        $errores[] = "El email debe tener entre 10 y 50 caracteres.";
                    }
                } else {
                    $errores[] = "El email es obligatorio.";
                }


                if (isset($_POST["fecha_nacimiento"]) && !empty($_POST["fecha_nacimiento"])) {
                    $fecha_nacimiento = validarValor($_POST["fecha_nacimiento"]);
                } else {
                    $errores[] = "La fecha de nacimiento es obligatoria.";
                }


                if (isset($_POST["comentario"]) && !empty($_POST["comentario"])) {
                    $comentario = validarValor($_POST["comentario"]);
                } else {
                    $errores[] = "El comentario es obligatorio.";
                }


                global $interesesGlobal;
                if (isset($_POST["opciones"]) && array_key_exists($_POST["opciones"], $interesesGlobal)) {
                    $opciones = validarValor($_POST["opciones"]);
                    $opciones_texto = $interesesGlobal[$opciones];
                } else {
                    $errores[] = "Debes seleccionar un interés.";
                }


                $radio_opciones_validas = ["radio_opcion1", "radio_opcion2"];
                $radio_labels = [
                    "radio_opcion1" => "Argentino",
                    "radio_opcion2" => "Extranjero"
                ];
                if (isset($_POST["radio_opcion"]) && in_array($_POST["radio_opcion"], $radio_opciones_validas)) {
                    $radio_opcion_valor = validarValor($_POST["radio_opcion"]);
                    $radio_opcion_texto = $radio_labels[$radio_opcion_valor];
                } else {
                    $errores[] = "Debes seleccionar una nacionalidad.";
                }

                if (empty($errores)) {
                    echo "<div class='bg-dark-light-low-opacity border-glow-green border-radius-2 color-white color-yellow d-flex flex-column gap-3 line-height-1-3 m-auto mw-700 my-6 p-3 py-4 w-90'>";
                    echo "<h2 class='text-center color-blue-light pb-2'>Datos Recibidos con éxito</h2>";
                    echo "<p>Nombre: " . $nombre . "</p>";
                    echo "<p>Apellido: " . $apellido . "</p>";
                    echo "<p>Email: " . $email . "</p>";
                    echo "<p>Fecha de Nacimiento: " . $fecha_nacimiento . "</p>";
                    echo "<p>Comentario: " . $comentario . "</p>";
                    echo "<p>Opción Seleccionada: " . $opciones_texto . "</p>";
                    echo "<p>Nacionalidad seleccionada: " . $radio_opcion_texto . "</p>";
                    echo "</div>";
                } else {
                    echo "<div class='bg-dark-light-low-opacity border-glow-green border-radius-2 color-white color-yellow d-flex flex-column gap-3 line-height-1-3 m-auto mw-700 my-6 p-3 py-4 w-90'>";
                    echo "<h2 class='text-center color-blue-light pb-2'>Errores en el formulario:</h2>";
                    echo "<ul>";
                    foreach ($errores as $error) {
                        echo "<li class='fs-20 ml-5'>" . $error . "</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                }
            } else {
                echo "No se recibieron datos del formulario.";
            }
            ?>
        </section>
    </main>
    <?php
    footerGlobal();
    ?>
</body>