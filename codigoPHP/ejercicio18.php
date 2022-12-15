<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 18</title>
        <style>
            /*      
            Clases propias del ejercicio
            */
            .libre {
                background: green;
                color: black;
                text-align: center;
            }
            .ocupado {
                background: red;
                color: black;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 18</h2>
        </header>
        <main>
            <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Crear e inicializa el array con los nombres
            $aNombres = [
                'Juan',
                'Pepe',
                'Maria',
                'Ana',
                'Jose'
            ];
//Crea e inicializa el array con los espacios vacios
            for ($fila = 1; $fila <= 20; $fila++) {
                for ($asiento = 1; $asiento <= 15; $asiento++) {
                    $aTeatro[$fila][$asiento] = null;
                }
            }
//Añade el nombre de la reserva a posiciones aleatorias del array
            for ($nombreOcupado = 0; $nombreOcupado < count($aNombres); $nombreOcupado++) {
                $aleatorioFila = rand(1, 20);
                $aleatorioAsiento = rand(1, 15);
                $aTeatro[$aleatorioFila][$aleatorioAsiento] = $aNombres[$nombreOcupado];
            }
//Ejecuta el bucle mientras la posicion del puntero en el array no sea nula
//Un puntero recorre el array y otro recorre el subarray
//Avanza el puntero a la siguiente posicion (hasta finalizar el subarray, luego avanza el puntero del array principal)
            reset($aTeatro);
            echo '<table>';
            do {
                $fila = current($aTeatro);
                echo '<tr>';
                do {
                    if (current($fila) != null) {
                        echo '<td class="ocupado">' . current($fila) . '</td>';
                        echo '<h3>El asiento ' . key($fila) . ' de la fila ' . key($aTeatro) . ' esta ocupado por ' . current($fila) . '</h3>';
                    } else {
                        echo '<td class="libre"> fila: ' . key($aTeatro) . '<br> asiento ' . key($fila) . '</td>';
                    }
                    next($fila);
                } while (key($fila) != null);
                echo '</tr>';
                next($aTeatro);
            } while (key($aTeatro) != null);
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