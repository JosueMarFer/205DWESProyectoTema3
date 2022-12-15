<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 25</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 25</h2>
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
//Define e inicializa una variable con la fecha actual para poder usarla como valor maximo en la validación
                $fechaActual = new DateTime();
                $fechaActualString = $fechaActual->format('m/d/Y');
                $entradaOK = true;
//Define e inicializa el array de errores
                $aErrores = [
                    'alfabeticoobligatorio' => '',
                    'alfabeticoopcional' => '',
                    'alfanumericoobligatorio' => '',
                    'alfanumericoopcional' => '',
                    'enteroobligatorio' => '',
                    'enteroopcional' => '',
                    'floatobligatorio' => '',
                    'floatopcional' => '',
                    'fechaobligatorio' => '',
                    'fechaopcional' => ''
                ];
//Define e inicializa el array de respuestas
                $aRespuestas = [
                    'alfabeticoobligatorio' => '',
                    'alfabeticoopcional' => '',
                    'alfanumericoobligatorio' => '',
                    'alfanumericoopcional' => '',
                    'enteroobligatorio' => '',
                    'enteroopcional' => '',
                    'floatobligatorio' => '',
                    'floatopcional' => '',
                    'fechaobligatorio' => '',
                    'fechaopcional' => ''
                ];
