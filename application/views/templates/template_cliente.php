<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/faviAgade.png')?>"/>
		<title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
	</head>
		<body>
		<div class='container'>
			<nav class="navbar navbar-default navbar-static-top">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">MENU</button>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
							</button>
							
							<a href="<?=base_url('sistema')?>">
								<img src="<?= base_url('assets/img/logo_simples.png')?>" class="navbar-brand" >
							</a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#" class='btn'>Bem vindo, <?php echo ucfirst($this->session->userdata('nome')); ?>!</a></li>
							</ul>
						</div>
			</div>
		</nav>
		<div class="container-fluid main-container">
			<div class="col-sm-2 sidebar">
				<div class="row">
					<!-- uncomment code for absolute positioning tweek see top comment in css -->
					<div class="absolute-wrapper"></div>
					<!-- Menu -->
					<div class="side-menu">
						<nav class="navbar navbar-default" role="navigation">
							<!-- Main Menu -->
							<div class="side-menu-container">
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?= base_url("candidato/menu") ?>"><span class="glyphicon glyphicon-user"></span> Dados pessoais</a></li>
									<li><a href="<?=base_url('candidato/imprime/'.$this->session->candidato->idCandidato) ?>"><span class="glyphicon glyphicon-tasks"></span> Curriculo</a></li>
									<li><a href="<?=base_url ('candidato/endereco')?>"><span class="glyphicon glyphicon-map-marker"></span> Endereço</a></li>
									<li><a href="<?=base_url ('FormacaoAcademica')?>"><span class="glyphicon glyphicon-education"></span> Escolaridade</a></li>
									<li><a href="<?=base_url ('candidato/oportunidades')?>"><span class="glyphicon glyphicon glyphicon-usd"></span> Oportunidades</a></li>
									<li><a href="<?=base_url ('ExperienciaProfissional')?>"><span class="glyphicon glyphicon-briefcase"></span> Exp. profissional</a></li>
									<li><a href="<?=base_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				</div>
				<div class="col-sm-10 content">
						<?php if(isset($msg_erro)){ ?>
								<div class="alert alert-danger fade in">
		    						<a href="#" class="close" data-dismiss="alert">&times;</a>
								    <strong>Atenção!</strong> <?=$msg_erro ?>
								</div>
						<?php } ?>
						<?php if(isset($msg_sucesso)){ ?>
								<div class="alert alert-success fade in">
        							<a href="#" class="close" data-dismiss="alert">&times;</a>
        							 <?=$msg_sucesso?>
							    </div>
						<?php } ?>
						
						<?php echo $template['body']; ?>	
				</div>
		</div>		</div>
		<footer class="pull-left footer" style="position: absolute;bottom: 0px; width: 100%; text-align: center;z-index:-1"  >
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2015 <a href="http://www.missoesjr.com.br">Missões Júnior</a>
  			</p>
  		</footer>
  		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-98821359-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>