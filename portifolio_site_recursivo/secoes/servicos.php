<?php
   include_once("dao\manipula_dados.php");

   $busca = new manipula_dados();

   $busca->set_table("servicos");
   $servicos = $busca->get_all_data_table();
?>

<div class="mt-3 container-fluid d-flex flex-column justify-content-center align-items-center"> 
    <h1 class="mt-5 text-center" >Desenvolvimento</h1>
    <div class="w-50 mt-3 mb-5 container-fluid d-flex justify-content-center border-bottom border-black">
        

<?php 
    foreach($servicos as $servico){ 
?>
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-center w-25 " >
            <div class="bg-light border border-2 border-dark card text-light  m-3 p-1" >
                <img src="<?php echo $servico['nome_arquivo']; ?>" class="card-img" alt="..." style="">
            </div>
            <h5 class="card-title mb-3"><?=$servico['nome'];?></h5>
        </div> 
<?php
    }
?>
    </div>
</div>

