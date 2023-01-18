<?php
require_once 'interface.php';
class Video implements AcoesVideos{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }
    
   function like(){
    $this->curtidas ++;
   }
   
   function pause(){
    $this->reproduzindo = false;
   }

   function play(){
    $this->reproduzindo = true;
   }

   function getTitulo(){
    return $this->titulo;
   }

   function setTitulo($titulo){
    $this->titulo = $titulo;
   }

   function getAvaliacao(){
    return $this->avalicao;
   }

   function setAvaliacao($avalicao){
    $this->avalicao = $avalicao;
   }

   function getViews(){
    return $this->views = $views;
   }

   function setViews($views){
    $this->views = $views;
   }

   function getCurtidas(){
    return $this->curtidas;
   }

   function setCurtidas($curtidas){
    $this->curtidas = $curtidas;
   }

   function getReproduzindo(){
    return $this->reproduzindo;
   }

   function setReproduzindo($reproduzindo){
    $this->reproduzindo = $reproduzindo;
   }
}
?>