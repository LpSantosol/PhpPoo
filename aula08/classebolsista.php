<?php
require_once 'classealuno.php';
class Bolsista extends Aluno {
    protected $bolsa;
    public function renovarBolsa(){
        echo "<p>Bolsa renovada com sucesso</p>";
    }

    public function pagarMensalidade(){
        echo "<p>Aluno $this->nome é bolsista e paga com $this->bolsa de desconto</p>";
    }

    function getBolsa(){
        return $this->bolsa;
    }

    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}
?>