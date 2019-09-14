<section id="main-content">
  <section class="wrapper">
    <!--overview start-->

    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i>Cadastros</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Cadastros</a></li>
          <li><i class="fa fa-home"></i><a href="">Nova marca</a></li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">

            <form action="<?=site_url('tarefamarca/gravar')?>" id="frmTarefaMarca" method="post" accept-charset="utf-8"
              class="auto-config">
              <div class='form-group required'>
                <input type="hidden" name="idMarca" value="<?=$this->tarefaMarca_modelo->idMarca?>" />

                <label for='nome' class="control-label"><strong>Nome</strong></label>
                <input required type='text' id='nome' autofocus name='nome' class='form-control'
                  value="<?=$this->tarefaMarca_modelo->nome?>">

                <label for='descricao' class="control-label"><strong>Descrição</strong></label>
                <input type='text' id='descricao' name='descricao' class='form-control'
                  value="<?=$this->tarefaMarca_modelo->descricao?>">

                <div class='form-group required'>
                  <label for='subMarcaId' class="control-label"><strong>Submarca</strong></label><br>
                  <select name="subMarcaId" class="form-control">
                    <option disabled selected>Selecione</option>
                    <?php foreach ($submarcas as $marcaSubMarca):?>
                    <option value="<?=$marcaSubMarca->idSubMarca?>"><?=$marcaSubMarca->nome?></option>
                    <?php endforeach;?>
                  </select>
                </div>

              </div>
              <div class='row'>
                <div class='col col-xs-6'>
                  <a class="btn btn-default" href="<?=site_url('tarefamarca')?>">
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