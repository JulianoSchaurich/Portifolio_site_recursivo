<?php
    include_once("..\dao\manipula_dados.php");
    $nome = $_POST["txt_nome"];
    $texto = $_POST["txt_texto"];

    echo "Nome: ".$nome."<br/>Texto: ".$texto;

    $manipula = new manipula_dados();
    $manipula->set_table("objetos");
    $manipula->set_fields("nome, texto");
    $manipula->set_dados("'$nome', '$texto'");
    $manipula->insert();

?>