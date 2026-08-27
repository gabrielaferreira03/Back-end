<?php

$valor= 25;
$valormínimoentrega=40;
$idadecliente= 19;
$idademinimabebida=18;
$estoque= 3;
$quantidadepedida=5;
$statuspedido= "pago";

if ($valor>= $valormínimoentrega){
    echo "Entrega Grátis Liberada! <br>";
}
else {
    echo "Você não posssui entrega grátis. <br>";
}

if($idadecliente >= 18){
    echo "Pode comprar Bebida Alcoólica! <br>";
}
else{
    echo "O cliente não pode comprar bebida alcoólica <br>";
}

if($quantidadepedida <= $estoque){
    echo "Infelizmente não temos essa quantidade de produtos no estoque, diminua a quantidade escolhida. <br>";
}
else{
    echo "Temos essa quantidade em estoque! Pode fazer sua compra. <br>";
}

if ($statuspedido == "pago"){
    echo "Esse pedido já foi pago! <br>";
}
else{
    echo "O pedido ainda não pago <br>";
}

?>