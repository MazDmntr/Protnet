<?php
    require_once("../banco/conexao/conexao.php");
    
    session_start();

    
?>


<html>
    <header>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="estilo/index.css" rel="stylesheet">
        <link rel="icon" href="img/favicon.jpg" type="image/gif" sizes="16x16">
        <title>Protnet - Seu registro em segurança</title>
    </header>
    <body>
        <nav>
            <nav class="navbar navbar-default navbar-fixed-top">
            <section class="container">
                <div class="navbar-header">
                    <button type="button"
                            class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#movelmenu"
                            aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                      
                    
                    <a href="index_usuario.php" class="navbar-brand">
                        <?php
                        if(isset($_SESSION["user_portal"])){
                            echo $_SESSION["user_portal"];
                        }else{
                            echo "sem conteudo";
                        }?>
                        Admin&nbsp;<span style="color:darkred;">Administrador<span>
                    </a>
                </div>

                
                <div class="collapse navbar-collapse pull-right" id="movelmenu">
                    <ul class="nav navbar-nav">
                        <li><a href="protocolos_usuario.php">Protocolos</a></li>
                        <li><a href="editar-cadastro_usuario.php">Cadastro</a></li>
                        <li><a href="historico_usuario.php">Histórico</a></li>
                        <li><a href="consulta-empresas.php">Empresas</a></li>                
                    </ul>
                    <a href="login.php">
                        <button type="button" class="btn btn-danger navbar-btn">Sign Out</button>
                    </a>             
                </div>
            </section>
        </nav>
    </body>
</html>

<?php
    mysqli_close($conecta);
?>