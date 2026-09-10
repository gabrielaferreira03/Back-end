<?php

$seguidores = ["jonas72","Maria_rita","g.silva0312"];
$soma = 0;

foreach($seguidores as $pessoas){
    echo "$pessoas <br>";
    $soma = $soma + 1;
}
echo "$soma";
echo "A primeira posição da lista é: $seguidores[0]";

?>