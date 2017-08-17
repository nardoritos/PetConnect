<?php
    //*** Prepara a Sessão ***
    require_once("includes/prepara_sessao.inc.php");
    require_once("includes/valida_sessao.inc.php");

    //*** Abre a Conexão ***
	require_once("includes/abre_conexao.inc.php");

	//*** Alteração de Registros ***
	//*** Método GET ***
	$btnAlterar = $_GET["btnAlterar"];

	//*** Se o botão vier da página "Cadastro.php" ***
	if( trim($btnAlterar) == 'Sim')
	{
		//*** Recupera o campo txtCGM***
		$txtCGM = $_GET["txtCGM"];

		//*** Comando SQL para ser executar no SQL Server ***
		$Comando_SQL = "SELECT * FROM alunos WHERE cgm = '" . trim($txtCGM) . "'";

		//*** Resultado do Comando Executado no SQL Server ***
		//*** Neste processo é criado um "RecordSet" que nada mais é do que a cópia da Tabela. ***
		$Resultado_SQL = mssql_query($Comando_SQL);

		//*** Retorna o Número de Registros da Tabela escolhida ***
		$numRegistros = mssql_num_rows($Resultado_SQL);

		//*** Verifica se a Tabela não está vazia ***
		if($numRegistros != 0)
		{
			//*** Lista os Registros do Record Set, neste caso é o $Resultado_SQL ***
			$linhaRegistro = mssql_fetch_array($Resultado_SQL);

			//*** Recupera o Valor do campo de Nome ***
			$txtNome = $linhaRegistro[nome];
		}
	}

	//*** Se o usuário clicou no botão btnAlterar desta página ***
	//*** Método POST ***
	$btnAlterar = $_POST["btnAlterar"];

	if( trim($btnAlterar) == 'Alterar')
	{
		//*** Recupera o campo txtCGM***
		$txtCGM = $_POST["txtCGM"];

		//*** Recupera o campo txtNome***
		$txtNome = $_POST["txtNome"];

		//*** Comando SQL para ser executar no SQL Server ***
		$Comando_SQL = "UPDATE alunos SET nome = '" . trim($txtNome) . "' WHERE cgm = '" . $txtCGM . "'";

 		//*** Executa o Comando preparado para a Alteração ***
 		//*** @ - Não exibe erros do comando que ele está na frente ***
 		//*** mssql_get_last_message() - Exibe o erro ocorrido na tabela ***
		@mssql_query($Comando_SQL) or die("<script>alert('Não foi possível alterar o registro! - Erro:" .  mssql_get_last_message() . "');window.location.assign('cadastro.php');</script>" );

		echo "<script>alert('Alteração efetuada!');window.location.assign('cadastro.php');</script>";
	}
?>

<!doctype html>
<html>
	<head>
		<title>Cadastro de Registros</title>
		<meta charset="utf-8">
	</head>
	<body>
		<fieldset>
			<legend>Cadastro de Alunos - Alteração</legend>

			<form name="frmCadastro" id="frmCadastro" action="alteracao.php" method="post">
				<fieldset>
					<legend>Alterar o Aluno</legend>

					<p>					
					<label for="txtCGM_Disabled">CGM:</label>

					<!-- *** Campo só para exibição *** -->
					<input type="text" name="txtCGM_Disabled" id="txtCGM_Disabled" value="<?php echo $txtCGM; ?>" disabled></input>

					<!-- *** Campo de Envio para alteração no BD *** -->
					<input type="hidden" name="txtCGM" id="txtCGM" value="<?php echo $txtCGM; ?>"></input>
					</p>

					<p>
					<label for="txtNome">Nome:</label>
					<input type="text" name="txtNome" id="txtNome" value="<?php echo $txtNome; ?>"></input>
					</p>

					<p>
					<input type="submit" name="btnAlterar" id="btnAlterar" value="Alterar"></input>
					</p>
				</fieldset>
			</form>

		</fieldset>
	</body>
</html>

<?php
	//*** Fecha a Conexão com o BD ***
	require_once("includes/fecha_conexao.inc.php");
?>