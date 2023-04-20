<?php
    include_once("dao\manipula_dados.php");

   $busca = new manipula_dados();

   $busca->set_table("objetos");
   $objetos = $busca->get_all_data_table();
?>
<div class="mt-3 container-fluid d-flex flex-column justify-content-center align-items-center"> 
    <h1 class="mt-5 text-center" >Trabalhos</h1>
    <div class="w-50 mt-5 mb-5 container-fluid d-flex flex-column justify-content-center">

<?php 
    foreach($objetos as $objeto){ 
?>
        <div class="card text-bg-dark w-100 mt-3 d-flex justify-content-center" style="">
            
            <div class="card-body">
                <h4 class="card-title"><?=$objeto['nome'];?></h4>
                <p class="card-text"><?=$objeto['texto'];?></p>
            </div>
            <div class="card-footer text-center border-dark" >
                <a href="<?=$objeto['link'];?>" class="btn btn-light fw-bold">Link</a>
            </div>
        </div>
<?php
    }
?>
    </div>
</div>