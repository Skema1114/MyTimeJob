<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Controlador para entidade  curso
 */
class Curso extends MJR_Form_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'curso_modelo' );				
	}
	
	/**
	 * Metodo chamado pro default da classe,
	 *  carrega a view de listagem de cursos
	 */
	public function index() {
		// busca todos os cursos e manda para tela
		$this->set ( 'cursos', $this->curso_modelo->get_all () );
		$this->template->build ( 'listar_curso_view' );
	}
	
	/**
	 * Carrega view com formulário para adicionar cursos
	 */
	public function adicionar() {
		// redireciona para edicao
		$this->editar ();
	}
	
	/**
	 * Remove um curso
	 */
	public function remover($id=0) {
		// remove o item
		$user = $this->curso_modelo->remover ( $id );
		// atualiza tabela
		$this->index ();
	}
	
	/**
	 * Carrega formulário para edição de cursos
	 */
	public function editar($id = 0) {
		
		$this->curso_modelo->get_by_id($id); 
		// carrega template
		$this->template->build ( 'editar_curso_view' );

	}
	
	
	public function gravar() {
		// carrega dados da visao
		$this->curso_modelo->loadData ();
		// grava a informação
		$this->set ( 'msg_sucesso', 'Gravado com sucesso!' );
		$this->curso_modelo->gravar ();
		$this->editar ();
        redirect ( site_url ('curso') );
	}
}
