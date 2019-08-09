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
        <h3 class="page-header"><i class="fa fa-user"></i>Editar UsuarioResponsavel</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?= site_url('sistema') ?>">Inicio</a></li>
          <li><i class="fa fa-user"></i><a href="<?= site_url('UsuarioResponsavel') ?>">UsuarioResponsavel</a></li>
          <li><i class="fa fa-user"></i>Editar UsuarioResponsavel</li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">

            <form action="<?= site_url('UsuarioResponsavel/gravar') ?>" id="frmUsuarioResponsavel" method="post" accept-charset="utf-8" class="auto-config">
              <div class='form-group required'>
                <label for='Usuario' class="control-label">Usuario:</label>
                <select class='form-control' id='Usuario' name='idUsuario' required>
                  <option value="">-- Selecione -- </option>
                  <?php foreach ($usuarios as $usuario) : ?>
                    <option value="<?= $usuario->idUsuario ?>" <?= ($usuario->idUsuario == $this->UsuarioResponsavel_modelo->idUsuario) ? "selected" : "" ?>><?= $usuario->nome ?></option>
                  <?php endforeach; ?>
                </select>
              </div> 
              <div class='form-group required'>
                <input type="hidden" name="idUsuarioResponsavel" value="<?= $this->UsuarioResponsavel_modelo->idUsuarioResponsavel ?>" />
                <label for='dataInicio' class="control-label">dataInicio:</label>
                <input required type='date' id='dataInicio' autofocus name='dataInicio' class='form-control' value="<?= $this->UsuarioResponsavel_modelo->dataInicio ?>">
              </div>
              <div class='form-group required'>
                <label for='dataFim' class="control-label">dataFim:</label>
                <input required type='date' id='dataFim' autofocus name='dataFim' class='form-control' value="<?= $this->UsuarioResponsavel_modelo->dataFim ?>">
              </div>

              <div class='row'>
                <div class='col col-xs-6'>
                  <a class="btn btn-default" href="<?= site_url('UsuarioResponsavel') ?>">
                    <span class="glyphicon glyphicon-menu-left"></span>
                    Voltar
                  </a>
                </div>
                <div class='col col-xs-6 text-right'>
                  <input type='submit' class=' submitForm btn btn-success' value="Gravar">
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