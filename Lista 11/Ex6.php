<?php
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$horas=$_POST["horas"];

$ano= $horas * 365;
$total_dias = $ano/24;
$total_dias = number_format($total_dias, 2);

echo "Você usa o celular $ano horas por ano. <br> O que totaliza $total_dias dias inteiros!<br><br>";

if($idade<18){
    echo "$nome - Curta mais sua adolescência!";
}
else{
    echo "$nome - Desconecte-se para reconectar!";
}
?>