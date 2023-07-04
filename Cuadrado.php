<?php


require_once "Poligono.php";

class Cuadrado extends Poligono{
    private float $lado;

    public function __construct(float $lado)
    {
        $this->lado=$lado; 
    }

    public function calcularArea():float
    {
         return $this->lado *= $this->lado;
    }
}