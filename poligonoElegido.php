<?php
echo "<head><link rel='stylesheet' href='styles.css'></head>";
require_once "Cuadrado.php";
require_once "Rectangulo.php";
require_once "Circulo.php";
require_once "Triangulo.php";

$poligono=$_POST["poligono"];
$unidad=$_POST["unidad"];

switch($poligono){
    case "circulo":
        $radio=$_POST["radio"];
        $circulo=new Circulo($radio);
        $area=$circulo->calcularArea();
        echo "<div class='container'><h3>El area del $poligono es $area $unidad <sup>2</sup></h3>";
        echo "<a href='index.html'><button>Inicio</button></a></div>";
        break;
    case "cuadrado":
        $lado=$_POST["lado"];
        $cuadrado=new Cuadrado($lado);
        $area=$cuadrado->calcularArea();
        echo "<div class='container'><h3>El area del $poligono es $area $unidad <sup>2</sup> </h3>";
        echo "<a href='index.html'><button>Inicio</button></a></div>";
        break;
    case "rectangulo":
        $base=$_POST["base"];
        $altura=$_POST["altura"];
        $rectangulo=new Rectangulo($base, $altura);
        $area=$rectangulo->calcularArea();
        echo "<div class='container'><h3>El area del $poligono es $area $unidad <sup>2</sup> </h3>";
        echo "<a href='index.html'><button>Inicio</button></a></div>";
        break;
    case "triangulo":
    case "rombo":
        $base=$_POST["base"];
        $altura=$_POST["altura"];
        $triangulo=new Triangulo($base, $altura);
        $area=$triangulo->calcularArea();
        echo "<div class='container'><h3>El area del $poligono es $area $unidad <sup>2</sup> </h3>";
        echo "<a href='index.html'><button>Inicio</button></a></div>";
        break;
    
    }


