<?php

include 'fatura.php';

$fatura = new Fatura();
$fatura->setNumero("1");
$fatura->setDescricao("CpU");
$fatura->setQtitem(4);
$fatura->setPreco(100.0);

echo "Numero Fatura: <br>" . $fatura->getNumero();
echo "Descrição: <br>" . $fatura->getDescricao(); 
echo "Quantidade: <br>" . $fatura->getQtitem();
echo "Preço Unitario: <br>" . $fatura->getPreco();
echo "Total da Compra: <br>" . $fatura->getTotalFatura();


include 'empregado.php';

$empregado1 = new Empregado();
$empregado1->setNome("Adoff");
$empregado1->setSobrenom("Handler");
$empregado1->setSalariomes(3000);

$empregado2 = new Empregado();
$empregado2->setNome("Stallin");
$empregado2->setSobrenom("Josef");
$empregado2->setSalariomes(9000);

echo "Salario do Empregado1: <br>" . $empregado1->getSalariomes();
echo "Salario do Empregado2: <br>". $empregado2->getSalariomes();

$empregado1->aumento(10);
$empregado->aumento(10);

echo "Aumento de 10% no Empregado1: <br>". $empregado1->getSalarioAno(); 
echo "Aumento de 10% no empregado2:<br> ". $empregado2->getSalarioAno();

?>