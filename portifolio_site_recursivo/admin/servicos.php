<?php
    include_once("../controller/ver_url.php");
    include_once("../dao\manipula_dados.php");

   $busca = new manipula_dados();
   $busca->set_table("servicos");
   $servicos = $busca->get_all_data_table();
?>
<div class="mt-5 container-fluid w-75 d-flex">
    <h4 class="" >Serviços</h4>
    <a class="navbar-brand" href="?secao=cadastrar_servicos">
        <img src="..\images\plus-lg.svg" alt="pluss">
    </a>
</div>

<div class="container-fluid w-75">
    <table class="table">
  <thead>
    <tr class="table-dark" >
      <th>Nome</th>
      <th>Nome Arquivo</th>
      <th class="text-end">Alterações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($servicos as $servico){ 
?>
    <form method="post" action="manipula_servicos.php">
      <tr>
          <input type="hidden" id="id" name="id" value="<?=$servico['id'];?>">
          <input type="hidden" id="nome" name="nome" value="<?=$servico['nome'];?>">
          <input type="hidden" id="texto" name="nome_arquivo" value="<?=$servico['nome_arquivo'];?>">

          <td><?=$servico['nome'];?></td>
          <td><?=$servico['nome_arquivo'];?></td>
          <td class="text-end" >
              <button type="submit" name="opcao" value="pagina_atualizar_servicos" class="btn btn-sm">
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