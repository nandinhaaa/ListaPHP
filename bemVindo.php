<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <link href="css/login.css" rel="stylesheet" type="text/css" /> 
</head>
</script>
<body>
<div id="geral">
  <section id="conteudo">
		  <table>
			 <tr>
				<td> 				
				<?php
					//obtém os valores digitados no form
					$valor = $_POST["name"]; //POST É MAIS SEGURO
					echo "<h4>Bem vindo(a):  $valor </h4>";
				?>

<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simula uma lista de usuários cadastrados no sistema
    $usuarios_cadastrados = array(
        "Nanda" => "123",
        "Amanda" => "123"
    );

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $usuarios_cadastrados) && $usuarios_cadastrados[$username] == $password) {
        // Usuário autenticado com sucesso
        echo "<p>Bem-vindo ao sistema</p>";
    } else {
        // Usuário não autenticado
        echo "<p>Você não tem acesso ao sistema</p>";
    }
}
?>


				</td>
			 </tr>
		  </table>	 	
  </section>
</div>


</body>
</html>




