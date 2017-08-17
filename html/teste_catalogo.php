<?php
	require_once("includes/abre_conexao.inc.php");
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
				$Comando_SQL = "SELECT * FROM tb_animais_TCC";

				//*** Resultado do Comando Executado no SQL Server ***
				//*** Neste processo é criado um "RecordSet" que nada mais é do que a cópia da Tabela. ***
				$Resultado_SQL = mssql_query($Comando_SQL);

				//*** Retorna o Número de Registros da Tabela escolhida ***
				$numRegistros = mssql_num_rows($Resultado_SQL);
				?>

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
					echo '<th>Nome do Animal</th>';
					echo '<th>Raça</th>';
					echo '<tr>';

					//*** Lista os Registros do Record Set, neste caso é o $Resultado_SQL ***
					while($linhaRegistro = mssql_fetch_array($Resultado_SQL))
					{
						echo "<tr>";
						echo "<td>" . $linhaRegistro[nome] . "</td>";
						echo "<td>" . $linhaRegistro[raca] . "</td>";
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