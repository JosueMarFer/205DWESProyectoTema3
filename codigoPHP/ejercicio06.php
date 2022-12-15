<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 06</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 06</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Creacion de objetos DateTime
                $fecha = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                $fecha2 = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                $fecha3 = new DateTime(null, new DateTimeZone('Europe/Madrid'));
//Creacion de objeto DateInterval con 60 dias
//Suma y resta de el intervalo a traves de parametros
                $fecha2->add(new DateInterval('P60D'));
                $fecha3->sub(new DateInterval('P60D'));
//Muestra fecha actual
                echo 'Hora actual:<br>';
                echo ($fecha->format('h:i:s')) . '<br><br><br>';
                echo 'Fecha actual:<br>';
                echo ($fecha->format('l d  F  Y')) . '<br><br><br>';
//Muestra fecha con la suma del intervalo
                echo 'Hora actual:<br>';
                echo ($fecha2->format('h:i:s')) . '<br><br><br>';
                echo 'Fecha mas 60 dias:<br>';
                echo ($fecha2->format('l d  F  Y')) . '<br><br><br>';
//Muestra fecha con la resta del intervalo
                echo 'Hora actual:<br>';
                echo ($fecha3->format('h:i:s')) . '<br><br><br>';
                echo 'Fecha menos 60 dias:<br>';
                echo ($fecha3->format('l d  F  Y'));
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