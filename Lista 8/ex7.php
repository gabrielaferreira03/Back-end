<?php
$senhaCorreta= "1234";
$senha= "1234";
$tentativas= 0;

while ($tentativas<3){
    $tentativas++;

    if($senha== $senhaCorreta){
        echo "Senha correta!Acesso permitido.";
        break;    
    }
    else{
        echo "Senha incorreta!";
    }
}
?>