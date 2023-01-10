<?php
require_once 'classemamifero.php';

class Canguru extends Mamifero{
    function usarBolsa(){
        echo "</p>Guardando filhote<p>";
    }

    function locomover(){
        echo "</p>Saltando...<p>";
    }
}
?>