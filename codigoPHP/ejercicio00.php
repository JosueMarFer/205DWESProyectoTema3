<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 00</title>
        <style>
            /*      
            Clase propia de phpinfo
            */
            .center {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 00</h2>
        </header>
        <main>
            <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Mostrar por pantalla   
            echo "<h2>Hola mundo</h2><br>";
//Almacenar en el buffer la salida de phpinfo para poder a traves de 
//una expresion regular tan solo recoger la tabla (sin formato)  
            ob_start();
            phpinfo();
            $pinfo = ob_get_contents();
            ob_end_clean();
            $pinfo = preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo);
            echo $pinfo;
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