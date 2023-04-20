<?php
    include_once("../controller/ver_url.php");
    include_once("../dao\manipula_dados.php");

   $busca = new manipula_dados();
   $busca->set_table("objetos");
   $objetos = $busca->get_all_data_table();
?>

<div class="mt-5 container-fluid w-75 d-flex">
    <h4 class="" >Trabalhos</h4>
    <a class="navbar-brand" href="?secao=cadastrar_objetos">
        <img src="..\images\plus-lg.svg" alt="pluss">
    </a>
</div>

<div class="container-fluid w-75">
    <table class="table">
  <thead>
    <tr class="table-dark" >
      <th>Nome</th>
      <th>Texto</th>
      <th>Link</th>
      <th class="text-end">Alterações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($objetos as $objeto){ 
?>
        <form method="post" action="manipula_objetos.php">
        <tr>
            <input type="hidden" id="id" name="id" value="<?=$objeto['id'];?>">
            <input type="hidden" id="nome" name="nome" value="<?=$objeto['nome'];?>">
            <input type="hidden" id="texto" name="texto" value="<?=$objeto['texto'];?>">
            <input type="hidden" id="link" name="link" value="<?=$objeto['link'];?>">

            <td><?=$objeto['nome'];?></td>
            <td><?=$objeto['texto'];?></td>
            <td><?=$objeto['link'];?></td>
            <td class="text-end" >
                <button type="submit" name="opcao" value="pagina_atualizar_objeto" class="btn btn-sm">
                    <img src="..\images\pencil-fill.svg" alt="pencil">
                </button>
                <button type="submit" name="opcao" value="deletar" class="btn btn-sm">
                    <img src="..\images\trash-fill.svg" alt="trash">
                </button>
            </td>
        </tr>
        </form>
<?php
    }
?>

    </tbody>
</table>
</div>