//Si se ha pulsado el boton de enviar valida los campos
//en caso de devolver algun error almacena el mismo en el array de errores (en su campo correspondiente)
                if (isset($_REQUEST['enviar'])) {
                    $aErrores['alfabeticoobligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoobligatorio'], 300, 1, 1);
                    $aErrores['alfabeticoopcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoopcional'], 300, 1, 0);
                    $aErrores['alfanumericoobligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoobligatorio'], 300, 1, 1);
                    $aErrores['alfanumericoopcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoopcional'], 300, 1, 0);
                    $aErrores['enteroobligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['enteroobligatorio'], 150, 1, 1);
                    $aErrores['enteroopcional'] = validacionFormularios::comprobarEntero($_REQUEST['enteroopcional'], 150, 1, 0);
                    $aErrores['floatobligatorio'] = validacionFormularios::comprobarFloat($_REQUEST['floatobligatorio'], 150, 1, 1);
                    $aErrores['floatopcional'] = validacionFormularios::comprobarFloat($_REQUEST['floatopcional'], 150, 1, 0);
                    $aErrores['fechaobligatorio'] = validacionFormularios::validarfecha($_REQUEST['fechaobligatorio'], $fechaActualString, '01/01/1900', 1);
                    $aErrores['fechaopcional'] = validacionFormularios::validarfecha($_REQUEST['fechaopcional'], $fechaActualString, '01/01/1900', 0);
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
//La fecha se almacena como objeto DateTime y se muestra con formato dia/mes/año
                if ($entradaOK) {
                    $aRespuestas['alfabeticoobligatorio'] = $_REQUEST['alfabeticoobligatorio'];
                    $aRespuestas['alfabeticoopcional'] = $_REQUEST['alfabeticoopcional'];
                    $aRespuestas['alfanumericoobligatorio'] = $_REQUEST['alfanumericoobligatorio'];
                    $aRespuestas['alfanumericoopcional'] = $_REQUEST['alfanumericoopcional'];
                    $aRespuestas['enteroobligatorio'] = $_REQUEST['enteroobligatorio'];
                    $aRespuestas['enteroopcional'] = $_REQUEST['enteroopcional'];
                    $aRespuestas['floatobligatorio'] = $_REQUEST['floatobligatorio'];
                    $aRespuestas['floatopcional'] = $_REQUEST['floatopcional'];
                    $aRespuestas['fechaobligatorio'] = new DateTime($_REQUEST['fechaobligatorio']);
                    $aRespuestas['fechaopcional'] = new DateTime($_REQUEST['fechaopcional']);
                    echo 'alfabeticoobligatorio: ' . $aRespuestas['alfabeticoobligatorio'] . '<br>';
                    echo 'alfabeticoopcional: ' . $aRespuestas['alfabeticoopcional'] . '<br>';
                    echo 'alfanumericoobligatorio: ' . $aRespuestas['alfanumericoobligatorio'] . '<br>';
                    echo 'alfanumericoopcional: ' . $aRespuestas['alfanumericoopcional'] . '<br>';
                    echo 'enteroobligatorio: ' . $aRespuestas['enteroobligatorio'] . ' años' . '<br>';
                    echo 'enteroopcional: ' . $aRespuestas['enteroopcional'] . ' años' . '<br>';
                    echo 'floatobligatorio: ' . $aRespuestas['floatobligatorio'] . ' años' . '<br>';
                    echo 'floatopcional: ' . $aRespuestas['floatopcional'] . ' años' . '<br>';
                    echo 'fechaobligatorio:' . ($aRespuestas['fechaobligatorio']->format('d/m/Y'));
                    echo 'fechaopcional:' . ($aRespuestas['fechaopcional']->format('d/m/Y'));
                } else {
//Muestra el formulario
//Si el error no es nulo mustra el mensaje del mismo al lado de el campo correspondiente
//Si algun campo sigue almacenado en $_REQUEST (No tiene error) lo vuelve a introducir en el input
                    ?>
                    <form name="ejercicio24" action="./<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset>
                            <legend>Titulo del formulario</legend>
                            <div class="formElement">
                                <label for="alfabeticoobligatorio">alfabeticoobligatorio:</label>
                                <input type="text" id="alfabeticoobligatorio" name="alfabeticoobligatorio" class="obligatorio"
                                       value="<?php echo $_REQUEST['alfabeticoobligatorio'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['alfabeticoobligatorio'])) ? print '<p style="color: red; display: inline;">' . $aErrores['alfabeticoobligatorio'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="alfabeticoopcional">alfabeticoopcional:</label>
                                <input type="text" id="alfabeticoopcional" name="alfabeticoopcional" class="opcional"
                                       value="<?php echo $_REQUEST['alfabeticoopcional'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['alfabeticoopcional'])) ? print '<p style="color: red; display: inline;">' . $aErrores['alfabeticoopcional'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="alfabeticobloqueado">alfabeticobloqueado:</label>
                                <input type="text" id="alfabeticobloqueado" name="alfabeticobloqueado" class="bloqueado"
                                       disabled>
                            </div>
                            <div class="formElement">
                                <label for="alfanumericoobligatorio">alfanumericoobligatorio:</label>
                                <input type="text" id="alfanumericoobligatorio" name="alfanumericoobligatorio"
                                       class="obligatorio" value="<?php echo $_REQUEST['alfanumericoobligatorio'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['alfanumericoobligatorio'])) ? print '<p style="color: red; display: inline;">' . $aErrores['alfanumericoobligatorio'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="alfanumericoopcional">alfanumericoopcional:</label>
                                <input type="text" id="alfanumericoopcional" name="alfanumericoopcional" class="opcional"
                                       value="<?php echo $_REQUEST['alfanumericoopcional'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['alfanumericoopcional'])) ? print '<p style="color: red; display: inline;">' . $aErrores['alfanumericoopcional'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="alfanumericobloqueado">alfanumericobloqueado:</label>
                                <input type="text" id="alfanumericobloqueado" name="alfanumericobloqueado" class="bloqueado"
                                       disabled>
                            </div>
                            <div class="formElement">
                                <label for="enteroobligatorio">enteroobligatorio:</label>
                                <input type="text" id="enteroobligatorio" name="enteroobligatorio" class="obligatorio"
                                       value="<?php echo $_REQUEST['enteroobligatorio'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['enteroobligatorio'])) ? print '<p style="color: red; display: inline;">' . $aErrores['enteroobligatorio'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="enteroopcional">enteroopcional:</label>
                                <input type="text" id="enteroopcional" name="enteroopcional" class="opcional"
                                       value="<?php echo $_REQUEST['enteroopcional'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['enteroopcional'])) ? print '<p style="color: red; display: inline;">' . $aErrores['enteroopcional'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="enterobloqueado">enterobloqueado:</label>
                                <input type="text" id="enterobloqueado" name="enterobloqueado" class="bloqueado" disabled>
                            </div>
                            <div class="formElement">
                                <label for="floatobligatorio">floatobligatorio:</label>
                                <input type="text" id="floatobligatorio" name="floatobligatorio" class="obligatorio"
                                       value="<?php echo $_REQUEST['floatobligatorio'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['floatobligatorio'])) ? print '<p style="color: red; display: inline;">' . $aErrores['floatobligatorio'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="floatopcional">floatopcional:</label>
                                <input type="text" id="floatopcional" name="floatopcional" class="opcional"
                                       value="<?php echo $_REQUEST['floatopcional'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['floatopcional'])) ? print '<p style="color: red; display: inline;">' . $aErrores['floatopcional'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="floatbloqueado">floatbloqueado:</label>
                                <input type="text" id="floatbloqueado" name="floatbloqueado" class="bloqueado" disabled>
                            </div>
                            <div class="formElement">
                                <label for="fechaobligatorio">fechaobligatorio:</label>
                                <input type="date" id="fechaobligatorio" name="fechaobligatorio" class="obligatorio"
                                       value="<?php echo $_REQUEST['fechaobligatorio'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['fechaobligatorio'])) ? print '<p style="color: red; display: inline;">' . $aErrores['fechaobligatorio'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="fechaopcional">fechaopcional:</label>
                                <input type="date" id="fechaopcional" name="fechaopcional" class="opcional"
                                       value="<?php echo $_REQUEST['fechaopcional'] ?? '' ?>" />
                                       <?php (!is_null($aErrores['fechaopcional'])) ? print '<p style="color: red; display: inline;">' . $aErrores['fechaopcional'] . '</p>' : ''; ?>
                            </div>
                            <div class="formElement">
                                <label for="fechabloqueado">fechabloqueado:</label>
                                <input type="date" id="fechabloqueado" name="fechabloqueado" class="bloqueado" disabled>
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