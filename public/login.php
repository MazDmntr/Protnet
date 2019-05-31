<?php 
    require_once("../banco/conexao/conexao.php");
    
    if(isset($_POST["nomedeusuario"])){
        $nomeusuario = $_POST["nomedeusuario"];
        $senha = $_POST["senha"];

        $login  = "SELECT * ";
        $login .= "FROM usuario ";
        $login .= "WHERE nomeusuario ='$nomeusuario' and senha = '$senha'";

        $acesso = mysqli_query($conecta, $login);
        
        if (!$acesso){
            die("Falha na consulta ao banco de dados.");
        }

        $informacao = mysqli_fetch_assoc($acesso);

        if(empty($informacao)){
            $mensagem = "Login sem sucesso";
        }else{
            $_SESSION["user_portal"] = $informacao["usuarioid"];
            header("location:index_usuario.php");
        }
    }
?>
<!doctype HTML>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="estilo/login.css" rel="stylesheet">
        <link rel="icon" href="img/favicon.jpg" type="image/gif" sizes="16x16">
        <title>Protnet - Seu registro em segurança</title>
    </head>
    <body>
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
                        
                        <a href="index.php" class="navbar-brand">
                            Prot<span style="color:darkred;">Net<span>
                        </a>
                    </div>

                    
                    <div class="collapse navbar-collapse pull-right" id="movelmenu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="quem-somos.php">Quem Somos?</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            <li><a href="cadastro.php">Cadastro</a></li>                
                        </ul>
                        <a href="login.php"><button type="button"
                                class="btn btn-danger navbar-btn">Login</button></a>             
                    </div>
                </section>
            </nav>
            <section>
                <div class="container">
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <form action="login.php" method="post">
                            <h2>Login</h2>
                            <div class="form-group">
                                <label for="nome">Nome de Usuario</label>
                                <input type="text" id="nome" class="form-control " placeholder="Nome de Usuario" name="nomedeusuario" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" class="form-control" placeholder="Senha" name="senha">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="enviar" value="Enviar">
                            </div>
                        <p style = "font-weight: bold"><?php if(isset($mensagem)) echo $mensagem;?></p>
                            <p>Ainda não possue acesso?<a href="cadastro.php"> Clique aqui e cadastre-se</a></p>
                        </form>
                    </div>
                </div>
            </section>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>
<?php
    mysqli_close($conecta);
?>