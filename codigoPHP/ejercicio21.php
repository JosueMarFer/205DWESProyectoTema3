<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 21</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 21</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Formulario que recoge los datos y los envia al fichero php tratamientoEjercicio21
                ?>
                <form name="ejercicio21" action="./tratamientoEjercicio21.php" method="post">
                    <fieldset>
                        <legend>Datos basicos</legend>
                        <div class="formElement">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" />
                        </div>
                        <div class="formElement">
                            <label for="edad">Edad:</label>
                            <input type="number" id="edad" name="edad" />
                        </div>
                        <div class="formElement">
                            <label for="fechaNacimiento">Fecha de nacimiento:</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" />
                        </div>
                        <div class="formElement">
                            <input type="submit" value="Enviar" name="enviar" />
                        </div>
                    </fieldset>
                </form>
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