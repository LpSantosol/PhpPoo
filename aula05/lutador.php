<?php

    /* Atributos */
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $pe;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;


             /* Métodos especiais*/

        function __construct($nom, $nac, $ida, $alt, $pe, $vit, $der, $emp){
            $this->nome = $nom;
            $this->nacionalidade = $nac;
            $this->idade = $ida;
            $this->altura = $alt;
            $this->setPeso($pe);
            $this->vitorias = $vit;
            $this->derrotas = $der;
            $this->empates = $emp;
        }
        //Getter´s
        function getNome(){
           return $this->nome;
        }

        function getNacionalidade(){
            return $this->nacionalidade;
        }

        function getIdade(){
            return $this->idade;
        }

        function getAltura(){
            return $this->altura;
        }

        function getPeso(){
            return $this->peso;
        }

        function getCategoria(){
            return $this->categoria;
        }

        function getVitorias(){
            return $this->vitorias;
        }

        function getDerrotas(){
            return $this->derrotas;
        }

        function getEmpates(){
            return $this->empates;
        }
        //Setter´s
        function setNome($no){
            $this->volume = $no;
        }

        function setNacionalidade($nac){
            $this->nacionalidade = $nac;
        }

        function setIdade($ida){
            $this->idade = $ida;
        }

        function setAltura($alt){
            $this->altura = $alt;
        }

        function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria();
        }

        function setCategoria(){
                if ($this->peso < 52.2){
                    $this->categoria = "Inválido ";
                }   elseif ($this->peso <= 70.3){
                    $this->categoria = "Leve ";
                }   elseif ($this->peso <= 83.9){
                    $this->categoria = "Médio ";
                }   elseif ($this->peso <= 120.2){
                    $this->categoria = "Pesado ";
                }   else {
                    $this->categoria = "Inválido ";
                }
        }

        function setVitorias($vit){
            $this->vitorias = $vit;
        }

        function setDerrotas($der){
            $this->derrotas = $der;
        }

        function setEmpates($emp){
            $this->empates = $emp;
        }

        /* Métodos */

        public function apresentar(){
            echo "<p>----------------------------</p>";
            echo "Ele que vem direto da " . $this->getNacionalidade();
            echo " pesando " . $this->getPeso();
            echo " com idade de " . $this->getIdade();
            echo " e medindo " . $this->getAltura();
            echo "<br> possuindo " . $this->getVitorias() . " Vitórias ";
            echo $this->getDerrotas() . " derrotas e " .$this->getEmpates() . " empates ";
            echo "<br>Senhoras e senhores aqui apresentamos o " . $this->getNome();
        }

        public function status(){
            echo "<p>----------------------------</p>";
            echo "<p>" .$this->getNome() . " é um peso " . $this->getCategoria();
            echo "e já ganhou " . $this->getVitorias() . " vezes,";
            echo " perdeu " . $this->getDerrotas() . " vezes e ";
            echo " empatou " . $this->getEmpates() . "vezes!";

        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() +1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() +1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() +1);
        }

       

       
    }

    


