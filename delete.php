<?php
	session_start();
	require "config.php";
	if (!isset($_SESSION['user_session']) && (!isset($_SESSION['pwd_session']))) {
		header("Location: index.php");
	}else{
		$id = $_GET['id'];
		$sql = mysql_query("DELETE FROM dados WHERE id_msg = '$id'");
		if($sql){
			echo "<script>alert('Mensagem deletada com sucesso!');history.back();</script>";
			header("Location: painel.php");
		}else{
			 echo "<script>alert('Ocorreu erro.');history.back();</script>";	
		}
	}
?>