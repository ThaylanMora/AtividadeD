<?php

class Empregado{
    private $nome;
    private $sobrenom;
    private $salariomes;

public function getNome(){
    return $this->nome;
}
public function setNome($nome){
    $this->nome = $nome;
}

public function getSobrenom(){
    return $this->sobrenom;
}
public function setSobrenom($sobrenom){
$this->sobrenom = $sobrenom;
}
public function getSalariomes(){
    return $this->salariomes;
}
public function setSalariomes($salariomes){
    $this->salariomes = $salariomes;
}
public function getSalarioAno(){
    return $this->salariomes * 12;
}
public function aumento($porcento){
$aumento = $this->salariomes * ($porcento / 100);
$aumentoFinal = $this->salariomes + $aumento;
}
}



?>