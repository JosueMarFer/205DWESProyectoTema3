<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 23</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 23</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Importa la libreria de validación
                require_once '../core/221120ValidacionFormularios.php';
//Define e inicializa la variable encargada de comprobar si los datos estan validados
                $entradaOK = true;
//Define e inicializa el array de errores
                $aErrores = [
                    'nombre' => '',
                    'edad' => '',
                    'fechaNacimiento' => ''
                ];
//Define e inicializa el array de respuestas
                $aRespuestas = [
                    'nombre' => '',
                    'edad' => '',
                    'fechaNacimiento' => ''
                ];
//Si se ha pulsado el boton de enviar valida los campos
//en caso de devolver algun error almacena el mismo en el array de errores (en su campo correspondiente)
                if (isset($_REQUEST['enviar'])) {
                    $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 300, 1, 1);
                    $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad'], 150, 1, 1);
                    $aErrores['fechaNacimiento'] = validacionFormularios::validarFecha($_REQUEST['fechaNacimiento'], '01/01/2022', '01/01/1900', 1);
//Recorre el array de errores y en caso de tener alguno la variable que comprueba la entrada pasa a ser false
//Limpia de $_REQUEST los campos que no han sido validados
                    foreach ($aErrores as $errorIndex => $errorValue) {
                        if (!is_null($errorValue)) {
                            $_REQUEST[$errorIndex] = '';
                            $entradaOK = false;
                        }
                    }
                } else {
                    $entradaOK = false;
                }
//Comprueba si la entrada es valida
//Si es valida recoje los datos en el array de respuestas
//Si no es valida vuelve a mostrar el formulario
                if ($entradaOK) {
                    $aRespuestas['nombre'] = $_REQUEST['nombre'];
                    $aRespuestas['edad'] = $_REQUEST['edad'];
                    $aRespuestas['fechaNacimiento'] = $_REQUEST['fechaNacimiento'];
                    echo 'Nombre: ' . $aRespuestas['nombre'] . '<br>';
                    echo 'Edad: ' . $aRespuestas['edad'] . ' años' . '<br>';
                    echo 'Fecha de nacimiento: ' . $aRespuestas['fechaNacimiento'];
                } else {
//Muestra el formulario
//Si el error no es nulo mustra el mensaje del mismo al lado de el campo correspondiente
                    ?>
                    <form name="ejercicio23" action="./<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset>
                            <legend>Datos basicos</legend>
                            <div class="formElement">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" />
                                <?php (!is_null($aErrores['nombre'])) ? print '<p style="color: red; display: inline;">' . $aErrores['nombre'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="edad">Edad:</label>
                                <input type="text" id="edad" name="edad" />
                                <?php (!is_null($aErrores['edad'])) ? print '<p style="color: red; display: inline;">' . $aErrores['edad'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="fechaNacimiento">Fecha de nacimiento:</label>
                                <input type="text" id="fechaNacimiento" name="fechaNacimiento" />
                                <?php (!is_null($aErrores['fechaNacimiento'])) ? print '<p style="color: red; display: inline;">' . $aErrores['fechaNacimiento'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <input type="submit" value="Enviar" name="enviar" />
                            </div>
                        </fieldset>
                    </form>
                    <?php
                }
                ?>
            </section>
            <div class="return">
                <a href="../indexProyectoTema3.php"><img src="../webroot/images/back.png" alt="Imagen back"></a>
            </div>
        </main>
        <footer>
            <div class="footerIcons">
                <a href="../doc/curriculum.pdf" target="_blank"><img src="../webroot/images/curriculum.png"
                                                                     alt="Imagen curriculum"></a>
                <a href="https://github.com/JosueMarFer/205DWESProyectoTema3" target="_blank"><img
                        src="../webroot/images/github.png" alt="Imagen github"></a>
            </div>
            <div class="home">
                <a href="../../index.html"><img src="../webroot/images/home.png" alt="Imagen home"></a>
                <p>Josué martínez Fernández</p>
            </div>
        </footer>
    </body>
</html>