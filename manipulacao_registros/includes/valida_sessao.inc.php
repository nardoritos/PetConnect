<?php
	//*** Valida a Sessão ***
    if( isset($_SESSION['identificacao_sessao']) )
    {
	   if( $_SESSION['identificacao_sessao']['autorizado'] != true )
	   {
		   //*** Destroi a Sessão ***
		   session_destroy();
		   
           //*** Redireciona para a Página de Identificação ***           
		   echo '<meta http-equiv="refresh" content="0;url=login.php">';
	   }
    }
    else
    {
	  //*** Destroi a Sessão ***
	  session_destroy();
	   
      //*** Redireciona para a Página de Identificação ***
	  echo '<meta http-equiv="refresh" content="0;url=login.php">';
    }
?>