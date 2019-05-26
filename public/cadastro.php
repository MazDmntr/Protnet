<?php 
require_once("../banco/conexao/conexao.php");
   
    if(isset($_POST["nome"])){
        $nomeusuario    = $_POST["nomeusuario"];
        $nome           = $_POST["nome"];
        $sobrenome      = $_POST["sobrenome"];
        $email          = $_POST["email"];
        $senha          = $_POST["senha"];
        $confirmasenha  = $_POST["confirmasenha"];

        if($senha==$confirmasenha){
            $inserir = "INSERT INTO usuario(nomeusuario,nome,sobrenome,email,senha) VALUES ('$nomeusuario','$nome','$sobrenome','$email','$senha')";
            $operacao_inserir = mysqli_query($conecta,$inserir);
            
            if(!$operacao_inserir){
                die("Erro no banco: " . mysqli_error($operacao_inserir));
            } else {
                header("Location: login.php");
            }
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
        <link href="estilo/cadastro.css" rel="stylesheet">
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
                            <li class="active"><a href="cadastro.php">Cadastro</a></li>                
                        </ul>
                        <a href="login.php"><button type="button"
                                class="btn btn-danger navbar-btn">Login</button></a>                
                    </div>
                </section>
            </nav>
            <section>
                <div class="container">
                    <div class="col-sm-6 col-md-4 col-lg-8">
                        <form action="cadastro.php" method="post">
                            <h2>Cadastro</h2>
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="Nome de usuario" name="nomeusuario" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome" name="nome">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome">
                            </div>
                            <div class="form-group">
                                <input type="email"  class="form-control" placeholder="E-mail" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" name="senha">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirma senha" name="confirmasenha">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <h1>Prot<span style="color:darkred">Net</span></h1>
                        <h4>Seu registro em Segurança.</h4>
                        <p>Ao se cadastrar no formulario ao lado você terá acesso como cliente com o acesso a processos e protocolos das empresas para acoompanhar tudo remotamente, caso queira cadastrar sua empresa cliente no botão abaixo.</p>
                        <a href="cadastro-empresa.php"><input type=button class="btn btn-danger" value="Cadastrar emrpesa"></a> 
                    </div>
                </div>
            </section>
            <footer class="container" style="text-align: center;width:100%;background-color:#d82424;color:#fff;padding:25px;">             
                    &copy Todos os direitos reservados<br>
                    Criado e Desenvolvido por Vinicius Oliveira
            </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>

<?php
    mysqli_close($conecta);
?>
