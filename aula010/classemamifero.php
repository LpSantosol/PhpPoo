<?php
require_once 'classeanimal.php';
class Mamifero extends Animal{
    protected $corPelo;

    function emitirSom(){
        echo "<p>Som de mamifero</p>";
    }
}
?>