<?php
class MJR_Controller extends CI_Controller {
	public function __construct($template = 'template_admin') {
		parent::__construct ();
		
		$logado = $this->session->userdata ( "logado" );
		
		if (! $logado) {
			redirect ( site_url ( "Login" ) );
		}		
		$this->template->css ( 'home.css', 'assets/views/sistema/' );
		
		// recurso de navegacao em tabelas
		$this->template->css('data-table.css');
		$this->template->js('data-table.js');
		
		//Corrige bug na margem dos elementos do formulário quando há mais de um elemento na mesma linha.
		$this->template->css('form_margin_fix.css', 'assets/css/');
		$this->template->js ( 'home.js', 'assets/views/sistema/' );
		
		//Fixa o layout enviado por parametro para o construtor
		$this->template->set_layout ( $template );
		
		//Verifica se usuário tem permissão para acessar página requisitada
		$this->has_permission();
	}
	
	/**
	 * Seta uma informação para a visão
	 */
	public function set($chave, $valor) {
		$this->template->set ( $chave, $valor );
	}
	
	
	/**
	 * Verifica credenciais do usuário e determina se o mesmo possuí 
	 * permissoes de acesso ao conteúdo requerido.
	 */
	public function has_permission(){
		//Caso seja o template publico (pag. de login/cadastro) retorna true.
		if($this->template->get_active_layout() == 'template_site')
		{
			return TRUE;
		}
		else
			//Senão verifica se layout é do acesso admin.
			if($this->template->get_active_layout() == 'template_admin')
			{
				//Se usuário for admin também. retorna TRUE, senão 
				//redireciona para a área cujo usuário tem acesso.
				if($this->session->tipoUsuario)
				{
					return TRUE;
				}
				else 
				{
					redirect('candidato');
					return FALSE;
				}
			}
			//Caso layout n for admin nem publico. É da área de candidato.
			else  
			{
				//Se um usuário administrador tentar acessar área de candidato,
				//redireciona para o sistema. Senão libera acesso, retorna TRUE.
				if($this->session->tipoUsuario)
				{
					redirect('sistema');
					return FALSE;
				}
				else 
				{
					return TRUE;
				}
			}
	}
}

/************************************************************************************************
 * Controlador para telas de cadastro, incluir por padrao os arquivos de manipulação para formulários
 */
class MJR_Form_Controller extends MJR_Controller {
	public function __construct($template = 'template_admin') {
		parent::__construct ($template);
		// add extra js file
		$this->template->js ( 'jquery.validate.min.js' );
		$this->template->js ( 'jquery.format.1.04.js' );
		$this->template->js ( 'jquery.maskedinput.min.js' );
		$this->template->js ( 'form.js' );
	}
}