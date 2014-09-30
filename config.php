<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
	$con = @mysql_connect("localhost", "root", "") or die("Não foi possível conectar com o servidor de dados!");
	mysql_select_db("banco2", $con) or die("Banco de dados não localizado");
?>