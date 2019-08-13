<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>My TimeJob</title>

  <!-- Bootstrap CSS -->
  <?= link_tag('assets/css/bootstrap.min.css'); ?>
  <!-- bootstrap theme -->
  <?= link_tag('assets/css/bootstrap-theme.css'); ?>
  <!--external css-->
  <!-- font icon -->
  <?= link_tag('assets/css/elegant-icons-style.css'); ?>
  <?= link_tag('assets/css/font-awesome.min.css'); ?>
  <!-- full calendar css-->
  <?= link_tag('assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css'); ?>
  <?= link_tag('assets/assets/fullcalendar/fullcalendar/fullcalendar.css'); ?>
  <!-- easy pie chart-->
  <?= link_tag('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css'); ?>
  <!-- owl carousel -->
  <?= link_tag('assets/css/owl.carousel.css'); ?>
  <?= link_tag('assets/css/jquery-jvectormap-1.2.2.css'); ?>
  <!-- Custom styles -->
  <?= link_tag('assets/css/fullcalendar.css'); ?>
  <?= link_tag('assets/css/widgets.css'); ?>
  <?= link_tag('assets/css/style.css'); ?>
  <?= link_tag('assets/css/style-responsive.css'); ?>
  <?= link_tag('assets/css/xcharts.min.css'); ?>
  <?= link_tag('assets/css/jquery-ui-1.10.4.min.css'); ?>
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">


      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="<?=site_url('sistema')?>" class="logo"><span class="lite">My TimeJob</span></a>
        <!--logo end-->

        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                  <?= img('assets/img/avatar1_small.jpg') ?>
                </span>
                <span class="username"><?= $this->session->nome ?></span>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="sub-menu" >
                  <a href="<?=site_url('usuario/adicionar')?>" class="" >
                    <i class="fa fa-list-alt"></i>
                    <span>Cadastro</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="TODO:" class=""  href="javascript:;" class="" >
                    <span>Ver usarios</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                </li>
                <li>
                 <div class="log-arrow-up"></div>
                 <li class="eborder-top">
                  <a href="<?= site_url('login/logout')?>"><i class="icon_key_alt"></i>SAIR</a>
                </li>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
        <li class="active">
            <a class="" href="<?=site_url('sistema')?>">
              <i class="icon_house_alt"></i>
              <span>Início</span>
            </a>
          </li>
            
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <i class="icon_genius"></i>
              <span>Usuario</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="<?=site_url('usuario')?>">Listar</a></li>
              <li><a class="" href="<?=site_url('usuario/adicionar')?>">Adicionar</a></li>
            </ul>
          
            <li class="sub-menu">
            <a href="javascript:;" class="">
            <i class="icon_document_alt"></i>
              <span>Tarefa</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="<?=site_url('tarefa')?>">Listar</a></li>
              <li><a class="" href="<?=site_url('tarefa/adicionar')?>">Criar</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
            <i class="icon_document_alt"></i>
              <span>Cadastros</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="<?=site_url('tarefatipo')?>">Tipo</a></li>
              <li><a class="" href="<?=site_url('tarefamarca')?>">Marca</a></li>
              <li><a class="" href="<?=site_url('marcasubmarca')?>">Sub Marca</a></li>
              <li><a class="" href="<?=site_url('tarefastatus')?>">Status</a></li>
            </ul>
          </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->
      <?php echo $template['body']; ?>	
      <div class="text-center">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            <p class="col-md-12">
              <hr class="divider">
              Copyright &COPY; 2019 <a href="http://www.missoesjr.com.br">Missões Júnior</a>
            </p>
          </div>
        </div>
      </section>
      <!--main content end-->

    </section>
    <!-- javascripts -->
    <?= script_tag('assets/js/jquery.js') ?>
    <?= script_tag('assets/js/jquery-ui-1.10.4.min.js') ?>
    <?= script_tag('assets/js/jquery-1.8.3.min.js') ?>
    <?= script_tag('assets/js/jquery-ui-1.9.2.custom.min.js') ?>
    <!-- bootstrap -->
    <?= script_tag('assets/js/bootstrap.min.js') ?>
    <!-- nice scroll -->
    <?= script_tag('assets/js/jquery.scrollTo.min.js') ?>
    <?= script_tag('assets/js/jquery.nicescroll.js') ?>
    <!-- charts scripts -->
    <?= script_tag('assets/assets/jquery-knob/js/jquery.knob.js') ?>
    <?= script_tag('assets/js/jquery.sparkline.js') ?>
    <?= script_tag('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') ?>
    <?= script_tag('assets/assets/fullcalendar/fullcalendar/fullcalendar.js') ?>
    <!-- jQuery full calendar -->
    <?= script_tag('assets/js/owl.carousel.js') ?>
    <!-- Full Google Calendar - Calendar -->
    <?= script_tag('assets/js/fullcalendar.min.js') ?>
    <!--script for this page only-->
    <?= script_tag('assets/js/calendar-custom.js') ?>
    <?= script_tag('assets/js/jquery.rateit.min.js') ?>
    <!-- custom select -->
    <?= script_tag('assets/js/jquery.customSelect.min.js') ?>
    <?= script_tag('assets/assets/chart-master/Chart.js') ?>
    <!--custome script for all page-->
    <?= script_tag('assets/js/scripts.js') ?>
    <!-- custom script for this page-->
    <?= script_tag('assets/js/sparkline-chart.js') ?>
    <?= script_tag('assets/js/easy-pie-chart.js') ?>
    <?= script_tag('assets/js/jquery-jvectormap-1.2.2.min.js') ?>
    <?= script_tag('assets/js/jquery-jvectormap-world-mill-en.js') ?>
    <?= script_tag('assets/js/xcharts.min.js') ?>
    <?= script_tag('assets/js/jquery.autosize.min.js') ?>
    <?= script_tag('assets/js/jquery.placeholder.min.js') ?>
    <?= script_tag('assets/js/gdp-data.js') ?>
    <?= script_tag('assets/js/morris.min.js') ?>
    <?= script_tag('assets/js/sparklines.js') ?>
    <?= script_tag('assets/js/charts.js') ?>
    <?= script_tag('assets/js/jquery.slimscroll.min.js') ?>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    
  </body>
  </html>