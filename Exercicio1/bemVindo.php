<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <link href="css/login.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id="geral">
  <section id="conteudo">
    <table>
      <tr>
        <td>
          <?php
            // Inicializa a variável $username
            $username = '';

            // Verifica se os dados do formulário foram enviados
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Obtém o nome de usuário enviado pelo formulário
              $username = isset($_POST['username']) ? $_POST['username'] : '';

              // Simula uma lista de usuários cadastrados no sistema
              $usuarios_cadastrados = array(
                "Nanda" => "123",
                "Amanda" => "123"
              );

              $password = isset($_POST['password']) ? $_POST['password'] : '';

              // Verifica se o usuário e a senha correspondem aos cadastrados
              if (array_key_exists($username, $usuarios_cadastrados) && $usuarios_cadastrados[$username] == $password) {
                // Usuário autenticado com sucesso
                echo "<p>Bem-vindo ao sistema</p>";
              } else {
                // Usuário não autenticado
                echo "<p>Você não tem acesso ao sistema</p>";
              }
            } else {
              // Caso o formulário não tenha sido enviado
              echo "<p>Por favor, preencha o formulário</p>";
            }
          ?>
        </td>
      </tr>
    </table>   
  </section>
</div>
</body>
</html>
