<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Controlador para entidade  tarefa
 */
class TarefaMarca extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'tarefaMarca_modelo' );				
	}
	
	/**
	 * Metodo chamado pro default da classe,
	 *  carrega a view de listagem de tarefas
	 */
	public function index() {
		// busca todos os tarefas e manda para tela
		$this->set ( 'marca', $this->tarefaMarca_modelo->get_all () );
		$this->template->build ( 'listar_tarefa_marca_view' );
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
		$user = $this->tarefaMarca_modelo->remover ( $id );
		// atualiza tabela
		$this->index ();
	}
	
	/**
	 * Carrega formulário para edição de tarefas
	 */
	public function editar($id = 0) {
		
		$this->tarefaMarca_modelo->get_by_id($id); 
		// carrega template
		$this->template->build ( 'editar_tarefa_marca_view' );

	}
	
	
	public function gravar() {
		// carrega dados da visao
		$this->tarefaMarca_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->tarefaMarca_modelo->gravar ();
		$this->editar ();
        redirect ( site_url ('tarefamarca') );
	}
}
