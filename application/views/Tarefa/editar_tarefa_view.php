<section id="main-content">
  <section class="wrapper">
    <!--overview start-->

    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user"></i>Editar curso</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?=site_url('sistema')?>">Inicio</a></li>
          <li><i class="fa fa-user"></i><a href="<?=site_url('curso')?>">Curso</a></li>
          <li><i class="fa fa-user"></i>Editar Tarefa</li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">
            <input type="hidden" name="idTarefa" value="<?=$this->tarefa_modelo->idTarefa?>"/>
            
            <form action="<?=site_url('tarefa/gravar')?>" id="frmTarefa" method="post" accept-charset="utf-8" class="auto-config" >
            <div class='form-group required'>
              <label for='tipoId' class="control-label"><strong>Tipo</strong></label><br>
              <select name="tipoId" class="custom-select custom-select-sm">
                <option disabled selected>Selecione</option>
                <?php foreach ($tipos as $tarefaTipo):?>
                  <option value="<?=$tarefaTipo->idTipo?>"><?=$tarefaTipo->nome?></option>
                <?php endforeach;?>
              </select>
            </div>

            <div class='form-group required'>
              <label for='marcaId' class="control-label"><strong>Marca</strong></label><br>
              <select name="tipoId" class="custom-select custom-select-sm">
                <option disabled selected>Selecione</option>
                <?php foreach ($marcas as $tarefaMarca):?>
                  <option value="<?=$tarefaMarca->idMarca?>"><?=$tarefaMarca->nome?></option>
                <?php endforeach;?>
              </select>

              <select name="subMarcaId" class="custom-select custom-select-sm">
                <option disabled selected>Selecione</option>
                <?php foreach ($submarcas as $marcaSubMarca):?>
                  <option value="<?=$marcaSubMarca->idSubMarca?>"><?=$marcaSubMarca->nome?></option>
                <?php endforeach;?>
              </select>
              </div>

              <div class='form-group required'>
                <label for='dataCadastro' class="control-label"><strong>Data</strong></label>
                <input required type='date' id='dataCadastro' name='dataCadastro' class='form-control' value="<?=$this->tarefa_modelo->dataCadastro?>">
              </div>

              <div class='form-group required'>
                <label for='codigo' class="control-label"><strong>Código</strong></label>
                <input required type='text' id='codigo' name='codigo' class='form-control' value="<?=$this->tarefa_modelo->codigo?>">
              </div>

              <div class='form-group required'>
                <label for='statusId' class="control-label"><strong>Status</strong></label><br>
                <select name="statusId">
                  <option disabled selected>Selecione</option>
                  <?php foreach ($statuses as $tarefaStatus):?>
                    <option value="<?=$tarefaStatus->idStatus?>"><?=$tarefaStatus->nome?></option>
                  <?php endforeach;?>
                </select>
              </div>

              <div class='form-group required'>
                <label for='dataModificacao' class="control-label"><strong>Data de Movimentação</strong></label>
                <input required type='date' id='dataModificacao' name='dataModificacao' class='form-control' value="<?=$this->tarefa_modelo->dataModificacao?>">
              </div>
            <div class='row'>
              <div class='col col-xs-6'>
               <a class="btn btn-default" href="<?=site_url('tarefa')?>">
                <span class="glyphicon glyphicon-menu-left"></span>
                Voltar
              </a>
            </div>
            <div class="col col-xs-6 text-right">
             <input type='submit' class='submitForm btn btn-success' value="Gravar" >
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
