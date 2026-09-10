<?php

$opcao= 3;
echo '<h1 style = "color:red; "> Netflix </h1> <br>';
echo "1- Assistir Filmes <br>";
echo "2- Assistir Série <br>";
echo "3- Ver minha lista <br>";
echo "4- Sair <br><br>";

switch ($opcao){
    case 1: 
        echo "Abrindo filmes";
        break;
    case 2:
        echo "Abrindo séries";
        break;
    case 3:
        echo "Abrindo sua lista";
        break;
    case 4:
        echo "Obrigado por assistir a Netiflix";
        break;
    defalt:
    echo "Opção inválida";
}