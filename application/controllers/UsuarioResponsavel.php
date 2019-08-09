<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class UsuarioResponsavel extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'UsuarioResponsavel_modelo' );
		$this->load->model ( 'usuario_modelo' ); // PK
	}
	public function index() {
		$this->set ( 'UsuariosResponsaveis', $this->UsuarioResponsavel_modelo->get_all () );
		$this->template->build ( 'listar_usuarioresponsavel_view' );
	}
	public function adicionar() {
		$this->editar ();
	}
	public function editar($id = 0) {
		$this->set ( 'usuarios', $this->usuario_modelo->get_all () ); // adiciona os dados dos usuarios para seleção.
		$this->UsuarioResponsavel_modelo->get_by_id ( $id );
		$this->template->build ( 'editar_usuarioresponsavel_view' );
	}
	public function remover($id = 0) {
		$this->UsuarioResponsavel_modelo->remover ( $id );
		$this->index ();
	}
	public function gravar() {
		// carrega dados da visao
		// $this->UsuarioResponsavel_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->UsuarioResponsavel_modelo->gravar ();
		$this->editar ();
	}
	
}