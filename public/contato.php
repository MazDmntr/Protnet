<?php 
    require_once("../banco/conexao/conexao.php");

    if(isset($_POST["nome"])){
        $nome           = $_POST["nome"];
        $email          = $_POST["email"];
        $texto          = utf8_encode($_POST["texto"]);

        $inserir = "INSERT INTO contato(nome,email,texto) VALUES ('$nome','$email','$texto')";
        $operação_inserir = mysqli_query($conecta , $inserir);
        
        if(!$operação_inserir){
            die("Erro no banco: " . mysqli_error($operação_inserir));
        } else {
            header("Location: contato.php?mensagem=ok");
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
                            <li class="active"><a href="contato.php">Contato</a></li>
                            <li><a href="cadastro.php">Cadastro</a></li>                
                        </ul>
                        <a href="login.php"><button type="button"
                                class="btn btn-danger navbar-btn">Login</button></a>                  
                    </div>
                </section>
            </nav>
            <section>
                <div class="container">
                    <div class="col-sm-6 col-md-4 col-lg-7">
                        <form action="contato.php" method="post">
                            <h2>Contate</h2>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" class="form-control " placeholder="Nome" name="nome" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email"class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea id="descricao" class="form-control" name="texto"></textarea>
                            </div>
                            <div class="form-group">

                            <p style="color:green">
                                <?php
                                    if(isset($_GET["mensagem"])){
                                        echo "Mensagem enviada com sucesso.";
                                    }
                                ?>
                            </p>
                                <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-5">
                        <h1>Prot<span style="color:darkred">Net</span></h1>
                        <h4>Nos preocupamos com você.</h4>
                        <p>Aqui você pode enviar uma mensagem sem sequer possuir cadastro, fazendo perguntas, criticas, sugestões, etc. as quais serão acatadas pela nossa equipe e analisadas a fim de serem devidamente respondidas.</p>
                        <p>Caso queira se cadastrar gratuitamente como cliente e ter acesos a varios recursos que serão disponiblizados clique no botão abaixo:</p>
                        <a href="cadastro.php"><input type=button class="btn btn-danger" value="Cadastrar-se"></a> 
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