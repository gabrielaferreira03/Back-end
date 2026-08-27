<?php

$nome = "Gabriela";
$senha = "Gabi";
$confirmar_senha = "Gabi";
$data_nasc = "03/12/2009";

if($nome !=0){
   echo "O nome está correto! <br>";
}
else{
    echo "Insira o nome corretamente <br>";
}

if ($senha == $confirmar_senha){
    echo "A senha está correta! <br>";
}
else{
    echo "A senha está incorreta, insira novamente. <br>";
}

echo $data_nasc;

?>