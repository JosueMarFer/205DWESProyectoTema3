<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 15</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 15</h2>
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
//Crea e inicializa la variable sueldo semanal a 0
                $sueldoSemanal = 0;
//Recorre el array para mostrar el dia y el $sueldo
//Almacena la suma de los sueldos en el sueldo semanal
                echo '<h3>Calculo de sueldo</h3><br>';
                foreach ($asueldoDiario as $dia => $sueldo) {
                    echo 'El sueldo recibido el ' . $dia . ' es: ' . $sueldo . '<br><br>';
                    $sueldoSemanal += $sueldo;
                }
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