<?php
require_once 'classeanimal.php';
class Reptil extends Animal{
    protected $corEscama;

    function locomover(){
        echo "</p>Rastejando<p>";
    }

    function alimentar(){
        echo "</p>Comendo ovos<p>";
    }

    function emitirSom(){
        echo "</p>Mostrando a lingua<p>";
    }

    function getcorEscama(){
        return $this->escama;
    }

    function setcorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}
?>