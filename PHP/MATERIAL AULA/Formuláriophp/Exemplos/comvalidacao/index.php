<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<title> Formulário HTML </title>
		
		<style>
		label{
			display: block;
		}
		</style>
	</head>
	
	<body>
		<form action="enviar.php" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" required> <br>
			
			<label for="idade">Idade:</label>
			<input type="number" name="idade" id="idade" required> <br>
			
			<label for="site">Site: </label>
			<input type="url" name="site" id="site" required> <br>
			
			<label for="email">Email: </label>
			<input type="email" name="email" id="email" required> <br>
			
			<label for="mensagem">Mensagem: </label>
			<textarea name="mensagem" id="mensagem" required></textarea> <br>
			
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>