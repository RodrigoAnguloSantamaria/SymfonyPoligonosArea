<?php
require_once "Cuadrado.php";
require_once "Rectangulo.php";
require_once "Circulo.php";

$primCuadrado = new Cuadrado(4);
$area= $primCuadrado->calcularArea();

$segCuadrado = new Cuadrado(6);
$segArea=$segCuadrado->calcularArea();


echo "Mi primer cuadrado tiene de area: $area <br>";
echo "Mi segundo cuadrado tiene de area: $segArea <br>";

$primReactangulo = new Rectangulo(2,4);
$areaRect=$primReactangulo->calcularArea();

$segRectangulo = new Rectangulo(3,5);
$areaSegRectangulo=$segRectangulo->calcularArea();

echo "Mi primer rectangulo tiene de area: $areaRect <br>";
echo "Mi segundo rectangulo tiene de area: $areaSegRectangulo <br>";


$circulo = new Circulo(2);
$areaCirculo=$circulo->calcularArea();

$circuloDos = new Circulo(7);
$areaSegCirculo=$circuloDos->calcularArea();

echo "Mi primer circulo tiene de area: $areaCirculo <br>";
echo "Mi segundo circulo tiene de area: $areaSegCirculo <br>";



