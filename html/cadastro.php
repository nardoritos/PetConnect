<?php
    //*** Criei uma Tabela no SQL Server com a Estrutura abaixo: ***
    /*
    CREATE TABLE alunos
    (
        cgm int primary key,
        nome varchar(100)
    )
    */

    //*** Abre a Conexão ***
    require_once("includes/abre_conexao.inc.php");

    //*** Recupera o Envio do Formulário, neste caso está recuperamdo o Botão btnCadastrar, se ele tiver o valor 'Cadastrar' significa que ele foi clicado *** 
    $btnCadastrar = $_POST["btnCadastrar"];

    //*** Inserção de Registros na Tabela
    if(trim($btnCadastrar) == 'Cadastrar')
    {
        //*** Recupera o campos txtNome e txtCGM ***
        $txtNome = $_POST["txtNome"];
        $txtSenha = $_POST["txtSenha"];
        $txtEmail = $_POST["txtEmail"];
        $txtCPF = $_POST["txtCPF"];
        $txtDDD1 = $_POST["txtDDDTelefone"];
        $txtTelefone = $_POST["txtTelefone"];
        $txtDDD2 = $_POST["txtDDDCelular"];
        $txtCelular = $_POST["txtCelular"];
        $txtCEP = $_POST["txtCEP"];
        $txtEndereco = $_POST["txtEndereco"];
        $txtNumero = $_POST["txtNumero"];
        $txtComplemento = $_POST["txtComplemento"];
        $txtBairro = $_POST["txtBairro"];
        $txtCidade = $_POST["txtCidade"];
        $txtEstado = $_POST["txtEstado"];
        
        //*** Comando SQL para ser Inserir na Tabela do SQL Server ***
        //*** O Comando TRIM remove os espaços Brancos do início e do final ***
        $sql = mssql_query("SELECT * FROM tb_cadastro_TCC where CPF=' $txtCPF ' ");
        $contar = mssql_num_rows($sql);
        
        if($contar > 0){
                $mensagem = 'CPF já Cadastrado!!';
                $showMessage =  true;
                }else{
                $Comando_SQL = "INSERT INTO tb_cadastro_TCC values('$txtNome', '$txtSenha', '$txtEmail', '$txtCPF', '$txtDDD1', '$txtTelefone', '$txtDDD2', '$txtCelular', '$txtCEP', '$txtEndereco', '$txtNumero', '$txtComplemento', '$txtBairro', '$txtCidade', '$txtEstado')";
                mssql_query($Comando_SQL);
                echo "<script>alert('Cadastrado com Sucesso!')</script>";
                }
                
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
        <div class="formulario">
    		<form name="frmCadastro" id="frmCadastro" action="cadastro.php" method="post">

            <fieldset>
                <legend><h3 class ="legenda">Cadastrar</h3></legend>
                Nome:<input type="text" required="" name="txtNome" id="txtNome" value="" maxlength="100" size="61"><br>
                Senha:<input type="password" required="" name="txtSenha" id="txtSenha" value="">
                Confirmar senha:<input type="password" required="" name="txtConfirma" id="txtConfirma" value="" onblur=""><br>
                E-mail:<input type="email" required="" name="txtEmail" id="txtEmail" value="" maxlength="100" size="61" size="70"><br>
                DDD Residencial:<input type="text" required="" name="txtDDDTelefone" id="txtDDDTelefone" size="5" value="" maxlength="2" onkeypress='return SomenteNumero(event)'>
                Telefone Residencial:<input type="text" required="" name="txtTelefone" id="txtTelefone" value="" maxlength="8" onkeypress='return SomenteNumero(event)'><br>
		        DDD Celular:<input type="text" required="" name="txtDDDCelular" id="txtDDDCelular" size="5" value="" maxlength="2" onkeypress='return SomenteNumero(event)'>
		        &nbsp &nbsp &nbsp 
                Telefone Celular:<input type="text" required="" name="txtCelular" id="txtCelular" value="" maxlength="9" onkeypress='return SomenteNumero(event)'><br>
		        CPF:<input type="text" required="" name="txtCPF" id="txtCPF" value="" maxlength="9" onkeypress='return SomenteNumero(event)'>
                CEP:<input type="text" required="" name="txtCEP" id="txtCEP" value="" maxlength="8" onkeypress='return SomenteNumero(event)'><br>
                Endereço:<input type="text" required="" name="txtEndereco" id="txtEndereco" value="" maxlength="60" size="45">
                Nº:<input type="text" name="txtNumero" required="" id="txtNumero" value="" size="5" maxlength="5"><br>
                Complemento: <input type="text" name="txtComplemento" id="txtComplemento" value="" size="20" maxlength="50">
                Bairro:<input type="text" required="" name="txtBairro" id="txtBairro" value="" size="20" maxlength="50"><br>
                Cidade:<input type="text" required="" name="txtCidade" id="txtCidade" value="" maxlength="50" size="30">
                Estado:<input type="text" required="" name="txtEstado" id="txtEstado" value="" maxlength="30" size="5"><br>

                <input type="submit" name="btnCadastrar" onclick="funcao1()" id="btnCadastrar" value="Cadastrar"></input>
            </fieldset>

        </form>
        </div>


    	</main>
    	<footer>
    		<p>Site criado pelo grupo favorito do Sr. Tadeu</p>

    	</footer>
	</body>
</html>

<?php
	//*** Fecha a Conexão com o BD ***
	require_once("includes/fecha_conexao.inc.php");
?>