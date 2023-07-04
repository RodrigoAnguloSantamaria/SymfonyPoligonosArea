<?php
 
 abstract class Poligono{
    protected $nombre;
    
    abstract protected function calcularArea();

    public function __construct(string $nombre)
    {
        $this->nombre=$nombre;
    }
    

 }
