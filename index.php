<?php
include("Produto.php");
include("Venda.php");

$venda = new Venda();
$venda->gerarProduto();
$venda->calcularVenda();

echo"</br>";
echo "VENDA NO VALOR: " . $venda->valor;
echo "</br> ----------------- </br>";

echo $venda->imprimirVista();
echo $venda->imprimirPrazoC();
echo $venda->imprimirPrazoN();
?>
