<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Furmulario</title>
</head>
<body>
	<fieldset>
		<legend><h3>Furmulário de Contatos</h3></legend>
		<form method="POST" action="login-php/processaFrom.php"  >
			<label for="nome">Nome:</label><br/>
			<input id="nome" name="nome" type="text" required><br/>			
			<label for="telefone">Telefone:</label><br/>			
			<input id="telefone" name="telefone"  type="tel" required><br/>			
			<label for="email">Email:</label><br/>			
			<input id="email" name="email" type="email" required><br/>
			<label for="senha">Senha:</label><br/>						
			<input id="senha" name="senha" type="password" required><br/>	
			<input type="submit"></a>		
		</form>
	</fieldset>
</body>
</html>