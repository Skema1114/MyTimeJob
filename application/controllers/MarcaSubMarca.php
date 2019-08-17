<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Controlador para entidade  tarefa
 */
class MarcaSubMarca extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'marcaSubMarca_modelo' );				
	}
	
	/**
	 * Metodo chamado pro default da classe,
	 *  carrega a view de listagem de tarefas
	 */
	public function index() {
		// busca todos os tarefas e manda para tela
		$this->set ( 'submarca', $this->marcaSubMarca_modelo->get_all () );
		$this->template->build ( 'listar_marca_submarca_view' );
	}
	
	/**
	 * Carrega view com formulário para adicionar tarefas
	 */
	public function adicionar() {
		// redireciona para edicao
		$this->editar ();
	}
	
	/**
	 * Remove um tarefa
	 */
	public function remover($id=0) {
		// remove o item
		$user = $this->marcaSubMarca_modelo->remover ( $id );
		// atualiza tabela
		$this->index ();
	}
	
	/**
	 * Carrega formulário para edição de tarefas
	 */
	public function editar($id = 0) {
		
		$this->marcaSubMarca_modelo->get_by_id($id); 
		// carrega template
		$this->template->build ( 'editar_marca_submarca_view' );

	}
	
	
	public function gravar() {
		// carrega dados da visao
		$this->marcaSubMarca_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->marcaSubMarca_modelo->dataCadastro = date("Y-m-d H:i:s");
		$this->marcaSubMarca_modelo->gravar ();
		$this->editar ();
        redirect ( site_url ('tarefa/adicionar') );
	}
}
