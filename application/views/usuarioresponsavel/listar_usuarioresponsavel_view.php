<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> UsusarioResponsavel</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?=site_url('sistema')?>">Home</a></li>
              <li><i class="fa fa-laptop"></i>UsusarioResponsavel</li>
            </ol>
          </div>
        </div>

       
        <!-- Today status end -->

        <div class="row">

          <div class=" col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa red"></i><strong>UsusarioResponsavel</strong></h2>
                <div class="panel-actions">
                  
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Data Inicio</th>
				<th>Data Fim</th>
				<th>Editar</th>
        <th>Remover</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($UsuariosResponsaveis as $UsusarioResponsavel):?>
				<tr>
				<td><?=$UsusarioResponsavel->idUsuarioResponsavel?></td>
				<td><?=$UsusarioResponsavel->nome?></td>
        <td><?=$UsusarioResponsavel->dataInicio?></td>
				<td><?=$UsusarioResponsavel->dataFim?></td>
				<td><?php echo anchor('UsusarioResponsavel/editar/'.$UsusarioResponsavel->idUsuarioResponsavel,'<span class="glyphicon glyphicon-pencil"></span>')?></td>
				<td><?php echo anchor('UsusarioResponsavel/remover/'.$UsusarioResponsavel->idUsuarioResponsavel,'<span class="glyphicon glyphicon-remove"></span>')?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
                </table>
              </div>

            </div>

          </div>
        

        <!-- statics end -->


        </div>

        <a class="btn btn-default" href="<?=site_url('usuarioResponsavel/adicionar')?>">
	<span class="glyphicon glyphicon-plus"></span>
	Adicionar UsusarioResponsavel
</a>
       
        <!-- project team & activity end -->

      </section>
    </section>
    <!--main content end-->