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

            <form action="<?=site_url('usuario/gravar')?>" id="frmUsuario" method="post" accept-charset="utf-8">
              <div class='form-group required'>
                <input type="hidden" name="idUsuario" value="<?=$this->usuario_modelo->idUsuario?>" />
                <label for='nome' class="control-label">Nome</label>
                <input required type='text' id='nome' autofocus name='nome' class='form-control'
                  value="<?=$this->usuario_modelo->nome?>">
              </div>
              <div class='form-group required'>
                <label for='email' class="control-label">Email</label>
                <input type='email' id='email' name='email' class='form-control'
                  value="<?=$this->usuario_modelo->email?>" required>
              </div>
              <?php if($this->usuario_modelo->is_new()){ ?>
              <div class='form-group required'>
                <label for='senha' class="control-label">Senha</label>
                <input type='password' id='senha' name='senha' class='form-control' value="" required>
              </div>
              <div class='form-group required'>
                <label for='con_senha' class="control-label">Confirma senha</label>
                <input type='password' id='con_senha' name='con_senha' class='form-control' required>
              </div>
              <?php }else{ ?>
              <div class='form-group'>
                Deseja alterar a senha? <a
                  href="<?=site_url('usuario/senha/'.$this->usuario_modelo->idUsuario)?>">clique aqui</a>
                <input type="hidden" name="senha" value="<?=$this->usuario_modelo->senha?>" />
              </div>
              <?php } ?>

              <div class='form-group required'>
                <label for='tipoUsuario' class="control-label">Tipo Usuario</label>
                <input type="radio" name="tipoUsuario" value="0" checked> 0<br>
                <input type="radio" name="tipoUsuario" value="1"> 1<br>
              </div>

              <div class='row'>
                <div class='col col-xs-6'>
                  <a class="btn btn-default" href="<?=site_url('usuario/index')?>">
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