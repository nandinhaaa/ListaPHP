<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Verificar Número Primo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Verificar Número Primo</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number">Digite um número inteiro:</label>
    <input type="number" name="number" required><br><br>
    <input type="submit" value="Verificar Número Primo">
  </form>

  <?php
  // Função para verificar se um número é primo
  function verificarPrimo($numero) {
    // Se o número for menor ou igual a 1, não é primo
    if ($numero <= 1) {
      return false;
    }

    // Verifica se o número é divisível por qualquer número entre 2 e a metade do próprio número
    for ($i = 2; $i <= $numero / 2; $i++) {
      if ($numero % $i == 0) {
        // Se for divisível por algum número diferente de 1 e ele mesmo, não é primo
        return false;
      }
    }

    // Se não for divisível por nenhum número diferente de 1 e ele mesmo, é primo
    return true;
  }

  // Verifica se os dados do formulário foram enviados
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número enviado pelo formulário
    $numero = $_POST['number'];

    // Verifica se o número é primo
    if (verificarPrimo($numero)) {
      echo "<p>O número $numero é primo.</p>";
    } else {
      echo "<p>O número $numero não é primo.</p>";
    }
  }
  ?>
</body>
</html>
