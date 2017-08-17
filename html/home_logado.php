    <?php
    require_once("includes/abre_conexao.inc.php");

    session_start();
    if($_SESSION['indentificacao']['autorizado']!=false)
    {
        header("location:entrar.php");
    }
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

                    <a href="home_logado.php"><img id="logo" src="../assets/LOGO.png" alt=""></a><br><br>
			 	<nav id="menu">
			 		<ul>
                        <li><a href="contato.php" class="link" id="contato">Quem somos</a></li>
			 			<li><a href="sessao_sair.php" class="link">Sair</a></li>

			 		</ul>
			 	</nav>
			 </div>
			
		</header>
	  
    	 <main>
            
             <div class="apresentacao"> 
                <h1>Pet Connect</h1><br>
                <h3>Onde os animais têm preferência!</h3></br>

            </div>
        <section class="content">
            <div class="card">
                <div class="center_img">
                    <a href="doacao.php"><img id="doggo" src="../assets/catito.jpg"></a>
                </div>
                <h1>Doação</h1>
                <p>Saiba o que é necessário para doar um animal!</p>
                 <a href="doacao.php"><img id="mais" src="../assets/mais.png"></a>
            </div>

            <div class="card">
                <div class="center_img">
                   <a href="#"><img id="doggo" src="../assets/sos-animais.jpg"></a>
                </div>
                <h1>Novidades</h1>
                <p>Confira os recentes eventos da ONG dos Animais!</p>
                 <a href="#"><img id="mais" src="../assets/mais.png"></a>
            </div>

            <div class="card">
                <div class="center_img">
                    <a href="adocao.php"><img id="doggo" src="../assets/cat.jpg"></a>
                </div>
                <h1>Adoção</h1>
                <p>Saiba o que é necessário para adotar um novo amiguinho!</p>
                <a href="adocao.php"><img id="mais" src="../assets/mais.png"></a>
            </div>
        </section>
    
    </main>
  

    	<footer>
    		<p>Site criado pelo grupo favorito do Sr. Tadeu</p>

    	</footer>
	</body>
	
	
</html>