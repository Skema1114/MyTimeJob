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
		$this->minhasmarcas();
		$this->set ( 'marca', $this->tarefaMarca_modelo->get_all () );
		$this->template->build ( 'listar_tarefa_marca_view' );
	}

	public function minhasmarcas() {
		// busca todos os tarefas e manda para tela
		$this->load->model ( 'tarefaStatus_modelo' );
		$this->load->model ( 'tarefaTipo_modelo' );
		$this->load->model ( 'marcaSubMarca_modelo' );
		$this->load->model ( 'tarefaMarca_modelo' );
		$this->set ( 'tipos', $this->tarefaTipo_modelo->get_all () );
		$this->set ( 'statuses', $this->tarefaStatus_modelo->get_all () );
		$this->set ( 'marcas', $this->tarefaMarca_modelo->get_all () );
		$this->set ( 'submarcas', $this->marcaSubMarca_modelo->get_all () );
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
		$this->minhasmarcas();
		$this->template->build ( 'editar_tarefa_marca_view' );

	}
	
	
	public function gravar() {
		// carrega dados da visao
		$this->tarefaMarca_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->tarefaMarca_modelo->dataCadastro = date("Y-m-d H:i:s");
		$this->tarefaMarca_modelo->gravar ();
		$this->editar ();
        redirect ( site_url ('tarefa/adicionar') );
	}
}
