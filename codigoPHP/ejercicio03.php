<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 03</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 03</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Define la codificacion y la zona horaria predeterminada
                setlocale(LC_ALL, 'es_ES.utf8');
                date_default_timezone_set('Europe/Madrid');
//Fecha con date
                echo '<h3>Date</h3><br>';
                echo 'Hora actual:<br>';
                echo (date('h:i:s')) . '<br><br><br>';
                echo 'Fecha actual:<br>';
                echo (date('l d  F  Y')) . '<br><br><br>';
//Fecha con datetime
                echo '<h3>DateTime</h3><br>';
                $fecha = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                echo 'Hora actual:<br>';
                echo ($fecha->format('h:i:s')) . '<br><br><br>';
                echo 'Fecha actual:<br>';
                echo ($fecha->format('l d  F  Y')) . '<br><br><br>';
//Fecha con formato local por defecto
                echo '<h3>strftime</h3><br>';
                echo 'Hora actual:<br>';
                echo (strftime('%H:%M:%S')) . '<br><br><br>';
                echo 'Fecha actual:<br>';
                echo (strftime('%A %d de %B de %Y'));
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