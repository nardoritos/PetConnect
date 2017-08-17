<?php
   //*** A include é um código comum que é utilizado em páginas que preciso.
   //*** Ao contrário de repetir o código eu apenas chamo uma include que já possui o código comum!

   session_start();

   if(!ini_get('register_globals')) 
   {
      $superglobals = array($_SERVER, $_ENV, $_FILES, $_COOKIE, $_POST, $_GET);

      if(isset($_SESSION))
	  {
         array_unshift($superglobals, $_SESSION);
      }
      foreach ($superglobals as $superglobal)
	  {
         extract($superglobal, EXTR_SKIP);
      }
   }
?>