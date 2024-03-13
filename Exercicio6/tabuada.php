<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tabuada Interativa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Tabuada Interativa</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number">Digite um número de 1 a 10:</label>
    <input type="number" name="number" min="1" max="10" required><br><br>
    <input type="submit" value="Mostrar Tabuada">
  </form>

  <?php
  // Verifica se os dados do formulário foram enviados
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número enviado pelo formulário
    $numero = $_POST['number'];

    // Exibe a tabuada correspondente ao número
    for ($i = 1; $i <= 10; $i++) {
      echo "<p>$numero X $i = ";
      
      // Exibe a explicação do resultado
      if ($i == 1) {
        echo "$numero";
      } else {
        echo "$numero é somado $i vezes: ";
        for ($j = 1; $j <= $i; $j++) {
          if ($j < $i) {
            echo "$numero + ";
          } else {
            echo "$numero = " . ($numero * $i);
          }
        }
      }
      echo "</p>";
    }
  }
  ?>
</body>
</html>
