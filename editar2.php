<?php
	session_start();
	require "config.php";
	if (!isset($_SESSION['user_session']) && (!isset($_SESSION['pwd_session']))) {
		header("Location: index.php");
	}else{
		$nome = $_REQUEST['nome'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$msg = $_REQUEST['mensagem'];
		$data = date("Y-m-d");
		if (empty($msg)) {
				echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
		}else{

			$sql = mysql_query("UPDATE dados SET nome = '$nome', email = '$email', data = '$data', mensagem = '$msg' WHERE id_msg = '$id'") or die (mysql_error());
			if(mysql_affected_rows()){
				echo "<script>alert('Alterado');</script>";
				header("Location: painel.php");	
			}else{
				echo "<script>alert('Ocorreu erro.');history.back();</script>";
			}
		}
	}
?>