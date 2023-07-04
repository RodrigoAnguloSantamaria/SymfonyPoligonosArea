<?php


require_once "Poligono.php";

class Triangulo extends Poligono{
    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base=$base;
        $this->altura=$altura;

    }

    public function calcularArea():float
    {
         return ($this->base * $this->altura)/2;
    }
}