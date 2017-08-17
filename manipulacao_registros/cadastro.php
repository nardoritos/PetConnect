<?php
	//*** Criei uma Tabela no SQL Server com a Estrutura abaixo: ***
    /*
    CREATE TABLE alunos
    (
    	cgm int primary key,
    	nome varchar(100)
    )
    */

    //*** Prepara a Sessão ***
    require_once("includes/prepara_sessao.inc.php");
    require_once("includes/valida_sessao.inc.php");

    //*** Abre a Conexão ***
	require_once("includes/abre_conexao.inc.php");

    //*** Recupera o Envio do Formulário, neste caso está recuperamdo o Botão btnCadastrar, se ele tiver o valor 'Cadastrar' significa que ele foi clicado *** 
	$btnCadastrar = $_POST["btnCadastrar"];

	//*** Inserção de Registros na Tabela
	if(trim($btnCadastrar) == 'Cadastrar')
	{
		//*** Recupera o campos txtNome e txtCGM ***
		$txtCGM = $_POST["txtCGM"];
		$txtNome = $_POST["txtNome"];

		//*** Comando SQL para ser Inserir na Tabela do SQL Server ***
		//*** O Comando TRIM remove os espaços Brancos do início e do final ***
		$Comando_SQL = "INSERT INTO alunos(";
		$Comando_SQL = $Comando_SQL . "cgm,";
		$Comando_SQL = $Comando_SQL . "nome) ";
		$Comando_SQL = $Comando_SQL . " VALUES(";
		$Comando_SQL = $Comando_SQL . "'". trim($txtCGM) . "',";
		$Comando_SQL = $Comando_SQL . "'". trim($txtNome) . "')";

 		//*** Executa o Comando preparado para a Inclusão ***
 		//*** @ - Não exibe erros do comando que ele está na frente ***
 		//*** mssql_get_last_message() - Exibe o erro ocorrido na tabela ***
		@mssql_query($Comando_SQL) or die("<script>alert('Não foi possível incluir o registro! - Erro:" .  mssql_get_last_message() . "');window.location.assign('cadastro.php');</script>" );
	}

	//*** Exclusão de Registros ***
	$btnExcluir = $_GET["btnExcluir"];

	if( trim($btnExcluir) == 'Sim')
	{
		//*** Recupera o campo txtCGM***
		$txtCGM = $_GET["txtCGM"];

		//*** Comando SQL para ser Excluir na Tabela do SQL Server ***
		//*** O Comando TRIM remove os espaços Brancos do início e do final ***
		$Comando_SQL = "DELETE FROM alunos ";
		$Comando_SQL = $Comando_SQL . " WHERE ";
		$Comando_SQL = $Comando_SQL . "cgm = '". trim($txtCGM) . "'";

 		//*** Executa o Comando preparado para a Exclusão ***
 		//*** @ - Não exibe erros do comando que ele está na frente ***
 		//*** mssql_get_last_message() - Exibe o erro ocorrido na tabela ***
		@mssql_query($Comando_SQL) or die("Não foi possível Excluir o registro! - Erro:" .  mssql_get_last_message());
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
			<legend>Cadastro de Alunos</legend>

			<form name="frmCadastro" id="frmCadastro" action="cadastro.php" method="post">

			<?php
				//*** Comando SQL para ser executar no SQL Server ***
				$Comando_SQL = "SELECT * FROM alunos";

				//*** Resultado do Comando Executado no SQL Server ***
				//*** Neste processo é criado um "RecordSet" que nada mais é do que a cópia da Tabela. ***
				$Resultado_SQL = mssql_query($Comando_SQL);

				//*** Retorna o Número de Registros da Tabela escolhida ***
				$numRegistros = mssql_num_rows($Resultado_SQL);
				?>

				<fieldset>
					<legend>Cadastrar o Aluno</legend>

					<p>
					<label for="txtCGM">CGM:</label>
					<input type="text" name="txtCGM" id="txtCGM" value=""></input>
					</p>

					<p>
					<label for="txtNome">Nome:</label>
					<input type="text" name="txtNome" id="txtNome" value=""></input>
					</p>

					<p>
					<input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"></input>
					</p>
				</fieldset>

				<?php
				//*** Exibe na Tela a quantidade de Registros da Tabela retornado do Comando SELECT ***
				echo "<fieldset>";
				echo "<legend>Listagem</legend>";
				echo "<h1>Listagem dos Alunos</h1>";
				echo "<h3>Quantidade de Registros: $numRegistros registros!</h1>";
				echo "<h4>Tabela: alunos</h3>";

				//*** Verifica se não retornou zero registros, se retornou zero, quer dizer que a tabela está vazia ***
				if($numRegistros != 0)
				{
					echo '<p>';
					echo '<table border="1">';
					echo '<tr>';
					echo '<th>CGM</th>';
					echo '<th>Nome do Aluno</th>';
					echo '<th>Opção 1</th>';
					echo '<th>Opção 2</th>';
					echo '<tr>';

					//*** Lista os Registros do Record Set, neste caso é o $Resultado_SQL ***
					while($linhaRegistro = mssql_fetch_array($Resultado_SQL))
					{
						echo "<tr>";
						echo "<td>" . $linhaRegistro[cgm] . "</td>";
						echo "<td>" . $linhaRegistro[nome] . "</td>";

						//*** Exclusão ***
						echo "<td>";
						echo "<a href='cadastro.php?btnExcluir=Sim&txtCGM=" . $linhaRegistro[cgm] . "'>Excluir</a>";
						echo "</td>";

						//*** Alteração ***
						echo "<td>";
						echo "<a href='alteracao.php?btnAlterar=Sim&txtCGM=" . $linhaRegistro[cgm] . "'>Alteração</a>";
						echo "</td>";

						echo "</tr>";
					}

					echo '</table>';
					echo '</p>';

					//*** Encerrar a Sessão ***
					echo "<p>";
					echo "<a href='sair.php'>Sair</a>";					
					echo "</p>";
				}
				else
				{
					echo "Esta tabela está vazia!<br>";
				}

				echo "</fieldset>";
			?>

			</form>

		</fieldset>
	</body>
</html>

<?php
	//*** Fecha a Conexão com o BD ***
	require_once("includes/fecha_conexao.inc.php");
?>


Talvez você esteja perdidamente apaixonado, ou talvez você esteja solteiro e pronto para se juntar com alguém à um bom tempo. De qualquer maneira, o que quer que você tenha rolando nesse momento, sentimos em lhe dizer, não se compara ao relacionamento desses cachorrinhos. <br>Moro no Camilópolis próximo à Igreja São Camilo de Lellis.<br>Whatsapp: 11947943776