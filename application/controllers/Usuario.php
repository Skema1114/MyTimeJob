<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Usuario extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ('template_admin');
		$this->load->model ( 'usuario_modelo' );
		$this->load->library ( 'password_crypt' );
	}
	
	/**
	 * Metodo chamado pro default da classe, carrega a view de listagem dos Usuarios
	 */
	public function index() {
		// busca todos os usuário e manda para tela
		$this->set ( 'usuarios', $this->usuario_modelo->busca_administradores() );
		$this->template->build ( 'listar_usuario_view' );
	}
	
	/**
	 * Carrega view com formulário para adicionar Usuarios
	 */
	public function adicionar() {
		$this->editar ();
	}
	
	/**
	 * Remove usuário e caso o usuário removido for o mesmo logado, efetua logout automaticamente.
	 */
	public function remover($id=0) {
		// remove o item
		$user = $this->usuario_modelo->remover ( $id );
		
		// Se for o usuário logado, desloga ele.
		if ($this->session->email == $this->usuario_modelo->email) {
			$this->session->sess_destroy ();
			redirect ( site_url () );
		}
		
		// atualiza tabela
		$this->index ();
	}
	
	/**
	 * Carrega formulário para edição do cadastro com os dados públicos já preenchidos
	 */
	public function editar($id = 0) {
		
		$this->usuario_modelo->get_by_id($id); 
		// carrega template
		$this->template->js ( 'editar_usuario.js', 'assets/views/usuario/' );
		$this->template->build ( 'editar_usuario_view' );
	}
	
	/**
	*Função para criar o formulário para edição de senhas
	
	**/
	public function Senha($id) {
		
		$this->usuario_modelo->get_by_id($id);
		
		// carrega template
		///$this->template->js ( 'editar_usuario.js', 'assets/views/usuario/' );
		$this->template->build ( 'trocar_senha_usuario_view' );
		
	}
	
	
	
	
	public function trocarSenha() {
		
		$senha_atual = $this->input->post ( 'senha_atual' );
		$nova_senha = $this->input->post ( 'nova_senha' );
		$con_senha = $this->input->post ( 'con_senha' );
		$id = $this->input->post ( 'idUsuario' );
		
		$this->usuario_modelo->get_by_id($id); 
			
		
		$senha = $this->usuario_modelo->senha;
		
		if (password_verify ( $senha_atual, $senha )) {	
			if ($nova_senha != $senha_atual) {			
				if ($nova_senha == $con_senha) {					
					// senhas ok cifra a senha
					$this->usuario_modelo->senha = $this->password_crypt->bcrypt ( $nova_senha );
					$this->usuario_modelo->gravar ();					
					$this->set ( 'msg_sucesso', 'Senha atualizada com sucesso!' );					
				}else{					
					$this->set( 'msg_erro', 'A nova senha e a senha de confirmação informadas não coincidem' );					
				}				
			}else{				
				$this->set( 'msg_erro', 'A senha atual e a nova senha informadas são iguais' );							
			}			
		}else{					
			$this->set( 'msg_erro', 'A senha atual informada não coincide com a senha registrada' );		
		}		
		
		$this->senha($id);
		
	}
	
	

	
	
	
	public function gravar() {
		// carrega dados da visao
		$this->usuario_modelo->loadData ();
		if ($this->usuario_modelo->is_new ()) {
			// registro novo valida se a senhas são iguais
			$conf_senha = $this->input->post ( 'con_senha' );
			$senha = $this->usuario_modelo->senha;
			if ($senha != $conf_senha) {
				$this->set ( 'msg_erro', 'As senhas informadas não coincidem' );
				// redireciona
				return $this->editar ();
			}
			// senhas ok cifra a senha
			$this->usuario_modelo->senha = $this->password_crypt->bcrypt ( $senha );
			// verifica se o email esta repetido
			$email = $this->usuario_modelo->email; 
			if($this->usuario_modelo->busca_por_email($email)){
				$this->set ( 'msg_erro', 'O endereço de e-mail informado já em está em uso por outro usuário' );
				return $this->editar ();
			}
		}
		
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->usuario_modelo->gravar ();
		$this->editar ();
	}
}