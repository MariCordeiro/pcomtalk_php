<?php
	session_start();
	require "config.php";
	if (!isset($_SESSION['user_session']) && (!isset($_SESSION['pwd_session']))) {
		header("Location: index.php");
	}else{
		$nome = $_REQUEST["nome"];
		$email = $_REQUEST["email"];
		$data = date("Y-m-d");
		$msg = $_REQUEST["mensagem"];
			// Verifica se o nome foi preenchido
		if(empty($nome)){
				echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "<script>alert('Email Inválido. Preencha todos os campos corretamente!'); history.back();</script>";
		}elseif (empty($msg)) {
				echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
		}else{
                $id = $_SESSION['id_session'];
				$query = mysql_query("INSERT INTO dados (nome, email, data, mensagem, id_usuario) VALUES ('$nome', '$email', '$data', '$msg', '$id')") or die(mysql_error());
                echo "<script>alert('Mensagem criada com sucesso!');</script>";
                header('location: painel.php');
		}
	}
?>