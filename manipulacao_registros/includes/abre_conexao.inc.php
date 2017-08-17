<?php
	//*************************************************
	//*** Conexão com o Banco de Dados (SQL Server) ***
	//*************************************************

	//*** Dados do Banco ***
	$dbhost = "192.168.1.71"; //IP do Servidor de BD.
	$db = "aula"; //Nome do Banco de Dados onde estão as tabelas.
	$user = "aula"; //Nome do usuário para conectar ao Banco de Dados.
	$password = "adminclovis"; //Senha do usuário para conectar ao Banco de Dados.

	//*** Comando PHP para conectar ao BD SQL Server ***
	//*** A "@" na frente de um comando PHP faz com que o PHP não retorne erros, se houver! ***
	$nro_conexao = @mssql_connect($dbhost,$user,$password) or die("Não foi possível a conexão com o Servidor!<br>Erro: " . mssql_get_last_message());

	//*** Comando PHP para selecionar o BD onde estão as tabelas a serem utilizadas ***
	@mssql_select_db($db) or die("Não foi possível selecionar o Banco de Dados!<br>Erro: " . mssql_get_last_message());
?>
