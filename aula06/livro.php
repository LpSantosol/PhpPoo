<?php
    require_once 'pessoa.php';
    require_once 'interface.php';
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;


        
        function detalhes(){
            echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
            echo "<br> total de páginas " . $this->totPaginas . " página atual " . $this->pagAtual;
            echo "<br> sendo lido por " . $this->leitor->getNome();
        }

        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
            $this->aberto = false;
            $this->pagAtual = 0;
            
        }


        function getTitulo(){
            return $this->titulo;
        }

        function setTitulo($tit){
            $this->titulo = $tit;
        }

        function getAutor(){
            return $this->autor;
        }

        function setAutor($autor){
            $this->autor = $autor;
        }

        function gettotPaginas(){
            return $this->totPaginas;
        }
        
        function settotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        function getpagAtual(){
            return $this->pagAtual;
        }

        function setpagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function getAberto(){
            return $this->aberto;
        }

        function setAberto($aberto){
            $this->aberto = $aberto;
        }

        function getLeitor(){
            return $this->leitor;
        }

        function setLeitor($leitor){
            $this->leitor = $leitor;
        }
        
        function Abrir(){
            $this->abrir = true;
        }

        function Fechar(){
            $this->fechar = true;
        }

        function folhear($p){
            if($p > $this->totPaginas){
                $this->pagAtual = 0;
            } else $this->pagAtual = $p;
                
        }

        function avancarPag(){
            $this->setpagAtual(getpagAtual() +1);
        }

        function voltarPag(){
            $this->setpagAtual(getpagAtual() -1);
        }


    
    }