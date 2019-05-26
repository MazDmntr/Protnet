<?php 
    $servidor   = "localhost";
    $usuario    = "root";
    $senha      = "";
    $banco      = "protnet_bd";
    $conecta    = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
      die("Conexão falhou: " . mysqli_connect_errno());
    }

?>
