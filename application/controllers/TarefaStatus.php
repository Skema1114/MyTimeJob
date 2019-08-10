<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Controlador para entidade  tarefa
 */
class TarefaStatus extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'tarefaStatus_modelo' );				
	}
	
	/**
	 * Metodo chamado pro default da classe,
	 *  carrega a view de listagem de tarefas
	 */
	public function index() {
		// busca todos os tarefas e manda para tela
		$this->set ( 'status', $this->tarefaStatus_modelo->get_all () );
		$this->template->build ( 'listar_tarefa_status_view' );
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
		$user = $this->tarefaStatus_modelo->remover ( $id );
		// atualiza tabela
		$this->index ();
	}
	
	/**
	 * Carrega formulário para edição de tarefas
	 */
	public function editar($id = 0) {
		
		$this->tarefaStatus_modelo->get_by_id($id); 
		// carrega template
		$this->template->build ( 'editar_tarefa_status_view' );

	}
	
	
	public function gravar() {
		// carrega dados da visao
		$this->tarefaStatus_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->tarefaStatus_modelo->gravar ();
		$this->editar ();
        redirect ( site_url ('tarefastatus') );
	}
}
