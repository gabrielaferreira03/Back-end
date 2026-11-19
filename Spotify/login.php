<?php

$email= $_POST["email"];
$senha= $_POST["senha"];

$usuarios= file("usuarios.txt");

foreach ($usuarios as $usuario){
    $dados= explode("|", $usuario);

    if ($email == $dados[1] && $senha == $dados[2]) {
        header("Location: inicio.html");
        exit;
    }
}
echo "E-mail ou senha incorretos. <br>";
echo '<a href="login.html">Tentar Novamente</a>';
?>