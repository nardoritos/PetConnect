<?php
	require_once("includes/abre_conexao.inc.php");
	$txt_Email = $_POST['txt_email'];
	$txt_Senha = $_POST['txt_senha'];

	$sql = mssql_query("SELECT * FROM tb_cadastro_TCC where email='$txt_Email' and senha='$txt_Senha'");
	$contar = mssql_num_rows($sql);

		if($contar > 0){
			$_SESSION['indentificacao']['autorizado']=true;
			session_start();
			header("location:home_logado.php");
				}
				else
				{
				header("location:entrar.php?senha=errada");
				}
				?>