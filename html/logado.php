	<?php
	require_once("includes/abre_conexao.inc.php");

	if($_SESSION['indentificacao']['autorizado']!=true)
	{
		header("location:entrar.php");
	}
	?>

<!DOCTYPE html>
<head>
<title>LOGADO</title>
<meta charset ="utf-8">
</head>
<body>
<h1>Você Está Logado</h1>
</body>
</html>