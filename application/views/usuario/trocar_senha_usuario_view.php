<section id="main-content">
  <section class="wrapper">
    <!--overview start-->
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Inicio</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user"></i>Editar Usuario</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?=site_url('sistema')?>">Inicio</a></li>
          <li><i class="fa fa-user"></i><a href="<?=site_url('usuario')?>">Ususario</a></li>
          <li><i class="fa fa-user"></i>Editar Usuario</li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">

            <h4><?=$this->usuario_modelo->nome?></h4>
            <form action="<?=base_url('usuario/trocarSenha')?>" method="post" accept-charset="utf-8"
              class="auto-config">

              <input type="hidden" name="idUsuario" value="<?=$this->usuario_modelo->idUsuario?>" />
              <div class='form-group required'>
                <label for='senha_atual' class="control-label">Senha Atual</label>
                <input type='password' id='senha_atual' autofocus name='senha_atual' class='form-control' required>
              </div>
              <div class='form-group required'>
                <label for='nova_senha' class="control-label">Nova Senha</label>
                <input type='password' id='nova_senha' name='nova_senha' class='form-control' required>
              </div>
              <div class='form-group required'>
                <label for='con_senha' class="control-label">Confirmar Senha</label>
                <input type='password' id='con_senha' name='con_senha' class='form-control' required>
              </div>

              <div class='row'>
                <div class='col col-xs-6'>
                  <a class="btn btn-default" href="<?=site_url('usuario/editar/'.$this->usuario_modelo->idUsuario)?>">
                    <span class="glyphicon glyphicon-menu-left"></span>
                    Voltar
                  </a>
                </div>


                <div class='col col-xs-6 text-right'>
                  <input type='submit' class=' submitForm btn btn-success' value='Gravar'>
                </div>
              </div>
            </form>

          </div>

        </div>

      </div>


      <!-- statics end -->


    </div><br><br>


    <!-- project team & activity end -->

  </section>
</section>
<!--main content end-->