<?php


require_once "Poligono.php";

class Circulo extends Poligono{
    private float $radio;
    

    public function __construct(float $radio)
    {
        $this->radio=$radio;
        
    }

    public function calcularArea():float
    {
        //  return pi()*pow($this->radio, 2);
        return number_format((pi()*$this->radio**2),2);
}
}