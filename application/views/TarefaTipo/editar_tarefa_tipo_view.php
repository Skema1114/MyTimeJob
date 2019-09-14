<section id="main-content">
  <section class="wrapper">
    <!--overview start-->

    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user"></i>Cadastros</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Cadastros</a></li>
          <li><i class="fa fa-user"></i><a href="">Novo tipo</a></li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">

            <form action="<?=site_url('tarefatipo/gravar')?>" id="frmTarefaTipo" method="post" accept-charset="utf-8"
              class="auto-config">
              <div class='form-group required'>
                <input type="hidden" name="idTipo" value="<?=$this->tarefaTipo_modelo->idTipo?>" />

                <label for='nome' class="control-label"><strong>Nome</strong></label>
                <input required type='text' id='nome' autofocus name='nome' class='form-control'
                  value="<?=$this->tarefaTipo_modelo->nome?>">

                <label for='descricao' class="control-label"><strong>Descrição</strong></label>
                <input type='text' id='descricao' name='descricao' class='form-control'
                  value="<?=$this->tarefaTipo_modelo->descricao?>">
              </div>
              <div class='row'>
                <div class='col col-xs-6'>
                  <a class="btn btn-default" href="<?=site_url('tarefatipo')?>">
                    <span class="glyphicon glyphicon-menu-left"></span>
                    Voltar
                  </a>
                </div>
                <div class="col col-xs-6 text-right">
                  <input type='submit' class='submitForm btn btn-success' value="Gravar">
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