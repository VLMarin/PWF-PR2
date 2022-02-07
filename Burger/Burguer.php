<?php
class Burger {

    
    private $ingredients = [];

    public function make($ingredients)
    {
        $this->giveMeIngredients($ingredients);
        $this->prepare();
        $this->cook();
        $this->estado();
    }

    private function giveMeIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
    
    private function prepare()
    {
    echo 'Vicente Luis Marin';
    echo '<br />';
    echo '18270292';
    echo '<br />';
    echo 'S8A';
    echo '<br />';
    echo 'Ejemplo de Abstraccion y Encapsulamiento';   
    echo '<br />';
    echo '<br />';
    echo '<br />';
    echo 'Preparando la Hamburguesa espera por favor';
    echo '<br />';
    echo '<br />';
    }
    private function cook()
    {
   echo 'Cocinando la hamburguesa, vigila no se queme!';
   echo '<br />';
   echo '<br />';
    }
    public function estado()
    {
        echo 'La hamburguesa esta lista tome su orden por favor :)';
        echo '<br />';
        echo 'Que tenga un buen dia';
    }
}

$burger = new Burger();
$ingredients = ["Pan", "Tomate", "Lechuca", "Carne"]; 
$burger->make($ingredients);


