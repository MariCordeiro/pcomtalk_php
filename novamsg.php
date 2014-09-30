<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PCOM TALK</title>
</head>
<body>
	<div id="topo" style="clear:both"></div>
	<div id="topoInterno"><img id = "img1" src="logo.jpg"><p id="text2"><b>PCOM TALK.</b> MENSAGENS INSTANTÂNEAS E MAIS.</p></div>
	<div id = "tabela">
		<fieldset>
			<legend><h3>Nova Mensagem</h3></legend>
			<form method = "post" action = "novamsg2.php">
			<table id = 'new_table'>
				<tr>
					<th>Nome:</th>
					<td><input type = "text" name = "nome" id = "nome" class = "txt"></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><input type = "text" name = "email" id = "email" class = "txt"></td>
				</tr>
				<tr>
					<th>Mensagem:</th>
					<td><textarea name = "mensagem" id = "mensagem" cols = "30" rows = "5" class = "txt"></textarea></td>
				</tr>
				<tr>
					<td colspan = "2"><a href = "painel.php"><input type = "button" value = "cancelar" id = "btn"></a>
						<input type = "submit" value = "enviar" id = "btn">
					</td>
				</tr>
			</table>
			</form>
		</fieldset>
	</div>
	<div id = "rodape"><img id = "img2" src = "rodape.jpg"></div>
</body>
</html>