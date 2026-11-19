<?php
$nome_cliente= $_POST ["nome"];
$idade_cliente= $_POST ["idade"];
$servico= $_POST ["servico"];

echo "Olá, $nome_cliente!<br>";

if($servico==1){
    echo "Você irá fazer um CORTE, no valor de R$30,00. ✂️";
}
elseif($servico==2){
    echo "Você irá fazer a BARBA, no valor de R$20,00. ✂️";
}
elseif($servico==3){
    echo "Você irá fazer um combo de CORTE+BARBA, no valor promocional de R$45,00. ✂️";
}
else{
    echo "Serviço não encontrado.";
}
?>