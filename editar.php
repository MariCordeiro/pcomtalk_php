<?php
	session_start();
	require "config.php";
	if (!isset($_SESSION['user_session']) && (!isset($_SESSION['pwd_session']))) {
		header("Location: index.php");
	}else{
?>
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
			<legend><h3>Editar Mensagem</h3></legend>
			<?php
				$id = $_GET['id'];
				$res = mysql_query("SELECT * FROM dados WHERE id_msg = '$id'") or die (mysql_error());
				$sql = mysql_fetch_array($res); 
			?>
			<form method="post" action="editar2.php">
	        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
	        <table id = 'new_table'>
				<tr>
					<th>Nome:</th>
					<td><input type = "text" name = "nome" id = "nome" class = "txt" readonly = "readonly" value="<?php echo $nome = $sql['nome']; ?>"></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><input type = "text" name = "email" id = "email" class = "txt" readonly = "readonly" value="<?php echo $email = $sql['email']; ?>"></td>
				</tr>
				<tr>
					<th>Mensagem:</th>
					<td><textarea name = "mensagem" id = "mensagem" cols = "30" rows = "5" class = "txt" required><?php echo $msg = $sql['mensagem']; ?></textarea></td>
				</tr>
				<tr>
					<td colspan = "2"><a href = "painel.php"><input type = "button" value = "voltar" id = "btn"></a>
						<input type = "submit" value = "editar" id = "btn">
					</td>
				</tr>
			</table>
			</form>
		</fieldset>
	</div>
	<div id = "rodape"><img id = "img2" src = "rodape.jpg"></div>
</body>
</html>
<?php } ?>