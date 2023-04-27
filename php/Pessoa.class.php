<?php
    class Pessoa{
        protected $nome;
        protected $idade;
        
        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function cadastrar($nome, $idade){
          $this->nome = $nome;
          $this->idade = $idade;
          echo("Nome : ".$nome."<br /> Idade: ".$idade);
        }
    }
?>