<?php
$senha = $_GET["senha"];


?>
<!DOCTYPE html>
	<head>
    	<title>Pet Connect</title>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="shortcut icon" href="ico/favicon.ico" >
		<meta charset="utf-8">
		<script type="text/javascript" src="../js/fnNumero.js"></script>
	</head>
	<body>
		<header class ="header">
        
			<div class="logo">

                    <a href="home_deslogado.php"><img id="logo" src="../assets/LOGO.png" alt=""></a><br><br>
			 	<nav id="menu">
			 		<ul>
                        <li><a href="contato.php" class="link" id="contato">Quem somos</a></li>
			 			<li><a href="cadastro.php" class="link">Cadastrar</a></li>
			 			<li><a href="entrar.php" class="link">Entrar</a></li>

			 		</ul>
			 	</nav>
			 </div>
			
		</header>
	
    	<main>
        <div class="formulario">
        <form action="checa.php" method="post">
            <fieldset>
                <legend><h3 class ="legenda">Entrar</h3></legend>
                E-mail:<input type="text" name="txt_email" maxlength="100" size="40"><br>
                Senha:<input type="password" name="txt_senha"><br>
                <?php 
                if($senha=="errada"){
                	echo "<font size='2px'>Conta não encontrada ou senha incorreta!<font><br>";
                }
                ?>
                <a href ="esqueceu_senha.php">Esqueci minha senha</a>
                <br>

                <input type="submit"  value="Entrar" id="botao">
            </fieldset>

        </form>
        </div>
    	</main>
    	<footer>
    		<p>Site criado pelo grupo favorito do Sr. Tadeu</p>

    	</footer>
	</body>
	
	
</html>