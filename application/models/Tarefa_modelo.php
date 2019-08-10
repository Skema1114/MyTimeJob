<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class Tarefa_modelo extends MJR_Model {
	public $idTarefa;
	public $tipo;
	public $tarefa;
	public $dataCadastro;
	public $codigo;
	public $status;
	public $dataModificacao;
	
	
    public function __construct(){
        parent::__construct('Tarefa');
    }
	
	function get_id_field() {
		return "idTarefa";
	}
}
