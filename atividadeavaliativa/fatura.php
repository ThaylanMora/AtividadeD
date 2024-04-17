<?php

class Fatura{
    private $numero;
    private $descricao;
    private $qtitem;  
    private $preco;

    public function getNumero(){
    return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function getQtitem(){
        return $this->qtitem;
    }
    public function setQtitem($qtitem){
        $this->qtitem = $qtitem;
    }
    public function getPreco($preco){
        if($preco > 0){
            $this->preco = $preco;
            }
            else
            {
            $this->preco = 0.0;
            }
    }
    public function getTotalFatura(){
        $total = $this->qtitem * $this-> preco;
        if ($total > 0){
        }
    }
}


?>