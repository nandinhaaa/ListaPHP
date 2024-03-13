<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Calcular Fatorial</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Calcular Fatorial</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number">Digite um número inteiro:</label>
    <input type="number" name="number" required><br><br>
    <input type="submit" value="Calcular Fatorial">
  </form>

  <?php
  // Função para calcular o fatorial de um número
  function calcularFatorial($numero) {
    if ($numero == 0 || $numero == 1) {
      return 1; // O fatorial de 0 e 1 é 1
    } else {
      $fatorial = 1;
      for ($i = 2; $i <= $numero; $i++) {
        $fatorial *= $i;
      }
      return $fatorial;
    }
  }

  // Verifica se os dados do formulário foram enviados
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número enviado pelo formulário
    $numero = $_POST['number'];

    // Calcula o fatorial do número
    $fatorial = calcularFatorial($numero);

    // Exibe o resultado
    echo "<p>O fatorial de $numero é $fatorial</p>";
  }
  ?>
</body>
</html>
