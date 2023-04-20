<?php

include_once("validar_cookie.php");
?>

<div class="mt-5 container-fluid w-75 d-flex">
    <a class="navbar-brand" href="?secao=objetos">
        <h4 class="" >Trabalhos</h4>
    </a>
</div>

<div class="mt-5 container-fluid w-75">
    <div class="mt-5  w-25 ">
        <form method="post" action="manipula_objetos.php">
            <label for="" class="form-label"><h5>Nome</h5> </label>
            <p><input type="text" name="txt_nome" class="form-control"></p>

            <label for="" class="form-label"><h5>Texto</h5> </label>
            <p><input type="text" name="txt_texto" class="form-control"></p>

            <label for="" class="form-label"><h5>Link</h5> </label>
            <p><input type="text" name="txt_link" class="form-control"></p>

            <button type="submit" name="opcao" value="inserir" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    Cadastrar   
                </p>
            </button>
        </form>
    </div>
</div>

