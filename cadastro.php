<?php
	session_start();
	require "config.php";
	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
	$user = $_REQUEST['usuario'];
	$pwd = $_REQUEST['senha'];
	if(empty($nome)){
		echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<script>alert('Email Inválido. Preencha todos os campos corretamente!'); history.back();</script>";
	}elseif (empty($user)) {
		echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
	}elseif (empty($pwd)) {
		echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
	}else{ 
		$email_check = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE email = '$email'"));
		$usuario_check = mysql_num_rows(mysql_query("SELECT * FROM usuarios WHERE usuario = '$user'"));;
		if (($email_check > 0) && ($usuario_check > 0)) {
			echo "<script>alert('Email e Usuário já existe.'); history.back();</script>";
		}elseif ($email_check > 0){
		    echo "<script>alert('Email já existe.'); history.back();</script>"; 
            unset($email); 
	    }elseif ($usuario_check > 0){
	        echo "<script>alert('Usuário já existe.'); history.back();</script>"; 
            unset($usuario);
		}else{
			mysql_query("INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('$nome', '$email', '$user', '$pwd')") or die(mysql_error());
			$rows = mysql_query("SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pwd'");
			if (mysql_num_rows($rows) == 1) {
        	$sql = mysql_fetch_array($rows);
        	$_SESSION['id_session'] = $sql['id_login'];
			$_SESSION['user_session'] = $user;
			$_SESSION['pwd_session'] = $pwd;
			echo "<meta http-equiv = 'refresh' content = '0, url = painel.php'>";
			}else{
				echo "<script>alert('Erro ao cadastrar usuário!');history.back();</script>";
			}
		}
	}
?>