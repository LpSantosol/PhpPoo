<?php
require_once 'classepessoa.php';
class visitante extends Pessoa{
    private $bolsa;
    function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }

    function getBolsa(){
        return $this->bolsa;
    }

    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}

?>