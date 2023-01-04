<?php
require_once 'classepessoa.php';
class Professor extends Pessoa {
    private $espec;
    private $salario;

    function receberAumento($aum){
        $this->salario += $aum;
    }

    function getEspecialidade(){
        return $this->espec;
    }

    function setEspecialidade($espec){
        $this->espec = $espec;
    }

    function getSalario(){
        return $this->salario;
    }

    function setSalario($salario){
        $this->salario = $salario;
    }
}

?>