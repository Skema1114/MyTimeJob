<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Curso</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?=site_url('sistema')?>">Home</a></li>
          <li><i class="fa fa-laptop"></i>Curso</li>
        </ol>
      </div>
    </div>


    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa red"></i><strong>Cursos</strong></h2>
            <div class="panel-actions">

            </div>
          </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
              <thead>
               <tr>
                <th>Curso</th>
                <th>Editar</th>
                <th>Remover</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($cursos as $curso):?>
              <tr>
                <td><?=$curso->nomeCurso?></td>
                <td><?php echo anchor('curso/editar/'.$curso->idCurso,'<span class="glyphicon glyphicon-pencil"></span>')?></td>
                <td><?php echo anchor('curso/remover/'.$curso->idCurso,'<span class="glyphicon glyphicon-remove"></span>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>

    </div>

  </div>


  <!-- statics end -->


</div>

<a class="btn btn-default" href="<?=site_url('curso/adicionar')?>">
	<span class="glyphicon glyphicon-plus"></span>
	Adicionar curso
</a>

<!-- project team & activity end -->

</section>
</section>
    <!--main content end-->
