<?php
/* =========================================================
   QUIZ BÁSICO EM PHP — tudo em um arquivo só

   Como funciona:
   1) A pessoa abre a página e vê o formulário (HTML).
   2) Ao clicar em "Ver resultado", o formulário envia os dados
      para este mesmo arquivo (método POST).
   3) O PHP confere as respostas, soma os pontos e mostra a nota.
========================================================= */

// Começamos com os pontos zerados
$pontos = 0;

// Esta variável guarda se o aluno já enviou o formulário
// (isset = "existe?"). O botão "enviar" só existe depois do clique.
$enviou = isset($_POST["enviar"]);

// Só corrigimos se o aluno enviou o formulário
if ($enviou) {

    // Pegamos a resposta de cada pergunta (a, b, c ou d)
    $r1 = $_POST["p1"];
    $r2 = $_POST["p2"];
    $r3 = $_POST["p3"];
    $r4 = $_POST["p4"];
    $r5 = $_POST["p5"];

    // ---- Pergunta 1: resposta certa é "b" ----
    if ($r1 == "b") {
        $pontos = $pontos + 1;
        $msg1 = "✔ Acertou!";
    } else {
        $msg1 = "✘ Errou. A resposta certa era: Faixa de Gaza.";
    }

    // ---- Pergunta 2: resposta certa é "a" ----
    if ($r2 == "a") {
        $pontos = $pontos + 1;
        $msg2 = "✔ Acertou!";
    } else {
        $msg2 = "✘ Errou. A resposta certa era: 7 de outubro de 2023.";
    }

    // ---- Pergunta 3: resposta certa é "b" ----
    if ($r3 == "b") {
        $pontos = $pontos + 1;
        $msg3 = "✔ Acertou!";
    } else {
        $msg3 = "✘ Errou. A resposta certa era: 1948.";
    }

    // ---- Pergunta 4: resposta certa é "c" ----
    if ($r4 == "c") {
        $pontos = $pontos + 1;
        $msg4 = "✔ Acertou!";
    } else {
        $msg4 = "✘ Errou. A resposta certa era: Israel e Egito.";
    }

    // ---- Pergunta 5: resposta certa é "b" ----
    if ($r5 == "b") {
        $pontos = $pontos + 1;
        $msg5 = "✔ Acertou!";
    } else {
        $msg5 = "✘ Errou. A resposta certa era: Jerusalém.";
    }

    // ---- Pergunta 6: resposta certa é "b" ----
    if ($r6 == "b") {
        $pontos = $pontos + 1;
        $msg6 = "✔ Acertou!";
    } else {
        $msg6 = "✘ Errou. A resposta certa era: Jerusalém.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz — EUA x CHINA</title>
  <style>
    body { margin: 0; font-family: 'Segoe UI', Arial, sans-serif;
           background: #fffcea; color: #16202b; line-height: 1.6; }
    
    body {
    background-image: url("euaXchina.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; }

    .pagina { max-width: 860px; margin: 0 auto; padding: 32px 20px 60px; }

    a.voltar { color: #1e4264; font-weight: bold; text-decoration: none; }

    h1 { font-size: 30px; color: #c02222; }

    .cartao { background: #fdfdfd; border: 1px solid #d6e0e8; border-radius: 18px;
              padding: 22px 26px; margin-bottom: 18px;
              box-shadow: 0 8px 24px rgba(0,0,0,.06); }

    .cartao h2 { font-size: 18px; color: #409be5; margin: 0 0 10px; }

    .cartao label { display: block; padding: 6px 0; cursor: pointer; }
    
    .nota { text-align: center; }

    .nota .numero { font-size: 44px; font-weight: bold; color: #1f7a8c; }
    
    .feedback { font-weight: bold; margin: 10px 0 0; }
    
    button { font-family: inherit; font-size: 16px; font-weight: bold;
             padding: 12px 28px; border-radius: 30px; cursor: pointer;
             background: #c02222; color: #fff; border: 2px solid #941111; }
  </style>
</head>
<body>
  <div class="pagina">

    <a class="voltar" href="tema1.html">← Voltar ao tema</a>
    <h1>📝 Quiz: EUA x CHINA</h1>

    <?php
    // Se o aluno já enviou, mostramos a nota no topo
    if ($enviou) {
    ?>
      <div class="cartao nota">
        <div class="numero"><?php echo $pontos; ?> / 5</div>
        <p>
        <?php
        if ($pontos == 5) {
            echo "Perfeito! Você acertou tudo! 🎉";
        } else if ($pontos >= 3) {
            echo "Muito bem! Você foi bem no quiz. 👏";
        } else {
            echo "Vale reler o conteúdo e tentar de novo. 📚";
        }
        ?>
        </p>
      </div>
    <?php
    }
    ?>

    <!-- O formulário envia os dados para este mesmo arquivo -->
    <form method="post" action="quiz.php">

      <!-- ================= PERGUNTA 1 ================= -->
      <div class="cartao">
        <h2>1. Qual é o principal motivo do conflito econômico entre Estados Unidos e China?</h2>
        <label><input type="radio" name="p1" value="a" required> Disputa por território</label>
        <label><input type="radio" name="p1" value="b"> Disputa por poder econômico e tecnológico</label>
        <label><input type="radio" name="p1" value="c"> Conflitos religiosos</label>
        <label><input type="radio" name="p1" value="d"> Diferenças climáticas</label>
        <?php if ($enviou) { echo "<p class='feedback'>$msg1</p>"; } ?>
      </div>

      <!-- ================= PERGUNTA 2 ================= -->
      <div class="cartao">
        <h2>2. O que são tarifas comerciais?</h2>
        <label><input type="radio" name="p2" value="a" required> Impostos cobrados sobre produtos importados</label>
        <label><input type="radio" name="p2" value="b"> Descontos para exportadores</label>
        <label><input type="radio" name="p2" value="c"> Empréstimos internacionais</label>
        <label><input type="radio" name="p2" value="d"> Proibições de viagens</label>
        <?php if ($enviou) { echo "<p class='feedback'>$msg2</p>"; } ?>
      </div>

      <!-- ================= PERGUNTA 3 ================= -->
      <div class="cartao">
        <h2>3. Qual país é um dos maiores parceiros comerciais da China? (E sofre diretamente com esse conflito)</h2>
        <label><input type="radio" name="p3" value="a" required> Portugal</label>
        <label><input type="radio" name="p3" value="b"> Brasil</label>
        <label><input type="radio" name="p3" value="c"> Canadá</label>
        <label><input type="radio" name="p3" value="d"> Egito</label>
        <?php if ($enviou) { echo "<p class='feedback'>$msg3</p>"; } ?>
      </div>

      <!-- ================= PERGUNTA 4 ================= -->
      <div class="cartao">
        <h2>4. Qual setor é um dos principais focos da disputa tecnológica entre EUA e China?</h2>
        <label><input type="radio" name="p4" value="a" required> Turismo</label>
        <label><input type="radio" name="p4" value="b"> Moda</label>
        <label><input type="radio" name="p4" value="c"> Semicondutores e Inteligência Artificial</label>
        <label><input type="radio" name="p4" value="d"> Artesanatos</label>
        <?php if ($enviou) { echo "<p class='feedback'>$msg4</p>"; } ?>
      </div>

      <!-- ================= PERGUNTA 5 ================= -->
      <div class="cartao">
        <h2>5. Como a guerra comercial pode afetar os consumidores?</h2>
        <label><input type="radio" name="p5" value="a" required> Sempre diminui os preços</label>
        <label><input type="radio" name="p5" value="b"> Pode aumentar os preços dos produtos</label>
        <label><input type="radio" name="p5" value="c"> Elimina todos os impostos</label>
        <label><input type="radio" name="p5" value="d"> Acaba com a concorrência mundial</label>
        <?php if ($enviou) { echo "<p class='feedback'>$msg5</p>"; } ?>
      </div>

      <!-- ================= PERGUNTA 6 ================= -->
      <div class="cartao">
        <h2>6. Por que o conflito entre EUA e China afeta outros países?</h2>
        <label><input type="radio" name="p6" value="a" required> Porque os dois países não participam do comércio mundial</label>
        <label><input type="radio" name="p6" value="b"> Porque possuem grande influência na economia e no comércio internacional</label>
        <label><input type="radio" name="p6" value="c"> Porque controlam todos os governos</label>
        <label><input type="radio" name="p6" value="d"> Porque não existem outros parceiros comerciais</label>
        <?php if ($enviou) { echo "<p class='feedback'>$msg5</p>"; } ?>
      </div>

      <!-- O name="enviar" é o que o PHP usa para saber que o botão foi clicado -->
      <button type="submit" name="enviar">Ver resultado</button>
    </form>

  </div>
</body>
</html>