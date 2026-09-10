<?php
$senha = "123456";

if (strlen($senha) >= 6) {
    echo "Essa senha é válida!";
}
else {
    echo "A senha deve ter pelo menos 6 caracteres, coloque novamente.";
}
?>