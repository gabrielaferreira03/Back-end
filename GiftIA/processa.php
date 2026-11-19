<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $gen = $_POST["genero"];
    $id = $_POST["idade"];
    $valor = $_POST["valor"];
    $desc = "";
    $presente = "";

    //MULHER

    //Bebê
    if ($gen == "Mulher" && $id == "Bebê" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Livros infantis, massinha de modelar ou blocos montar.";
    }
    elseif ($gen == "Mulher" && $id == "Bebê" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Uma boneca, uma pelúcia ou um kit de cozinha infantil.";
    }
    elseif ($gen == "Mulher" && $id == "Bebê" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Uma casinha de boneca ou patinete infantil.";
    }
    //Criança
    elseif ($gen == "Mulher" && $id == "Criança" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Cubo mágico, slime ou jogo de cartas.";
    }
    elseif ($gen == "Mulher" && $id == "Criança" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Jogo de tabuleiro ou um quebra-cabeça.";
    }
    elseif ($gen == "Mulher" && $id == "Criança" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Um LEGO, ou um patins.";
    }
    //Adolescente
    elseif ($gen == "Mulher" && $id == "Adolescente" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Gloss, chocolate ou um livro.";
    }
    elseif ($gen == "Mulher" && $id == "Adolescente" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Body Splah, necessaire, brinco ou colar.";
    }
    elseif ($gen == "Mulher" && $id == "Adolescente" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Perfume ou itens de maquiagem.";
    }
    //Jovem
    elseif ($gen == "Mulher" && $id == "Jovem" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Porta-joias pequeno, chocolte ou uma plantinha.";
    }
    elseif ($gen == "Mulher" && $id == "Jovem" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Garrafinha, body splash caderno para anotações.";
    }
    elseif ($gen == "Mulher" && $id == "Jovem" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Perfume ou bolsa.";
    }
    //Adulto
    elseif ($gen == "Mulher" && $id == "Adulto" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Vela aromática, uma plantinha ou um livro.";
    }
    elseif ($gen == "Mulher" && $id == "Adulto" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Uma necessaire, caneca ou uma carteira.";
    }
    elseif ($gen == "Mulher" && $id == "Adulto" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA VOCÊ:";
        $presente = "Um kit de skincare, bolsa ou uma joia(acessórios).";
    }

    //HOMEM

    //Bebê
    if ($gen == "Homem" && $id == "Bebê" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Carrinhos pequenos, livro infantil ou massinha.";
    }
    elseif ($gen == "Homem" && $id == "Bebê" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Kit de ferramentas infantil, kit méidico infantil ou bonequinhos.";
    }
    elseif ($gen == "Homem" && $id == "Bebê" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Pista de carrinhos, bicicleta de equilíbrio ou patinete infantil.";
    }
    //Criança
    elseif ($gen == "Homem" && $id == "Criança" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Cubo mágico, slime ou jogo de cartas.";
    }
    elseif ($gen == "Homem" && $id == "Criança" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Jogo de tabuleiro ou um quebra-cabeça.";
    }
    elseif ($gen == "Homem" && $id == "Criança" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Um LEGO, um patins ou patinete.";
    }
    //Adolescente
    elseif ($gen == "Homem" && $id == "Adolescente" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Um chaveiro legal, livro ou mangá.";
    }
    elseif ($gen == "Homem" && $id == "Adolescente" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Uma camiseta, carteira ou boné.";
    }
    elseif ($gen == "Homem" && $id == "Adolescente" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Caixa de som, teclado gamer ou relógio";
    }
    //Jovem
    elseif ($gen == "Homem" && $id == "Jovem" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Porta-cartôes, um livro ou caneca personalizada";
    }
    elseif ($gen == "Homem" && $id == "Jovem" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Garrafa térmica, óculos de sol ou kit para barba.";
    }
    elseif ($gen == "Homem" && $id == "Jovem" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Tênis, mochila, ou kit de ferramentas.";
    }
    //Adulto
    elseif ($gen == "Homem" && $id == "Adulto" && $valor == "pouco"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Um café especial, livro ou caneca.";
    }
    elseif ($gen == "Homem" && $id == "Adulto" && $valor == "medio"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Um cinto, kit de café, camiseta ou carteira.";
    }
    elseif ($gen == "Homem" && $id == "Adulto" && $valor == "alto"){
        $desc = "BOAS OPÇÕES PARA O SEU PRESENTE:";
        $presente = "Um kit de churrasco, caixa de som, perfume ou relógio.";
    }
    
}

else{
    //Medida de Segurança
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekIA - Especialista Nerd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
</head>

<body>
    <div class="container">
        <img src="gift.png" width="200" alt="GeekIA Logo">
        <h2>💡 Recomendação do GiftIA:</h2>
        <?php echo "Para uma pessoa com as características <strong>$gen - $id </strong> e gastando um valor <strong>$valor</strong>"?>
        <br>
        <br>
        <strong>
        <?php echo $desc; ?>
        </strong>
        <br>
        <?php echo $presente; ?>
    </div>
</body>

</html>