

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
             <div class="apresentacao">
             <br>
             <br>
             <br>
                <h1>Pet Connect</h1><br>
                <h3>Onde os animais têm preferência!</h3></br>
            </div>
        <section class="content">
            <div class="card">
                <div class="center_img">
                    <a href="entrar.php"><img id="doggo" src="../assets/catito.jpg"></a>
                </div>
                <h1>Doação</h1>
                <p>Saiba o que é necessário para doar um animal!</p>
                 <a href="entrar.php"><img id="mais" src="../assets/mais.png"></a>
            </div>

            <div class="card">
                <div class="center_img">
                   <a href="entrar.php"><img id="doggo" src="../assets/sos-animais.jpg"></a>
                </div>
                <h1>Novidades</h1>
                <p>Confira os recentes eventos da ONG dos Animais!</p>
                 <a href="entrar.php"><img id="mais" src="../assets/mais.png"></a>
            </div>

            <div class="card">
                <div class="center_img">
                    <a href="entrar.php"><img id="doggo" src="../assets/cat.jpg"></a>
                </div>
                <h1>Adoção</h1>
                <p>Saiba o que é necessário para adotar um novo amiguinho!</p>
                <a href="entrar.php"><img id="mais" src="../assets/mais.png"></a>
            </div>
        </section>

        <div class='formulario2'>
                <form>
                    <h1>Comentários dos nossos Usuários</h1>
                    <fieldset>
                        <legend>Leonardo Monaco</legend>
                        <div class='imagens'>
                            <div class='imgs'>
                                <div style="background-image: url(../assets/<?php echo $usuario?>.jpg), url(../assets/usuario.jpg);" class='imagensdoanuncio contato' ></div></a>
                            </div>
                        </div>
                        <div class='desc'>

                                    <p>
                                    <b>Telefone:</b> ($DDD1) $Telefone<br>
                                    <b>Celular:</b> ($DDD2) $Celular<br>
                                    <b>CEP:</b> $CEP<br>
                                    <b>Endereço:</b> $Endereco, $Numero($Complemento) $Bairro/$Cidade-$Estado<br>
                                    </p>";
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