<?php
require_once 'classepessoa.php';
class Aluno extends Pessoa {
    private $matr;
    private $curso;

    function cancelarMatr(){
        echo "</p>Matrícula será cancelada<p>";
    }

    function getMatr(){
        return $this->matr;
    }

    function setMatr($matr){
        $this->matr = $matr;
    }

    function getCurso(){
        return $this->curso;
    }

    function setCurso($curso){
        $this->curso = $curso;
    }
}

?>