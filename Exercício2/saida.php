<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link href="css/estiloform.css" rel="stylesheet" type="text/css" />
</head>
</script>

<body>
	<div id="geral">
		<section id="conteudo">
			<table>
				<tr>
					<td>
						<?php
						if (isset($_POST["numero"])) {
							$numero = $_POST["numero"];

							if ($numero % 2 == 0) {
								echo "<p>O número $numero é par.</p>";
							} else {
								echo "<p>O número $numero é ímpar.</p>";
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