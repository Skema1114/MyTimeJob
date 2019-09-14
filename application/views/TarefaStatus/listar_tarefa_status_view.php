<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Listar</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Listar</a></li>
          <li><i class="fa fa-home"></i><a href="">Status</a></li>
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
                <?php foreach ($status as $tarefastatus):?>
                <tr>
                  <td><?=$tarefastatus->idStatus?></td>
                  <td><?=$tarefastatus->nome?></td>
                  <td><?=$tarefastatus->descricao?></td>
                  <td><?=$tarefastatus->dataCadastro?></td>
                  <td>
                    <?php echo anchor('tarefastatus/editar/'.$tarefastatus->idStatus,'<span class="glyphicon glyphicon-pencil"></span>')?>
                  </td>
                  <td>
                    <?php echo anchor('tarefastatus/remover/'.$tarefastatus->idStatus,'<span class="glyphicon glyphicon-remove"></span>')?>
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>

        </div>

      </div>


      <!-- statics end -->


    </div>

    <a class="btn btn-default" href="<?=site_url('tarefastatus/adicionar')?>">
      <span class="glyphicon glyphicon-plus"></span>
      Novo status
    </a>

    <!-- project team & activity end -->

  </section>
</section>
<!--main content end-->