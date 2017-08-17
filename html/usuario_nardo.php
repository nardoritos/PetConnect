<!DOCTYPE html>
	<head>
    	<title>Pet Connect</title>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" href="../css/responsive-css.css">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="shortcut icon" href="../ico/favicon.ico" >
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
                        <li><a href="sessao_sair.php" class="link">Sair</a></li>
			 		</ul>
			 	</nav>
			 </div>

		</header>
		<?php
		$casal1 ="casal5";
		$casal2="casal4";
		$casal3="casal3";
		$casal4="casal2";
		$casal5 ="casal1";
		$usuario ="nardo";
		?>
	   	<main id="mainanuncio">
	        <div class='formulario2'>
	            <form>
	            	<fieldset>
	            		<legend><h3 class="legendacontato">Perfil do Usuário</h3></legend>
	            		<div class='imagens'>
							<div class='imgs'>
								<a href='usuario_<?php echo $usuario;?>.php' target='_blank'><div style="background-image: url(../assets/<?php echo $usuario?>.jpg), url(../assets/usuario.jpg);" class='imagensdoanuncio contato' ></div></a>
							</div>
						</div>
						<div class='desc'>
							<?php
								$Nome = "Leonardo Putini Ribeiro Monaco";
						        $Email = "portinexd@gmail.com";
						        $CPF = "43964574805";
						        $DDD1 = "11";
						        $Telefone = "49978533";
						        $DDD2 = "11";
						        $Celular = "947943776";
						        $CEP = "09230630";
						        $Endereco = "Rua Clara";
						        $Numero = "268";
						        $Complemento = "";
						        $Bairro = "Camilópolis";
						        $Cidade = "Santo André";
						        $Estado = "SP";
						        echo "
						        	<p>
						        	<b>Nome:</b> $Nome<br>
						       		<b>E-mail:</b> $Email<br>
							        <b>CPF:</b> $CPF<br>
							        <b>Telefone:</b> ($DDD1) $Telefone<br>
							        <b>Celular:</b> ($DDD2) $Celular<br>
							        <b>CEP:</b> $CEP<br>
							        <b>Endereço:</b> $Endereco<br>
							        <b>Número:</b> $Numero<br>
							        <b>Complemento:</b> $Complemento<br>
							        <b>Bairro:</b> $Bairro<br>
							        <b>Cidade:</b> $Cidade-$Estado<br>
							        </p>
						        ";
							?>
							<input id="adotarbtn"type="submit" value="Editar Informações"
						</div>
	            	</fieldset>
	            </form>
            </div>
    </main>


    	<footer>
    		<p>Site criado pelo grupo favorito do Sr. Tadeu</p>

    	</footer>
	</body>


</html>
