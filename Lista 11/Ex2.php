<?php

$valor_compra = $_POST["valor"];
$dinheiro_pago = $_POST["dinheiro"];

if($dinheiro_pago < $valor_compra){
    echo "Falta dinheiro para comprar.";
}
else{
    echo "Seu troco é R$ ", $dinheiro_pago - $valor_compra;
}
?>