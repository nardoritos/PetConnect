<?php
    require_once("includes/abre_conexao.inc.php");
    $Comando_SQL = "SELECT * FROM tb_docao_TCC";
    $Resultado_SQL = mssql_query($Comando_SQL);
    $numRegistros = mssql_num_rows($Resultado_SQL);
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
                        <li><a href="sessao_sair.php" class="link">Sair</a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <main>
               
                    <?php
                
                        $data = "21/06/2017";
                        if($numRegistros = 0){
                            echo "<div class ='anunciosholder'>
                            <form>
                                <fieldset>
                                    <div class='anuncio'>
                                        <div style='background-image: url(../assets/<?php echo $foto?>.jpg), url(../assets/catchoro2.jpg);' class='anuncioimg' ></div>
                                    </div>
                                    <div class='desc'>
                                    <h2>Não há nenhum registro :(</h2>

                            ";
                        }
                        else
                            {
                                while($linhaRegistro = mssql_fetch_array($Resultado_SQL)){
                            echo "
                            <div class='anunciosholder'>
                                <form>
                                    <fieldset>   
                                        <div class='anuncio'>
                                            <a href='anuncio.php?anuncioimg=Sim&id=" . $linhaRegistro[id] . "' target='_blank'><div style='background-image: url(../assets/<?php echo $linhaRegistro[img1]?>.jpg), url(../assets/catchoro2.jpg);' class='anuncioimg' ></div></a>
                                        </div>
                                        <div class='desc'>
                                            <a href='anuncio.php?anuncioimg=Sim&id=" . $linhaRegistro[id] . "'><h1>$linhaRegistro[raca]</h1></a>
                                            <h2>$linhaRegistro[apelido]</h2>
                                            <h3>$linhaRegistro[cor_pelo]</h3>                                            
                                            <span>$data - $linhaRegistro[id]</span>
                                        </div>                                  
                                    </fieldset>
                                </form>
                            </div>
                            </div>
                            ";
                            }
                        }
                    ?>
                </div>
            
        </main>
  


        <footer>
            <p>Site criado pelo grupo favorito do Sr. Tadeu</p>

        </footer>
    </body>


</html>
