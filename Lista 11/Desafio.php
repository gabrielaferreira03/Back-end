<?php
$combustivel= $_POST["combustivel"];
$litros= $_POST["litros"];

if($combustivel=="gasolina"){
    $valor= $litros * 6.20;
    echo "⛽ Você abasteceu $litros litros.<br>";
    echo "💰 Valor total: R$ $valor.";
}
elseif($combustivel=="etanol"){
    $valor= $litros * 4.20;
    echo "⛽ Você abasteceu $litros litros.<br>";
    echo "💰 Valor total: R$ $valor.";
}
else{
    $valor= $litros * 6.00;
    echo "⛽ Você abasteceu $litros litros.<br>";
    echo "💰 Valor total: R$ $valor.";
}
?>