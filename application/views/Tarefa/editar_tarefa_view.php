<section id="main-content">
  <section class="wrapper">
    <!--overview start-->

    <div class="row">
      <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i>Tarefa</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="">Tarefa</a></li>
          <li><i class="fa fa-home"></i><a href="">Nova tarefa</a></li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-body">
            <input type="hidden" name="idTarefa" value="<?=$this->tarefa_modelo->idTarefa?>"/>
            <form action="<?=site_url('tarefa/gravar')?>" id="frmTarefa" method="post" accept-charset="utf-8" class="auto-config" >
            <div class='form-group required'>
              <div class="row">
                
                <div class="col-sm-10 required">
                  <label for='tipoId' class="control-label"><strong>Tipo</strong></label><br>
                  <select required name="tipoId" class="form-control">
                    <option disabled selected>Selecione</option>
                      <?php foreach ($tipos as $tarefaTipo):?>
                        <option value="<?=$tarefaTipo->idTipo?>"><?=$tarefaTipo->nome?></option>
                      <?php endforeach;?>
                  </select>
                </div>

                <div class="col-sm-2">
                  <label for='tipoId' class="control-label"><strong>&nbsp</strong></label><br>
                    <a class="btn btn-info btn-block" href="<?=site_url('tarefaTipo/adicionar')?>">
                      <span class="glyphicon glyphicon-menu-left"></span>
                      <strong>Novo tipo</strong>
                    </a>
                </div>
              </div>
            </div>

             <div class='form-group required'>
                <div class="row">
                  <div class="col-sm-4">
                    <label for='marcaId' class="control-label"><strong>Marca</strong></label><br>
                      <select required name="marcaId" class="form-control">
                        <option disabled selected>Selecione</option>
                        <?php foreach ($marcas as $tarefaMarca):?>
                          <option value="<?=$tarefaMarca->idMarca?>"><?=$tarefaMarca->nome?></option>
                        <?php endforeach;?>
                      </select>
                  </div>
                  
                      
                  <div class="col-sm-2">
                    <label for='marcaId' class="control-label"><strong>&nbsp</strong></label><br>
                    <a class="btn btn-info btn-block" href="<?=site_url('tarefaMarca/adicionar')?>">
                      <span class="glyphicon glyphicon-menu-left"></span>
                      <strong>Nova marca</strong>
                    </a>
                  </div>

                  <div class="col-sm-4">
                      <label for='subMarcaId' class="control-label"><strong>Submarca</strong></label><br>
                      <select name="subMarcaId" class="form-control">
                        <option disabled selected>Selecione</option>
                        <?php foreach ($submarcas as $marcaSubMarca):?>
                          <option value="<?=$marcaSubMarca->idSubMarca?>"><?=$marcaSubMarca->nome?></option>
                        <?php endforeach;?>
                      </select>
                      </div>
                      
                      <div class="col-sm-2">
                      <label for='subMarcaId' class="control-label"><strong>&nbsp</strong></label><br>
                      <a class="btn btn-info btn-block" href="<?=site_url('marcaSubMarca/adicionar')?>">
                      <span class="glyphicon glyphicon-menu-left"></span>
                      <strong>Nova submarca</strong>
                    </a>
                    </div>
                  </div>

                  <!-- ESTRUTURA PARA O CAMPO DE CADASTRO RAPIDO
                  <div class="row">
                    <div class="col-sm-12" style="background:red">
                          <button>
                          <br>
                          <br>
                          <br>
                    </div>
                  </div>
                  
                  <div class="row"> 
                    <div class="col-sm-6" style="background:blue">
                          <button>
                          <br>
                          <br>
                          <br>
                    </div>

                    <div class="col-sm-6" style="background:green">
                          <button>
                          <br>
                          <br>
                          <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12" style="background:red">
                          <button>
                          <br>
                          <br>
                          <br>
                    </div>
                  </div>
                -->
              </div>

              <div class='form-group required'>
                <label for='codigo' class="control-label"><strong>Código</strong></label>
                <input required type='text' id='codigo' name='codigo' class='form-control' value="<?=$this->tarefa_modelo->codigo?>">
              </div>

              <div class='form-group required'>
                <div class="row">
                  <div class="col-sm-10">
                    <label for='statusId' class="control-label"><strong>Status</strong></label><br>
                    <select required name="statusId" class="form-control">
                      <option disabled selected>Selecione</option>
                      <?php foreach ($statuses as $tarefaStatus):?>
                        <option value="<?=$tarefaStatus->idStatus?>"><?=$tarefaStatus->nome?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                
                  <div class="col-sm-2">
                    <label for='statusId' class="control-label"><strong>&nbsp</strong></label><br>
                    <a class="btn btn-info btn-block" href="<?=site_url('tarefaStatus/adicionar')?>">
                    <span class="glyphicon glyphicon-menu-left"></span>
                      <strong>Novo status</strong>
                    </a>
                  </div>
                </div>
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


</div>
<br><br>


<!-- project team & activity end -->

</section>
</section>
<!--main content end-->
