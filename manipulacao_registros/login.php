<?php
    //*** Prepara a Sessão ***
    require_once("includes/prepara_sessao.inc.php");

    //*** Abre a Conexão ***
	require_once("includes/abre_conexao.inc.php");

	//*** Se o usuário clicou no botão btnAlterar desta página ***
	//*** Método POST ***
	$btnLogin = $_POST["btnLogin"];

	if( trim($btnLogin) == 'Entrar')
	{
		//*** Recupera o campo txtCGM***
		$txtCGM = $_POST["txtCGM"];

		//*** Recupera o campo txtNome***
		$txtNome = $_POST["txtNome"];

		//*** Comando SQL para ser executar no SQL Server ***
		$Comando_SQL = "SELECT * FROM alunos WHERE cgm='" . trim($txtCGM) . "' AND nome='" . trim($txtNome) . "'";

		//*** Resultado do Comando Executado no SQL Server ***
		//*** Neste processo é criado um "RecordSet" que nada mais é do que a cópia da Tabela. ***
		$Resultado_SQL = mssql_query($Comando_SQL);

		//*** Retorna o Número de Registros da Tabela escolhida ***
		$numRegistros = mssql_num_rows($Resultado_SQL);

		//*** Verifica se a Tabela não está vazia ***
		if($numRegistros != 0)
		{
		   //*** Cria a Sessão para este Usuário ***
		   $_SESSION['identificacao_sessao']['autorizado'] = true;

	   		//*** Redireciona para a Página de Utilização ***
   	   		echo '<meta http-equiv="refresh" content="0;url=cadastro.php">';
		}
		else
		{
		  	//*** Destroi a Sessão ***
			session_destroy();

 			echo "<script>alert('Usuário ou Senha não estão Corretos!');</script>";
		}
	}
?>

<!doctype html>
<html>
	<head>
		<title>Cadastro de Registros</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form name="frmLogin" id="frmLogin" action="login.php" method="post">
			<fieldset>
				<legend>Login</legend>

					<p>					
					<label for="txtCGM">CGM:</label>
					<input type="text" name="txtCGM" id="txtCGM" value=""></input>
					</p>

					<p>
					<label for="txtNome">Nome:</label>
					<input type="password" name="txtNome" id="txtNome" value=""></input>
					</p>

					<p>
					<input type="submit" name="btnLogin" id="btnLogin" value="Entrar"></input>
					</p>
			</fieldset>
		</form>
	</body>
</html>

<?php
	//*** Fecha a Conexão com o BD ***
	require_once("includes/fecha_conexao.inc.php");
?>