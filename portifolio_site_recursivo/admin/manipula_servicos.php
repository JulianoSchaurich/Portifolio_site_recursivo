<?php
    session_start();
    include_once("validar_cookie.php");
    include_once("..\dao\manipula_dados.php");
    $opcao = $_POST["opcao"];
    
    if ($opcao == 'atualizar') {
        // atualizar
        $id = $_POST["id"];
        $nome = $_POST["txt_nome"];
        $nome_arquivo = $_POST["txt_nome_arquivo"];
        
        $manipula = new manipula_dados();
        $manipula->update_servicos($id, $nome, $nome_arquivo);
        $_SESSION['id_upgrade'] = "";
        $_SESSION['nome_upgrade'] = "";
        $_SESSION['nome_arquivo_upgrade'] = "";

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=servicos");
        exit();
    }
    else if ($opcao == 'deletar') {
        // deletar
        $id = $_POST["id"];

        $manipula = new manipula_dados();
        $manipula->set_table("servicos");
        $manipula->set_fieldid("id");
        $manipula->set_valueid("'$id'");
        $manipula->delete();

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=servicos");
        exit();
    }
    else if($opcao == 'inserir'){
        //inserir
        $nome = $_POST["txt_nome"];
        $nome_arquivo = $_POST["txt_nome_arquivo"];

        $manipula = new manipula_dados();
        $manipula->set_table("servicos");
        $manipula->set_fields("nome, nome_arquivo");
        $manipula->set_dados("'$nome', '$nome_arquivo'");
        $manipula->insert();

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=cadastrar_servicos");
        exit();
    }
    else if($opcao == 'pagina_atualizar_servicos'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $nome_arquivo = $_POST['nome_arquivo'];
        
        $_SESSION['id_upgrade'] = $id;
        $_SESSION['nome_upgrade'] = $nome;
        $_SESSION['nome_arquivo_upgrade'] = $nome_arquivo;

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=atualizar_servicos");
        exit();
    }
    
?>