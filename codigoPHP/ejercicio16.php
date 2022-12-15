<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 16</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 16</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Crea e inicializa el array
                $asueldoDiario = [
                    'Lunes' => 40,
                    'Martes' => 40,
                    'Miercoles' => 40,
                    'Jueves' => 40,
                    'Viernes' => 40,
                    'Sabado' => 120,
                    'Domingo' => 0
                ];
//Crea la variable sueldo semanal
//Inicializa la variable usando el metodo sum para sumar todos los valores del array
                $sueldoSemanal = array_sum($asueldoDiario);
//Inicializa el puntero en la primara posicion del array
                reset($asueldoDiario);
//Ejecuta el bucle mientras la posicion del puntero en el array no sea nula
//Muestra el dia y el sueldo de la posicion actual del puntero
//Avanza el puntero a la siguiente posicion
                echo '<h3>Calculo de sueldo</h3><br>';
                do {
                    echo 'El sueldo recibido el ' . key($asueldoDiario) . ' es: ' . current($asueldoDiario) . '<br><br>';
                    next($asueldoDiario);
                } while (current($asueldoDiario) != null);
//Muestra el sueldo semanal
                echo '<br><br><br>El sueldo semanal total es: ' . $sueldoSemanal;
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