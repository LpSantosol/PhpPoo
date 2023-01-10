<?php
require_once 'classeanimal.php';
class Peixe extends Animal{
    protected $corEscama;

    function locomover(){
        echo "</p>Nadando<p>";
    }

    function alimentar(){
        echo "</p>Comendo minhoca<p>";
    }

    function emitirSom(){
        echo "</p>Bolhas<p>";
    }


    function soltarBolha(){
        echo "Bluh...bluh....";
    }

    function getcorEscama(){
        return $this->escama;
    }

    function setcorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}

?>