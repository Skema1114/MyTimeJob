 <section id="main-content">
    <section class="wrapper">
      <!--overview start-->
      <div class="row">
        <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Listar</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Listar</a></li>
          <li><i class="fa fa-home"></i><a href="">Usuário</a></li>
        </ol>
        </div>
      </div>


      <!-- Today status end -->

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2><i class="fa red"></i><strong>Usuarios</strong></h2>
              <div class="panel-actions">

              </div>
            </div>
            <div class="panel-body">
              <table class="table bootstrap-datatable countries">
                <thead>
                 <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Editar</th>
                  <th>Remover</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($usuarios as $usuario):?>
                <tr>
                  <td><?php echo $usuario->idUsuario?></td>
                  <td><?php echo $usuario->nome?></td>
                  <td><?php echo $usuario->email?></td>
                  <td><?php echo anchor('usuario/editar/'.$usuario->idUsuario,'<span class="glyphicon glyphicon-pencil"></span>')?></td>
                  <td><?php echo anchor('usuario/remover/'.$usuario->idUsuario,'<span class="glyphicon glyphicon-remove"></span>','id="'.$usuario->idUsuario.'"')?></td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>

      </div>

    </div>


    <!-- statics end -->


  </div>

  <a class="btn btn-default" href="<?=site_url('usuario/adicionar')?>">
  	<span class="glyphicon glyphicon-plus"></span>
  	Adicionar usuário
  </a>

  <!-- project team & activity end -->

  </section>
</section>
      <!--main content end-->