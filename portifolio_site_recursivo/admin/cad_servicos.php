<?php
    include_once("..\dao\manipula_dados.php");
    $nome = $_POST["txt_nome"];
    $texto = $_POST["txt_texto"];
    $preco = $_POST["txt_preco"];

    echo "Nome: ".$nome."<br/>Texto: ".$texto."<br/>Preço: ".$preco;

    $manipula = new manipula_dados();
    $manipula->set_table("servicos");
    $manipula->set_fields("nome, texto, preco");
    $manipula->set_dados("'$nome', '$texto', '$preco'");
    $manipula->insert();

?>