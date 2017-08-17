<?php
    require_once("includes/abre_conexao.inc.php");
    $btnDoacao = $_POST["btnDoacao"];
    if(trim($btnDoacao) == 'Cadastrar')
    {
        //*** Recupera o campos txtNome e txtCGM ***
        $especie = $_POST["especies"];
        $txtNome = $_POST["txtNome"];
        $txtRaca = $_POST["txtRaca"];
        $txtIdade = $_POST["txtIdade"];
        $txtPelo = $_POST["txtPelo"];
        $vacina = $_POST["vacina"];    
        $txtDescricao = $_POST["txtDescricao"];
        
        //*** Comando SQL para ser Inserir na Tabela do SQL Server ***
        //*** O Comando TRIM remove os espaços Brancos do início e do final ***
        
            $Comando_SQL = "INSERT INTO tb_docao_TCC (especie, apelido, raca,  idade, cor_pelo, vacinado, descricao) values ('$especie', '$txtNome', '$txtRaca', '$txtIdade', '$txtPelo', '$vacina', '$txtDescricao')";
            mssql_query($Comando_SQL);
            echo "<script>alert('Cadastrado com Sucesso!')</script>";
                
                
        //*** Executa o Comando preparado para a Inclusão ***
        //*** @ - Não exibe erros do comando que ele está na frente ***
        //*** mssql_get_last_message() - Exibe o erro ocorrido na tabela ***
        //mssql_query($Comando_SQL) or die("Não foi possível incluir o registro! - Erro:" .  mssql_get_last_message());
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
        <div class="doacao">
    		<form name="frmDoacao" id="frmDoacao" action="doacao.php" method="post">

            <fieldset>
                <legend><h3 class ="legenda">Doação de Pet</h3></legend>
                
                <div class = selecaoespecie ><p class="especieparagrafo">Espécie do Pet:</p>
                <ul class="especie">
                    <li class="especies gato">
                        <input name="especies" type="radio" value="gato" id="gato">
                        <label for="gato">Gato</label>
                    </li>

                    <li class="especies catchoro">
                        <input name="especies" type="radio" value="cachorro" id="catchoro">
                        <label for="catchoro">Cachorro</label>
                    </li>
                </ul>
                </div><br>
                Nome ou Apelido:<input type="text" name="txtNome" id="txtNome" size=30 maxlength="30">
                Raça:<input type="text" name="txtRaca" id="txtRaca" maxlength="30">
                <br>
                Idade:<input type="text" name="txtIdade" id="txtIdade" maxlength="2" size=2 onkeypress='return SomenteNumero(event)'>
                Cor do pelo:<input type="text"  name="txtPelo" id="txtPelo" maxlength="30" size=20>
                Vacinado?
                <input type="radio" name="vacina" value="sim" id="sim">Sim
                <input type="radio" name="vacina" value="nao" id="nao">Não
                <br>
                Descrição:<br><textarea onkeyup="auto_grow(this)" name="txtDescricao" id="txtDescricao" placeholder="Uma descrição sobre seu pet, doenças, preferências, gostos e informações adicionais no geral."></textarea><br>

                <p>
                    <img class="imagemad" src="" name="img1" value="">
                    <img class="imagemad" src="" name="img2" value="">
                    <img class="imagemad" src="" name="img3" value="">
                    <img class="imagemad" src="" name="img4" value="">
                    <img class="imagemad" src="" name="img5" value=""><br><br>
                    <label for="files">Selecione até 5 imagens de seu Pet</label>
                    <input type="file" id="files" accept="image/x-png,image/gif,image/jpeg" multiple>
                </p>

                <input type="submit" name="btnDoacao" id="btnDoacao" value="Cadastrar"></input>
            </fieldset>

        </form>
        </div>


    	</main>
    	<footer>
    		<p>Site criado pelo grupo favorito do Sr. Tadeu</p>

    	</footer>
	</body>
</html>