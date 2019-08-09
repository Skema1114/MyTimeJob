<form class="login-form" action="<?= site_url('login/logar')?>" method="POST">
           <h2 class="form-signin-heading text-center">Área para usuários cadastrados</h2>
          
      <div class="login-wrap">
        <p class="login-img"><?=img('assets/img/logo.png', FALSE, array('width' => '160', 'height' => '120'))?></p>
        <div class="input-group">
            
          <span class="input-group-addon"><i class="icon_profile"></i></span>
            
            
          <input type="email" placeholder="E-mail" value="" name="email" class="form-control" required autofocus>
            
            
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
         
            
            <input type="password" class="form-control" name="senha" placeholder="Senha"  required >
            
        </div>
       
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        
      </div>
    </form>
  </div>