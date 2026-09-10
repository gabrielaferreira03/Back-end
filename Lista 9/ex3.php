<?php

$numeros= [1,2,3,4,5,6,7,8,9,10];

    echo "Os números pares são:<br>";

foreach($numeros as $pares){
    if($pares%2 == 0){
        echo "$pares <br>";
    }    
}
?>