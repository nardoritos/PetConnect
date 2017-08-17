<?php
	//*** Fechar a Conexão com o Banco de Dados e tirar da memória o Resultado SQL ***
	if( !empty($Resultado_SQL) )
	{
		//*** Limpa o que chamamos de Record Set (Resultado dos registros)  ***
		@mssql_free_result($Resultado_SQL);
	}

    //*** Fecha a Conexão com o Banco de Dados ***
	@mssql_close($nro_conexao);

	//*** Limpa a Variável (Record Set) de Resultado ***
	$Resultado_SQL = null;
?>