<?php

$idade = 19;
$deficiencia = "sim";
$gestante = "não";

if($idade>=60 || $deficiencia=="sim" || $gestante=="sim"){
    echo "Atendimento Prioritário";
}
else{
    "Atendimento Normal";
}