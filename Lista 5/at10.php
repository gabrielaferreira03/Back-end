<?php

$peso = 76;
$altura_metros = 1.52;

$imc = $peso / ($altura_metros * $altura_metros);

if($imc>=19 && $imc<=24){
    echo "Você está no Peso Ideal.";
}
elseif($imc>=25 && $imc<=29){
    echo "Você está com Sobrepeso.";
}
elseif($imc>=30 && $imc<=34){
    echo "Você está com Obesidade grau I.";
}
elseif($imc>=35 && $imc<=39){
    echo "Você está com Obesidade grau II";
}
else{
    echo "Você está com Obesidade grau III.";
}