<?php 
    require_once("../banco/conexao/conexao.php");

    //pagina inicial do projeto
?>
<!doctype HTML>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="estilo/index.css" rel="stylesheet">
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
                        <li class="active"><a href="index.php">Home</a></li>
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
                <section class="container">
                    <img class="img-responsive" src="img/fundo.png">
                </section>
                <div class="container" style="width:100%;background-color:#d82424;color:#fff;padding-bottom:25px">             
                    
                    <h1>Bem vindo,</h1>
                    <p>Você está em uma plataforma criada com o intuito de organizar solicitações de uma empresa com as solicitações e serviços em aberto.</p>
                    <p>Estamos falando de um sistema completamente automatizado de protocolos de solicitações, que poderão ser criados por um funcionário em nome de sua empresa, onde o cliente criando seu usuario pode acompanhar sua solicitação através de um numero de protocolo, com isso o controle de serviços é muito maior.</p>
                    <p>Para usar é simples, você deve apenas criar um cadastro o qual se encaixa com você e começar a utilizar, seguindo as condições de cada perfil:</p>
                </div>
                <div class="container">
                    
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <img class="img-responsive" src="img/usuario.png">
                    <h2>Cliente</h2>
                    <p>Usuário totalmente gratuido, consegue acessar protocolos vinculados ao seu pedido e acompanhar podendo solicitar alterações no protocolo, tais como: comentários e perguntas.</p>
                </div> 
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <img class="img-responsive" src="img/funcionario.png">
                    <h2>Funcionário</h2>
                    <p>Usuário criado a partir de uma empresa que possui cadastro na ProtNet, perfil que pode além de consultar protocolos vinculados a sua conta pode tambem analisar protocolos vinculados a sua empresa, além de poder solicitar, consultar, comentar e alterar status de suas solicitações.</p>
                </div> 
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <img class="img-responsive" src="img/empresa.png">
                    <h2>Empresa</h2>
                    <p>Tem acesso e controle total atrelados a ela, podendo consultar, alterar, comentar e excluir protocolos que estão abaixo de sua hierarquia.</p>
                </div>                 
            </div>
            </section>
            <footer>
                <div class="container" style="text-align: center;width:100%;background-color:#d82424;color:#fff;padding-bottom:25px">             
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
