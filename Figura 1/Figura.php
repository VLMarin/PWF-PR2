<?php

class Figura
{
    protected $lado;


    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function perimetro()
    {
        return 'Figura - El perimetro del '.get_called_class().' es: '.(4 * $this->lado);
    }

    public function area()
    {
        return 'Figura - El area del '.get_called_class().' es: '.(pow($this->lado,2));
    }
}