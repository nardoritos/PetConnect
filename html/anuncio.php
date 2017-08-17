<?php
	require_once("includes/abre_conexao.inc.php");
	$anuncioimg = $_GET["anuncioimg"];
	$id = $_GET["id"];
		$Comando_SQL = "SELECT * FROM tb_docao_TCC WHERE id = '" . ($id) . "'";
		$Resultado_SQL = mssql_query($Comando_SQL);
	
?>
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
			<main>
		<?php
			while($linhaRegistro = mssql_fetch_array($Resultado_SQL)){
				$foto1 = $linhaRegistro[img1];
				$foto2 = $linhaRegistro[img2];
				$foto3 = $linhaRegistro[img3];
				$foto4 = $linhaRegistro[img4];
				$foto5 = $linhaRegistro[img5];
				$usuario ="nardo";
				$especie = $linhaRegistro[especie];
				$raca = $linhaRegistro[raca];
				$idade =$linhaRegistro[idade];
				$apelido = $linhaRegistro[apelido];
				$descricao = $linhaRegistro[descricao];
				$data= "21/06/2017";
				$cor_pelo = $linhaRegistro[cor_pelo];
				$vacinado = $linhaRegistro[vacinado];	
	   
	   		echo "
            <div class='formulario2'>
       			<form>
       			<h1 class='raca'>$especie</h1>
		            <fieldset>
		                <legend><h3 class ='legendacontato'>$raca</h3></legend>
		                <div class='imagens'>
							<div class='imgs'>
								<a href='../assets/$foto1.jpg' target='_blank'><div style='background-image: url(../assets/$foto5.jpg), url(../assets/catchoro2.jpg);' class='imagensdoanuncio destaque' ></div></a>
								<a href='../assets/$foto2.jpg' target='_blank'><div style='background-image: url(../assets/$foto4.jpg), url(../assets/catchoro.jpg);' class='imagensdoanuncio'></div></a>
								<a href='../assets/$foto3.jpg' target='_blank'><div style='background-image: url(../assets/$foto3.jpg), url(../assets/catchoro.jpg);' class='imagensdoanuncio'></div></a>
								<a href='../assets/$foto2.jpg' target='_blank'><div style='background-image: url(../assets/$foto2.jpg), url(../assets/catchoro.jpg);' class='imagensdoanuncio'></div></a>
								<a href='../assets/$foto1.jpg' target='_blank'><div style='background-image: url(../assets/$foto1.jpg), url(../assets/catchoro.jpg);' class='imagensdoanuncio'></div></a>
							</div>
						</div>
						<div class='desc'>
							<h1>Apelido: $apelido</h1>
							<h2>Idade: $idade anos</h2>
							<h2>Cor do Pelo: $cor_pelo</h2>
							<h2>Vacinado: $vacinado</h2>
							<p>Descrição: $descricao</p>
							<span>Data do Anúncio: $data</span>
							<input id='adotarbtn' type='submit' value='Adotar'>
						</div>									
		            </fieldset>
	            </form>
	        </div>
	        ";
	    }
	        ?>
	        <div class='formulario2'>
	            <form>
	            	<h1>Perfil do Doador</h1>
	            	<fieldset>
	            		<legend>Leonardo Monaco</legend>
	            		<div class='imagens'>
							<div class='imgs'>
								<div style="background-image: url(../assets/<?php echo $usuario?>.jpg), url(../assets/usuario.jpg);" class='imagensdoanuncio contato' ></div></a>
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
						        if ($Complemento !== ""){
						        	echo "
						        	<p>
						        	<b>Telefone:</b> ($DDD1) $Telefone<br>
							        <b>Celular:</b> ($DDD2) $Celular<br>
							        <b>CEP:</b> $CEP<br>
							        <b>Endereço:</b> $Endereco, $Numero($Complemento) $Bairro/$Cidade-$Estado<br>
							        </p>";
						        } 
						        else{
 									echo "
						        	<p>
						        	<b>Telefone:</b> ($DDD1) $Telefone<br>
							        <b>Celular:</b> ($DDD2) $Celular<br>
							        <b>CEP:</b> $CEP<br>
							        <b>Endereço:</b> $Endereco, $Numero - $Bairro/$Cidade-$Estado<br>
							        </p>
						        ";
						        }
						       
							?>
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
