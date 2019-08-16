<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i>Tarefa</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Tarefa</a></li>
        </ol>
      </div>
    </div>


    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa red"></i><strong>Tarefas</strong></h2>
            <div class="panel-actions">

            </div>
          </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
              <thead>
               <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Sub Marca</th>
                <th>Data de Criação</th>
                <th>Código</th>
                <th>Status</th>
                <th>Data de Modificação</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($tarefas as $tarefa):?>
              <tr>
                <td><?=$tarefa->tipoId?></td>
                <td><?=$tarefa->tarefa?></td>
                <td><?=$tarefa->subMarcaId?></td>
                <td><?=$tarefa->dataCadastro?></td>
                <td><?=$tarefa->codigo?></td>
                <td><?=$tarefa->statusId?></td>
                <td><?=$tarefa->dataModificacao?></td>
                <td><?php echo anchor('tarefa/editar/'.$tarefa->idTarefa,'<span class="glyphicon glyphicon-pencil"></span>')?></td>
                <td><?php echo anchor('tarefa/remover/'.$tarefa->idTarefa,'<span class="glyphicon glyphicon-remove"></span>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>

    </div>

  </div>


  <!-- statics end -->


</div>

<a class="btn btn-default" href="<?=site_url('tarefa/adicionar')?>">
	<span class="glyphicon glyphicon-plus"></span>
	Nova tarefa
</a>

<!-- project team & activity end -->

</section>
</section>
    <!--main content end-->
