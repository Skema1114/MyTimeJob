<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( "usuario_modelo" );
	}
	public function index($msg = null) {
		$this->template->js ( 'jquery.validate.min.js' );
		$this->template->js ( 'login.js' );
		if ($msg) {
			$this->template->set ( 'mensagem', $msg );
		}
		$this->template->build ( 'login_view' );
	}
	public function esqueciasenha() {
		$this->template->build ( 'esqueciasenha_view' );
	}
	public function logar() {
		$email = $this->security->xss_clean ( $this->input->post ( 'email' ) );
		$senha = $this->security->xss_clean ( $this->input->post ( 'senha' ) );
		
		if ($userdata = $this->usuario_modelo->login ( $email, $senha )) {
			$this->session->set_userdata ( $userdata );
			
			if ($userdata['tipoUsuario'] == 1) {
				redirect ( site_url ( 'sistema' ) );
			}
			else {
				$this->load->model ( "candidato_modelo" );
				$candidato = $this->candidato_modelo->busca_por_usuario ( $userdata ['id'] );
				$this->session->set_userdata ( 'candidato', $candidato );
				redirect ( site_url ( 'candidato' ) );
				
			}
		} else {
			$this->index ( "Email ou Senha incorretos!" );
		}
	}
	public function logout() {
		$this->session->sess_destroy ();
		redirect ( site_url('login') );
	}

	/**
	 * Busca um usuario a partir do endereco de email
	 */
	function busca_por_email() {
		// epga o parametro
		$email = $this->input->post('email');
		$usu = $this->usuario_modelo->busca_por_email ($email);
		if($usu){
			echo $usu->nome;
		}
		
	}
}