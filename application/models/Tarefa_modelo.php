<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class Tarefa_modelo extends MJR_Model {
	public $idTarefa;
	public $tipoId;
	public $marcaId;
	public $subMarcaId;
	public $dataCadastro;
	public $codigo;
	public $statusId;
	public $dataModificacao;
	
	
    public function __construct(){
        parent::__construct('Tarefa');
    }
	
	function get_id_field() {
		return "idTarefa";
	}
}
