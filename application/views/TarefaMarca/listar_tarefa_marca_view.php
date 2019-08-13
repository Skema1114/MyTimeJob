<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Tarefas Status</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?=site_url('sistema')?>">Home</a></li>
          <li><i class="fa fa-laptop"></i>Tipo de Tarefas</li>
        </ol>
      </div>
    </div>


    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa red"></i><strong>Marcas</strong></h2>
            <div class="panel-actions">

            </div>
          </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
              <thead>
               <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Criação</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($marca as $tarefaMarca):?>
              <tr>
                <td><?=$tarefaMarca->idMarca?></td>
                <td><?=$tarefaMarca->nome?></td>
                <td><?=$tarefaMarca->descricao?></td>
                <td><?=$tarefaMarca->dataCadastro?></td>
                <td><?php echo anchor('tarefamarca/editar/'.$tarefaMarca->idMarca,'<span class="glyphicon glyphicon-pencil"></span>')?></td>
                <td><?php echo anchor('tarefamarca/remover/'.$tarefaMarca->idMarca,'<span class="glyphicon glyphicon-remove"></span>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>

    </div>

  </div>


  <!-- statics end -->


</div>

<a class="btn btn-default" href="<?=site_url('tarefamarca/adicionar')?>">
	<span class="glyphicon glyphicon-plus"></span>
	Nova tarefa Tipo
</a>

<!-- project team & activity end -->

</section>
</section>
    <!--main content end-->
