<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/estiloform.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="tformulario">

		<h1>Classificação numérica</h1>
		<form action="saida.php" method="post">
			<label for="numero">Digite um número inteiro:</label>
			<input type="number" id="numero" name="numero" required>

			<div class="botoes">
				<button type="submit">Verificar</button>
				<input type="reset" value="Limpar" class="botao" />
			</div>
		</form>


		</form>
	</div>
</body>

</html>