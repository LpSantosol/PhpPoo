<?php
  Class caneta {
        var $cor;
        var $modelo;
        var $tampada;
        var $ponta;
        var $carga;


        function rabiscar() {
            if ($this->tampada == true) {
                echo "A Caneta está tampada não é possivel rabiscar <br/>";
            } else  {
                echo "<br>Estou rabiscando...<br/>";
            }

        } 

        function tampar(){
            $this->tampada = true;

        }

        function destampar(){
            $this->tampada = false;

        }

              
      

  }





?>