<?php
$motorista= $_POST["motorista"];
$veiculo= $_POST["veiculo"];
$horas= $_POST["horas"];

echo "🚗 Motorista: $motorista <br>";
echo "⏱️ Tempo: $horas horas<br>";

if($veiculo=="moto"){
    $total= $horas * 5;
    echo "💰 Total R$$total,00";
}
elseif($veiculo=="carro"){
    $total= $horas * 8;
    echo "💰 Total R$$total,00";
}
else{
    $total= $horas * 12;
    echo "💰 Total R$$total,00";
}
?>