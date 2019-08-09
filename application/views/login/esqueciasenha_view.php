<div class="container">
	<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="margin-top: 50px; display: block;" id="loginbox">
		<div style="margin: 5%; text-align: center">
			<img src="<?=base_url('assets/img/logo_simples.png')?>" title="Agadê" />
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">
					<span class="glyphicon glyphicon-hand-right"></span> Esqueceu sua senha? Informe seu e-mail e clique em recuperar senha.
				</div>
			</div>
			<div class="panel-body" style="padding-top: 30px">
			<?= form_open( 'login/busca_por_email' )?><!-- ADICIONAR METODO -->
				<div class="alert alert-danger col-sm-12" id="login-alert" style="display: none"></div>
				<div class="input-group" style="margin-bottom: 15px">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input type="email" placeholder="e-mail" value="" name="email"
						class="form-control" required id="login-username">
				</div>
				<div class="form-group" style="margin-top: 10px">
					<div class="col-sm-12 controls">
						<input type='submit' class='submitForm btn btn-success' value="Recuperar senha">

					</div>
				</div>		
			<?= form_close()?>			
			</div>
		</div>
	</div>
</div>