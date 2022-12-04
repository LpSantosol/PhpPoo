<?php  

    class contaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
          

        public function __construct() {
            $this->setStatus(false);
            $this->setSaldo(0);
            echo "<p>Conta criada com sucesso </p>";
    
        }

        function getNumConta() {
            return $this-> numConta;
        }

        function getTipo() {
            return $this-> tipo;
        }   

        function getDono(){
            return $this-> dono;
        }

        function getSaldo() {
            return $this-> saldo;
        }
        
        function getStatus() {
            return $this-> status;
        }

       

        function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        function setTipo($tipo) {
            $this->tipo  = $tipo;
        }

        function setDono($dono) {
            $this->dono = $dono;
        }


        function setSaldo($saldo) {
            $this-> saldo = $saldo;
        }
       
        function setStatus($status) {
            $this->status = $status;
        }

       


        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "cc") {
                $this->setSaldo(50);
             } elseif ($t = "cp") {
                    $this->setSaldo(150);
                }
           
            }
            

        

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Não é possivel fechar a conta porque você ainda possui saldo</p>";
            }  elseif ($this->getSaldo() < 0 ) {
                    echo "<p>Clientes inadimplentes não pode encerrar sua conta</p>";
                }
                else {
                    $this->setStatus(false);
            }
        }
        
            
            

        

        public function depositar($v) {
            
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito de $v na conta de " 
                .$this->getDono()."</p>";
            }   else {
                    echo "<p>Conta fechada, Não consigo depositar</p>";
                }
            
                
        }

        public function sacar($v) {
            if ($this->getStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$$v autorizado na conta de "
                    .$this->getDono()."</p>";
                    
                } else {
                    echo "<p>Saldo insuficiente</p>";
                }
               
            }   else { 
                echo "<p>Impossivel sacar</p>";
              }
            }          
                
            
                
           
            
        


       

        public function pagarMensal() {
            if ($this->getTipo() == "cc") {
                $mensal = 12;
            } elseif ($this->getTipo() == "cp") {
                    $mensal = 20;
                }

                if ($this->getStatus()) {
                    $this->setSaldo($this->getSaldo() - $mensal);
                       
                } else {
                        echo "<p>Saldo insuficiente</p>";
                    }
                 }   
                 
                }

?>

