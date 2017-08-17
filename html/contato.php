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
                        <li><a href="sessao_sair.php" class="link">Sair</a></li>

			 		</ul>
			 	</nav>
			 </div>
			
		</header>
	  
    	 <main>
            <div class="formulario2">
            <form>

            <fieldset>
                <legend><h3 class ="legendacontato">Nossa História</h3></legend>
                <p>
                    A Pet Connect é uma empresa que tem como seu principal objetivo fazer a conexão entre doadores e pessoas que querem adotar animais de estimação, mais especificamente cães e gatos. Foi criada a partir de um trabalho escolar de 6 amigos, que queriam encontrar uma maneira de fazer o bem a animais de estimação, trazendo conforto e segurança aos usuários. É importante ressaltar que a empresa não tem fins lucrativos e procura apenas beneficiar os animais. O intuito é beneficiar os animais de forma segura. Também procuramos apoiar e divulgar ONGs e campanhas para a arrecadação de alimentos para os bichinhos. :)
                </p>
            </fieldset>

        </form>
        </div>
        <div class="formulario">
            <form action="mensagem.php" method="post">

            <fieldset>
                <legend><h3 class ="legendacontato">Contato</h3></legend>
                Nome:<input type="text" size="40">
                Telefone:<input type="text"><br>
                E-mail:<input type="email" size=40><br>
                Deixe sua mensagem para nós :)<br>
                <textarea onkeyup="auto_grow(this)"></textarea>
                <input type="submit" value="Enviar" id="btnMensagem">
            </fieldset>

        </form>
        </div>

    </main>
  

    	<footer>
    		<p>Site criado pelo grupo favorito do Sr. Tadeu</p>

    	</footer>
	</body>
	
	
</html>