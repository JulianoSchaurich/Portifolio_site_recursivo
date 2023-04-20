<?php
    include_once("..\dao\manipula_dados.php");
    $manipula = new manipula_dados();
    //verifica se a variavel foi iniciada
    if(isset($_COOKIE["nome_usuario"]))
        $nome_usuario = $_COOKIE["nome_usuario"];
    
    if(isset($_COOKIE["senha_usuario"]))
        $nome_usuario = $_COOKIE["senha_usuario"];

    if(!(empty($nome_usuario) or empty($senha_usuario))){

        $linhas = $manipula->validar_login($nome_usuario, $senha_usuario);

        if($linhas == 0){
            setcookie("nome_usuario");
            setcookie("senha_usuario");
            header("location: tela_login.php");
            exit;
        }
    }else{
        header("location: tela_login.php");
        exit;
    }
?>