<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Controlador para entidade  tarefa
 */
class TarefaTipo extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'tarefaTipo_modelo' );				
	}
	
	/**
	 * Metodo chamado pro default da classe,
	 *  carrega a view de listagem de tarefas
	 */
	public function index() {
		// busca todos os tarefas e manda para tela
		$this->set ( 'tipo', $this->tarefaTipo_modelo->get_all () );
		$this->template->build ( 'listar_tarefa_tipo_view' );
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
		$user = $this->tarefaTipo_modelo->remover ( $id );
		// atualiza tabela
		$this->index ();
	}
	
	/**
	 * Carrega formulário para edição de tarefas
	 */
	public function editar($id = 0) {
		
		$this->tarefaTipo_modelo->get_by_id($id); 
		// carrega template
		$this->template->build ( 'editar_tarefa_tipo_view' );

	}
	
	
	public function gravar() {
		// carrega dados da visao
		$this->tarefaTipo_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->tarefaTipo_modelo->gravar ();
		$this->editar ();
        redirect ( site_url ('tarefatipo') );
	}
}
