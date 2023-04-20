<?php
    session_start();
    include_once("validar_cookie.php");
    include_once("..\dao\manipula_dados.php");
    $opcao = $_POST["opcao"];

    if ($opcao == 'atualizar') {
        // atualizar
        $id = $_POST["id"];
        $nome = $_POST["txt_nome"];
        $texto = $_POST["txt_texto"];
        $link = $_POST["txt_link"];
        
        $manipula = new manipula_dados();
        $manipula->update_objetos($id, $nome, $texto, $link);
        $_SESSION['id_upgrade'] = "";
        $_SESSION['nome_upgrade'] = "";
        $_SESSION['texto_upgrade'] = "";
        $_SESSION['link_upgrade'] = "";

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=objetos");
        exit();
    }
    else if ($opcao == 'deletar') {
        // deletar
        $id = $_POST["id"];

        $manipula = new manipula_dados();
        $manipula->set_table("objetos");
        $manipula->set_fieldid("id");
        $manipula->set_valueid("'$id'");
        $manipula->delete();
        ?>
        <div class="alert alert-dark" role="alert">
            A simple dark alert—check it out!
        </div>
        <?php
        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=objetos");
        exit();
    }
    else if($opcao == 'inserir'){
        //inserir
        $nome = $_POST["txt_nome"];
        $texto = $_POST["txt_texto"];
        $link = $_POST["txt_link"];

        $manipula = new manipula_dados();
        $manipula->set_table("objetos");
        $manipula->set_fields("nome, texto, link");
        $manipula->set_dados("'$nome', '$texto', '$link'");
        $manipula->insert();

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=cadastrar_objetos");
        exit();
    }
    else if($opcao == 'pagina_atualizar_objeto'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $texto = $_POST['texto'];
        $link = $_POST['link'];
        
        $_SESSION['id_upgrade'] = $id;
        $_SESSION['nome_upgrade'] = $nome;
        $_SESSION['texto_upgrade'] = $texto;
        $_SESSION['link_upgrade'] = $link;

        header("location: http://localhost/site_tema_livre/admin/admin.php?secao=atualizar_objetos");
        exit();
    }
?>