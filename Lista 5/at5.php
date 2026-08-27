<?php
//cadastro funcionário novo no sistema
$nome = "John Wick";
$acesso = 3;

if($acesso == 1){
    echo "Bem-vindo $nome. Você tem Acesso Básico ao Sistema.";
}
elseif($acesso==2){
    echo "Bem vindo $nome. Você tem acesso Intermediário ao Sistema.";
}
elseif($acesso==3){
    echo "Bem vindo $nome. Você tem Acesso de Administrador ao Sistema.";
}
else{
    echo "Erro. Número de acesso inválido.";
}