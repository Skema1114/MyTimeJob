<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Listar</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Listar</a></li>
          <li><i class="fa fa-home"></i><a href="">Tipo</a></li>
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
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Criação</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($tipo as $tarefatipo):?>
              <tr>
                <td><?=$tarefatipo->idTipo?></td>
                <td><?=$tarefatipo->nome?></td>
                <td><?=$tarefatipo->descricao?></td>
                <td><?=$tarefatipo->dataCadastro?></td>
                <td><?php echo anchor('tarefatipo/editar/'.$tarefatipo->idTipo,'<span class="glyphicon glyphicon-pencil"></span>')?></td>
                <td><?php echo anchor('tarefatipo/remover/'.$tarefatipo->idTipo,'<span class="glyphicon glyphicon-remove"></span>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>

    </div>

  </div>


  <!-- statics end -->


</div>

<a class="btn btn-default" href="<?=site_url('tarefatipo/adicionar')?>">
	<span class="glyphicon glyphicon-plus"></span>
	Novo tipo
</a>

<!-- project team & activity end -->

</section>
</section>
    <!--main content end-->
