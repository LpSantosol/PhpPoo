<?php
require_once 'classeanimal.php';
class Ave extends Animal{
    protected $corPena;

    function locomover(){
        echo "</p>Voando...<p>";
    }

    function alimentar(){
        echo "</p>Comendo frutas<p>";
    }

    function emitirSom(){
        echo "</p>Cantando...<p>";
    }

    function fazerNinho(){
        echo "</p>Pegando galhos<p>";
    }

    function getcorPena(){
        return $this->corPena;
    }

    function setcorPena($corPena){
        $this->corPena = $corPena;
    }
}


?>