<?php
class Venda{
    public $produtos;
    public $valor;
    private $numProd=0;
    public $pagamento;

public function imprimir(){
    echo "VENDA NO VALOR: " .$this->valor;
    echo "</br> ----------------- </br>";
    
    echo "<font color='red'> A PRAZO - NÃO PAGO </br></font>";
    for($a=0; $a<$this->numProd; $a++){
        if($this->produtos[$a]->pagamento==1){
                echo "Produto: " . $this->produtos[$a]->nome . "</br>";
                echo " - Valor unidade: " . $this->produtos[$a]->valor . "</br>";
                echo " - Quantidade: " . $this->produtos[$a]->quant . "</br>";
                echo "Valor Total: " . $this->produtos[$a]->valorT ;
                echo "</br> </br>";
        }
    }

    echo "<font color='blue'> A PRAZO - PAGO </br></font>";
    for($a=0; $a<$this->numProd; $a++){
        if($this->produtos[$a]->pagamento==2){
                echo "Produto: " . $this->produtos[$a]->nome . "</br>";
                echo " - Valor unidade: " . $this->produtos[$a]->valor . "</br>";
                echo " - Quantidade: " . $this->produtos[$a]->quant . "</br>";
                echo "Valor Total: " . $this->produtos[$a]->valorT ;
                echo "</br> </br>";
        }
    }
    
    echo "<font color='green'> À VISTA </br></font>";
    for($a=0; $a<$this->numProd; $a++){
        if($this->produtos[$a]->pagamento==3){
                echo "Produto: " . $this->produtos[$a]->nome . "</br>";
                echo " - Valor unidade: " . $this->produtos[$a]->valor . "</br>";
                echo " - Quantidade: " . $this->produtos[$a]->quant . "</br>";
                echo "Valor Total: " . $this->produtos[$a]->valorT ;
                echo "</br> </br>";
        }
    }
}

public function calcularVenda(){
    $this->valor = 0;
    for($i=0; $i<$this->numProd; $i++){
        $this->valor += $this->produtos[$i]->valorT;
    }
}

public function gerarProduto(){
    $p1 = new Produto();
    $p1->nome = "Coca cola";
    $p1->id = 1;
    $p1->quant = 2;
    $p1->valor = 1;
    $p1->pagamento = 1;
    $this->numProd++;
    $p1->calcular();

    $p2 = new Produto();
    $p2->nome = "Valle";
    $p2->id = 2;
    $p2->quant = 2;
    $p2->valor = 3;
    $p2->pagamento = 2;
    $this->numProd++;
    $p2->calcular();

    $p3 = new Produto();
    $p3->nome = "Pepsi";
    $p3->valor = 10;
    $p3->id = 3;
    $p3->quant = 4;
    $p3->pagamento = 3;
    $this->numProd++;
    $p3->calcular();

    $p4 = new Produto();
    $p4->nome = "Tang";
    $p4->valor = 2;
    $p4->id = 4;
    $p4->quant = 5;
    $p4->pagamento = 2;
    $this->numProd++;
    $p4->calcular();

    $this->produtos[0] = $p1;
    $this->produtos[1] = $p2;
    $this->produtos[2] = $p3;
    $this->produtos[3] = $p4;
    }
}
?>