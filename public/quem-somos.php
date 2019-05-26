<?php 
    require_once("../banco/conexao/conexao.php");
?>
<!doctype HTML>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="estilo/quem-somos.css" rel="stylesheet">
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
                        <li class="active"><a href="quem-somos.php">Quem Somos?</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="cadastro.php">Cadastro</a></li>                
                    </ul>
                    <a href="login.php"><button type="button"
                                class="btn btn-danger navbar-btn">Login</button></a>               
                </div>
            </section>
        </nav>
            <section>
                <div class="container" style="padding-top:50px;">
                    <h1>Prot<span style="color:darkred;">Net</span></h1>
                    <h4>Seu registro em Segurança.</h4>
                </div>
                

                <div class="container" style="margin-top:10px;width:100%;border: solid 1px #d6d4d4;">             
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <h2>Olá,</h2>
                        <p>Este site foi desenvolvido por nós para criar uma solução viável para controle de vendas seja ela de produtos ou serviços, etiquetando todos os processos de forma dinâmica, pois trabalha com sistema de execução na web multiplataforma.</p>
                        <p>A finalidade inicial do produto tem fins de aprendizado sem fins lucrativos, apenas para ganhos pessoais.</p>
                        <p>Somos uma companhia que visa melhorar e implementar cada vez mais tecnlogia a nossas instalações para satisfação do usuário, portanto estamos sempre em evolução, procurando diversidade, praticidade, portabilidade e segurança ao cliente, nosso sistema tem a intenção de trazer agilidade ao dia-a-dia do cliente e nos focamos principalmente neste aspecto.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <img class="img-responsive" src="img/exelencia.jpg" alt="buscando execelência">
                    </div>
                </div>
                <div class="container">
                                
            </div>
            </section>
            <footer>
                <div class="container" style="padding-top:65px;text-align: center;width:100%;background-color:#d82424;color:#fff;padding-bottom:25px">             
                    &copy Todos os direitos reservados<br>
                    Criado e Desenvolvido por Vinicius Oliveira
                </div>
            </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>
<?php
    mysqli_close($conecta);
?>