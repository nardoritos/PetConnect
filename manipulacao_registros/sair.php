<?php
    //*** A include é um código comum que é utilizado em páginas que preciso.
    //*** Ao contrário de repetir o código eu apenas chamo uma include que já possui o código comum!
    require_once("includes/prepara_sessao.inc.php");
	
    //*** Destroi a Sessão ***
    session_destroy();

	  echo "Você está na página sessao_sair";
		   
    //*** Redireciona para a Página de Identificação ***
    header('Location: login.php');	
?>