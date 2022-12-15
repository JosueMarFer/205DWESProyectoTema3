<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 24</title>
    </head>

    <body>
        <header>
            <h1>Tema 4</h1>
            <h2>Ejercicio 24</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Importa la libreria de validación      
                require_once '../core/221120ValidacionFormularios.php';
//Creación de una fecha actual
                $oFechaActual = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                $cadenaFechaActual = $oFechaActual->format('m/d/Y');
//Define e inicializa el array de errores
                $aErrores = [
                    'CodDepartamento' => '',
                    'DescDepartamento' => '',
                    'FechaCreacionDepartamento' => '',
                    'VolumenNegocio' => ''
                ];
//Define e inicializa el array de respuestas
                $aRespuestas = [
                    'CodDepartamento' => '',
                    'DescDepartamento' => '',
                    'FechaCreacionDepartamento' => '',
                    'VolumenNegocio' => ''
                ];
//Define e inicializa la variable encargada de comprobar si los datos estan validados
                $entradaOK = true;
//Si se ha pulsado el boton de enviar valida los campos
//en caso de devolver algun error almacena el mismo en el array de errores (en su campo correspondiente)
                if (isset($_REQUEST['enviar'])) {
                    $aErrores['CodDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['CodDepartamento'], 3, 3, 1);
                    $aErrores['DescDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['DescDepartamento'], 255, 1, 1);
                    $aErrores['FechaCreacionDepartamento'] = validacionFormularios::validarFecha($_REQUEST['FechaCreacionDepartamento'], $cadenaFechaActual, '01/01/1900', 0);
                    $aErrores['VolumenNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['VolumenNegocio'], PHP_FLOAT_MAX, 0, 1);
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
                    $aRespuestas['CodDepartamento'] = $_REQUEST['CodDepartamento'];
                    $aRespuestas['DescDepartamento'] = $_REQUEST['DescDepartamento'];
                    if (!is_null($_REQUEST['FechaCreacionDepartamento']) && !empty($_REQUEST['FechaCreacionDepartamento'])) {
                        $aRespuestas['FechaCreacionDepartamento'] = new DateTime($_REQUEST['FechaCreacionDepartamento']);
                    }
                    $aRespuestas['VolumenNegocio'] = $_REQUEST['VolumenNegocio'];
                    echo 'Codigo Departamento: ' . $aRespuestas['CodDepartamento'] . '<br>';
                    echo 'Descripcion de departamento: ' . $aRespuestas['DescDepartamento'] . '<br>';
                    if (!is_null($aRespuestas['FechaCreacionDepartamento']) && !empty($aRespuestas['FechaCreacionDepartamento'])) {
                        echo 'Fecha de creación de departamento: ' . $aRespuestas['FechaCreacionDepartamento']->format('d/m/Y') . '<br>';
                    }
                    echo 'Volumen de negocio: ' . ($aRespuestas['VolumenNegocio']);
                } else {
                    ?>
                    <form name="ejercicio03-1" action="./<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset>
                            <legend>Datos Departamento</legend>
                            <div class="formElement">
                                <label for="CodDepartamento">Codigo de departamento:</label>
                                <input type="text" id="CodDepartamento" name="CodDepartamento" class="obligatorio"
                                       value="<?php echo $_REQUEST['CodDepartamento'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['CodDepartamento'])) ? print '<p style="color: red; display: inline;">' . $aErrores['CodDepartamento'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="DescDepartamento">Descripcion de departamento:</label>
                                <input type="text" id="DescDepartamento" name="DescDepartamento" class="obligatorio"
                                       value="<?php echo $_REQUEST['DescDepartamento'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['DescDepartamento'])) ? print '<p style="color: red; display: inline;">' . $aErrores['DescDepartamento'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="FechaCreacionDepartamento">Fecha de creación del departamento (mes/dia/año):</label>
                                <input type="text" id="FechaCreacionDepartamento" name="FechaCreacionDepartamento" class="opcional"
                                       value="<?php echo $_REQUEST['FechaCreacionDepartamento'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['FechaCreacionDepartamento'])) ? print '<p style="color: red; display: inline;">' . $aErrores['FechaCreacionDepartamento'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="fechaBaja">Fecha de baja:</label>
                                <input type="text" id="fechaBaja" name="fechaBaja" class="bloqueado" disabled>
                            </div>
                            <div class="formElement">
                                <label for="VolumenNegocio">Volumen de negocio:</label>
                                <input type="text" id="VolumenNegocio" step="0.01" name="VolumenNegocio" class="obligatorio"
                                       value="<?php echo $_REQUEST['VolumenNegocio'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['VolumenNegocio'])) ? print '<p style="color: red; display: inline;">' . $aErrores['VolumenNegocio'] . '</p>' : ''; ?>
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
                <a href="https://github.com/JosueMarFer/205DWESProyectoTema4" target="_blank"><img
                        src="../webroot/images/github.png" alt="Imagen github"></a>
            </div>
            <div class="home">
                <a href="../../index.html"><img src="../webroot/images/home.png" alt="Imagen home"></a>
                <p>Josué martínez Fernández</p>
            </div>
        </footer>
    </body>
</html>