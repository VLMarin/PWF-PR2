<?php

class triangulo extends Figura
{
    public function perimetro()
    {
        return 'El perimetro del '.get_called_class().' es: '.(3 * $this->lado);
    }

    public function area()
    {
        return 'El area del '.get_called_class().' es: '.(sqrt(3) / 4) * pow($this->lado, 2);
    }
}