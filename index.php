<html>
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8" />
	<title>PCOM TALK</title>
	<link rel = "stylesheet" type = "text/css" href = "styleindex.css">
</head>
<body>
	<div id = "topo" style = "clear:both"></div>
	<div id = "topoInterno"><img id = "img1" src = "logo.jpg"><p id="text2"><b>PCOM TALK.</b> MENSAGENS INSTANTÂNEAS E MAIS.</p></div>
	<div id = "cadastro">
		<fieldset class = "cad">
			<legend><h3>Cadastro</h3></legend>
			<form method = "post" action = "cadastro.php">
				<table id = "tela_table" class = "cad">
					<tr>
						<th>Nome:</th>
						<td><input type = "text" name = "nome" id = "nome" class = "txt" placeholder = "Nome"></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><input type = "text" name = "email" id = "email" class = "txt" placeholder = "Email"></td>
					</tr>
					<tr>
						<th>Usuário:</th>
						<td><input type = "text" name = "usuario" id = "usuario" class = "txt" placeholder = "Usuário"></td>
					</tr>
					<tr>
						<th>Senha:</th>
						<td><input type = "password" name = "senha" id = "senha" class = "txt" maxlength = "10" placeholder = "Senha"></td>
					</tr>
					<tr>
						<td colspan = "2"><input type = "submit" value = "cadastrar" id = "btn"></td>
					</tr>
				</table>
			</form>
		</fieldset>
		<fieldset class = "log">
			<legend><h3>Login</h3></legend>
			<form method = "post" action = "login.php">
				<table id = "login_table" class = "log">
					<tr>
						<th>Usuário:</th>
						<td><input type = "text" name = "usuario" id = "usuario" class = "txt" placeholder = "Usuário"></td>
					</tr>
					<tr>
						<th>Senha:</th>
						<td><input type = "password" name = "senha" id = "senha" class = "txt" maxlength = "10" placeholder = "Senha"></td>
					</tr>
					<tr>
						<td colspan = "2"><input type = "submit" value = "entrar" id = "btn"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>
	<div id = "rodape"><img id = "img2" src = "rodape.jpg"></div>
</body>
</html>