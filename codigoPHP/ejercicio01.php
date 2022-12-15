<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../webroot/css/style.css">
        <title>Ejercicio 01</title>
    </head>

    <body>
        <header>
            <h1>Tema 3</h1>
            <h2>Ejercicio 01</h2>
        </header>
        <main>
            <section>
                <?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 13/12/2022
//Declaración de variables
                $cadena = 'cadena';
                $integer = 1;
                $float = 1.1;
                $boolean = true;
//Obtencion del tipo de las variables    
                $tipov1 = gettype($cadena);
                $tipov2 = gettype($integer);
                $tipov3 = gettype($float);
                $tipov4 = gettype($boolean);
//Declaracion del array    
                $array = array('a' => 'manzana', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
//Mostrar con echo    
                echo('<h3>echo</h3><br>');
                echo('La variable cadena contiene el valor: ' . $cadena . ' y es tipo ' . $tipov1 . '<br>');
                echo('La variable cadena contiene el valor: ' . $integer . ' y es tipo ' . $tipov2 . '<br>');
                echo('La variable cadena contiene el valor: ' . $float . ' y es tipo ' . $tipov3 . '<br>');
                echo('La variable cadena contiene el valor: ' . $boolean . ' y es tipo ' . $tipov4 . '<br><br>');
//Mostrar con print     
                print('<h3>print</h3><br>');
                print('La variable cadena contiene el valor ' . $cadena . ' y es tipo ' . $tipov1 . '<br>');
                print('La variable cadena contiene el valor ' . $integer . ' y es tipo ' . $tipov2 . '<br>');
                print('La variable cadena contiene el valor ' . $float . ' y es tipo ' . $tipov3 . '<br>');
                print('La variable cadena contiene el valor ' . $boolean . ' y es tipo ' . $tipov4 . '<br><br>');
//Mostrar con printf    
                printf('<h3>printf</h3><br>');
                printf('La variable cadena contiene el valor %s y es tipo %s<br>', $cadena, $tipov1);
                printf('La variable cadena contiene el valor %s y es tipo %s<br>', $integer, $tipov2);
                printf('La variable cadena contiene el valor %s y es tipo %s<br>', $float, $tipov3);
                printf('La variable cadena contiene el valor %s y es tipo %s<br><br>', $boolean, $tipov4);
//Mostrar con print_r     
                print_r('<h3>print_r</h3>');
                print_r('<h3>(Generalmente usado para mostrar arrays de forma legible)</h3><br>');
                print_r($cadena . '<br>');
                print_r($integer . '<br>');
                print_r($float . '<br>');
                print_r($boolean . '<br>');
                print_r($array);
                print_r('<br><br>');
//Mostrar con var_dump  
                echo '<h3>var_dump</h3>';
                echo '<h3>(Generalmente usado para mostrar arrays de forma legible)</h3><br>';
                echo('<h4>var_dump con la etiqueta pre html mostrado con un echo</h4>');
                echo '<pre>', var_dump($array), '</pre>';
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