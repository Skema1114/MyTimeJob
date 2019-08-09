<section id="main-content">
  <section class="wrapper">
    <!--overview start-->

    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user"></i>Editar curso</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?=site_url('sistema')?>">Inicio</a></li>
          <li><i class="fa fa-user"></i><a href="<?=site_url('curso')?>">Curso</a></li>
          <li><i class="fa fa-user"></i>Editar Curso</li>
        </ol>
      </div>
    </div>
    <!-- Today status end -->

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body" style="padding-left: 25%; padding-right: 25%">

           <form action="<?=site_url('curso/gravar')?>" id="frmEstado" method="post" accept-charset="utf-8" class="auto-config" >
             <div class='form-group required text-center'>
              <input type="hidden" name="idCurso" value="<?=$this->curso_modelo->idCurso?>"/>
                 <label for='descricao' class="control-label"><strong>Nome do curso</strong></label>
              <input required type='text' id='descricao' autofocus name='nomeCurso' class='form-control centered' style="width: 75%;" value="<?=$this->curso_modelo->nomeCurso?>">
            </div>
            <div class='row'>
              <div class='col col-xs-6'>
               <a class="btn btn-default" href="<?=site_url('curso')?>">
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
