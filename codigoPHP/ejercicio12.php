<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 12</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 12</h2>
        </header>
        <main>
            <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Obtiene la clave del array y el dato almacenado en el mismo
            echo '<h2>$_COOKIE</h2><table>';
            foreach ($_COOKIE as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            echo '<h2>$_ENV</h2><table>';
            foreach ($_ENV as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            echo '<h2>$_FILES</h2><table>';
            foreach ($_FILES as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            echo '<h2>$_GET</h2><table>';
            foreach ($_GET as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            echo '<h2>$_POST</h2><table>';
            foreach ($_POST as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            echo '<h2>$_REQUEST</h2><table>';
            foreach ($_REQUEST as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            echo '<h2>$_SERVER</h2><table>';
            foreach ($_SERVER as $campo => $valorCampo) {
                echo '<tr><td>' . $campo . '</td><td>' . $valorCampo . '</td></tr>';
            }
            echo '</table>';
            ?>
            <div class="return">
                <a href="../indexProyectoTema3.php"><img src="../webroot/images/back.png" alt="Imagen back"></a>
            </div>
        </main>
        <footer>
            <div class="footerIcons">
                <a href="../doc/curriculum.pdf" target="_blank"><img src="../webroot/images/curriculum.png" alt="Imagen curriculum"></a>
                <a href="https://github.com/JosueMarFer/205DWESProyectoTema3" target="_blank"><img src="../webroot/images/github.png"
                                                                                                   alt="Imagen github"></a>
            </div>
            <div class="home">
                <a href="../../index.html"><img src="../webroot/images/home.png" alt="Imagen home"></a>
                <p>Josué martínez Fernández</p>
            </div>
        </footer>
    </body>
</html>