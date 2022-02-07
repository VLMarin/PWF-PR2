<?php

require 'Figura.php';
require 'cuadrado.php';
require 'triangulo.php';

$cuadrado = new cuadrado(4);
$triangulo = new triangulo(3);

echo $cuadrado->perimetro();
echo '<br />';
echo $triangulo->perimetro();

echo '<br />';
echo '<br />';

echo $cuadrado->area();
echo '<br />';
echo $triangulo->area();
