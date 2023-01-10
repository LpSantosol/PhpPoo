<?php
require_once 'classeanimal.php';
class Mamifero extends Animal {
    protected $corPelo;

    function locomover(){
        echo "</p>Andando...<p>";
    }

    function alimentar(){
        echo "</p><Mamando...p>";
    }

    function emitirSom(){
        echo "</p>Rosnando<p>";
    }


    function getcorPelo(){
        return $this->pelo;
    }

    function setcorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
}


?>