<?php

class Caneta{
    private $modelo;
    protected $ponta;
    private $tampada;
    
    public function __construct($m, $p){
        $this->setModelo($m);
        $this->setPonta($p);
        $this->tampar();
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

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function tampar(){
        $this->tampada = true;
    }
}

?>