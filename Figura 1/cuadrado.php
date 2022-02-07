<?php

class cuadrado extends Figura
{
    public function perimetro()
    {
        return 'El perimetro del '.get_called_class().' es: '. (4 * $this->lado);
    }

    public function area()
    {
        return 'El area del '.get_called_class().' es: '.(pow($this->lado,2));
    }
}