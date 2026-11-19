<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$media = ($n1 + $n2 + $n3)/3;

if($media>6){
    echo "Parabéns, você passou com uma nota acima da média!";
}
elseif($media==6){
    echo "Você passou, mas suas notas podem melhorar.";
}
else{
    echo "Você reprovou, suas notas não atingiram a média.";
}
?>