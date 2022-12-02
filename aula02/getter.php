<?php
    class Caneta {
        public $modelo;
        private $ponta;
        private $cor;

        public function Caneta($m, $p, $c) {
            $this-> modelo = $m;
            $this-> ponta = $p;
            $this-> cor = $c;
            $this->rabiscar();
        }

        public function rabiscar() {
            echo "Estou rabiscando";
        }

       public function getModelo() {
        return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }

        public function getCor() {
            return $this -> cor;
        }
    
        public function setCor($c) {
            $this -> cor = ($c);
        }
    }

   

?>