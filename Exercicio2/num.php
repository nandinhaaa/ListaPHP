<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Identificar Maior Número</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Identificar o Maior Número</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" required><br><br>
    
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" required><br><br>

    <label for="num3">Número 3:</label>
    <input type="number" name="num3" required><br><br>

    <input type="submit" value="Identificar Maior Número">
  </form>

  <?php
  // Verifica se os dados do formulário foram enviados
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os números enviados pelo formulário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Identifica o maior número
    $maior = $num1;
    if ($num2 > $maior) {
      $maior = $num2;
    }
    if ($num3 > $maior) {
      $maior = $num3;
    }

    // Exibe o resultado
    echo "<p>O maior número é $maior</p>";
  }
  ?>
</body>
</html>
