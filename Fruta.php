<?php
'use strict';
class Fruta
{
    // Properties
    private $nome;
    private $cor;
    public function __construct($nome, $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }
    // Method to set the properties

    public function setNome($nome){
     $this->nome = $nome;
     }
      

    public function getNome(){
     return $this->nome;
    }

    public function setCor($cor){
     $this->cor = $cor;
    }
    // Method to display the properties
    public function __tostring()
    {
       return "Fruta:\n" . 
       "Nome: {$this->nome} \n" . 
       "Cor: " . $this->cor . "\n";
    }
}
?>