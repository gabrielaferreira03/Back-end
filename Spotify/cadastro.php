<?php

$nome= $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];
$data_nasc= $_POST["data_nascimento"];

$dados = $nome . "|" . $email . "|" . $senha . "|" . $data_nasc . "\n";

$arquivo= fopen("usuarios.txt", "a");

fwrite($arquivo, $dados);
fclose($arquivo);

echo "<h1>Cadastro realizado!</h1>";
echo "<p>Bem-vindo, $nome!</p>";
echo "<a href='login.html'>Ir para o login</a>"
?>