<?php
include("Produto.php");
include("Venda.php");

$venda = new Venda();
$venda->gerarProduto();
$venda->calcularVenda();

echo"</br>";
echo $venda->imprimir();
?>