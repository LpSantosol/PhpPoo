<?php
require_once 'classepessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    function assistirMaisUm(){
        $this->$login ++;
    }

    function getLogin(){
        return $this->login;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function getTotAssistido(){
        return $this->totAssistido;
    }

    function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }
}