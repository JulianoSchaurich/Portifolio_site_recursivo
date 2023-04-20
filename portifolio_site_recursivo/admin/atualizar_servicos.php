<?php
include_once("validar_cookie.php");

$id_upgrade = $_SESSION['id_upgrade'];
$nome_upgrade = $_SESSION["nome_upgrade"];
$nome_arquivo_upgrade = $_SESSION['nome_arquivo_upgrade'];
?>

<div class="mt-5 container-fluid w-75">
    <a class="navbar-brand" href="?secao=servicos">
        <h4 class="" >Serviços</h4>
    </a>
</div>

<div class="mt-5 container-fluid w-75">
    <div class="mt-5  w-25 ">
        <form method="post" action="manipula_servicos.php">
            <input type="hidden" id="id" name="id" value="<?=$id_upgrade;?>">

            <label for="" class="form-label"><h5>Nome</h5> </label>
            <p><input type="text" name="txt_nome" value="<?=$nome_upgrade?>" class="form-control"></p>

            <label for="" class="form-label"><h5>Texto</h5> </label>
            <p><input type="text" name="txt_nome_arquivo" value="<?=$nome_arquivo_upgrade?>" class="form-control"></p>

            <button type="submit" name="opcao" value="atualizar" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    Modificar   
                </p>
            </button>
        </form>
    </div>
</div>

