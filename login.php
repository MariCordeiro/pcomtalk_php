<?php
	session_start();
	require "config.php";
	$user = $_REQUEST['usuario'];
	$pwd = $_REQUEST['senha'];
	if(empty($user)) {
		echo "<script>alert('Preencha todos os entrar!'); history.back();</script>";
	}elseif (empty($pwd)) {
		echo "<script>alert('Preencha todos os entrar!'); history.back();</script>";
	}else{
		$rows = mysql_query("SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pwd'");
		if (mysql_num_rows($rows) == 1) {
        	$sql = mysql_fetch_array($rows);
        	$_SESSION['id_session'] = $sql['id_login'];
			$_SESSION['user_session'] = $user;
			$_SESSION['pwd_session'] = $pwd;
			echo "<meta http-equiv = 'refresh' content = '0, url = painel.php'>";
			//echo "<script>alert('Usuário logado com sucesso.'); </script>";
		}else{
			echo "<script>alert('Usuário e senha não corresponde.');history.back();</script>";
		}
	}
?>