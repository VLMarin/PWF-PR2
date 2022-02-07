<?php

require 'Figura.php';
require 'cuadrado.php';
require 'triangulo.php';

$cuadrado = new cuadrado(4);
$triangulo = new triangulo(3);

echo 'Vicente Luis Marin';
    echo '<br />';
    echo '18270292';
    echo '<br />';
    echo 'S8A';
    echo '<br />';
    echo 'Ejemplo de Herencia y Polimorfismo';   
    echo '<br />';
    echo '<br />';
    echo '<br />';

echo $cuadrado->perimetro();
echo '<br />';
echo $triangulo->perimetro();

echo '<br />';
echo '<br />';

echo $cuadrado->area();
echo '<br />';
echo $triangulo->area();
