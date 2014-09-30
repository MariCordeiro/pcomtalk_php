<?php
	session_start();
	require "config.php";
	if (!isset($_SESSION['user_session']) && (!isset($_SESSION['pwd_session']))) {
		header("Location: index.php");
	}else{
?>
<html>
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8" />
	<title>PCOM TALK</title>
	<link rel = "stylesheet" type = "text/css" href = "stylePainel.css">
	<script language= 'javascript'>
		function deleta(){
			if(confirm("Tem certeza que deseja excluir esta mensagem?")){
				return true;
			}else{
				return false;
			}
		}
	</script>
</head>
<body>
	<div id = "topo" style = "clear:both"></div>
	<div id = "topoInterno"><img id = "img1" src = "logo.jpg"><p id = "text2"><b>PCOM TALK.</b> MENSAGENS INSTANTÂNEAS E MAIS.</p></div>
	<div id = "tabela">
		<form method = "post">
				<?php
					$sql = "SELECT usuarios.nome, usuarios.email, dados.id_msg, dados.data FROM dados LEFT JOIN usuarios ON usuarios.id_login = dados.id_usuario WHERE dados.id_usuario = '$_SESSION[id_session]' ORDER BY dados.data DESC";
					$res = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());

				?>
				<table id = 'listar_table'>
					<thead>
						<tr>
							<th>Nome:</th>
							<th>Email:</th>
							<th>Data:</th>
							<th>Ações:</th>
						</tr>
					</thead>
				</table>
				<div class = "scrollContainer">
				<table>	
				<?php while ($sql = mysql_fetch_array($res)) {?>
						<tbody>
							<tr>
								<td><?php echo $nome = $sql['nome']; ?></td>
								<td><?php echo $email = $sql['email']; ?></td>
								<td><?php echo $data = date("d/m/Y", strtotime($sql["data"])); ?></td>
								<td>
									<?php echo "<a href='visualizar.php?id=$sql[id_msg]'><img title='Visualizar' src = 'bt_visualizar.jpg'></a>";
										echo "<a href='editar.php?id=$sql[id_msg]'><img title='Editar' src = 'bt_editar.jpg'></a>";
										echo "<a href='delete.php?id=$sql[id_msg]'><img title='Deletar' src = 'bt_excluir.jpg' onclick='return deleta();'></a>"; ?>
								</td>
							</tr>
						</tbody>
				<?php }if(empty($user) && empty($email) && empty($data)) {
							echo "<p style = 'text-align: center; font-family: Cursive;'>Caixa de mensagens vazia!</p>";
					}?>
				</table>
				</div>
		</form>
	</div>
	<div style = "text-align: right; width: 984; margin: 0 auto;"><tr>
		<td><a href = "novamsg.php"><input type = "button" value = "criar nova mensagem" id = "btn"/></a></td>
	</tr></div>
	<div id = "rodape"><img id = "img2" src = "rodape.jpg"></div>
</body>
</html>
<?php } ?>