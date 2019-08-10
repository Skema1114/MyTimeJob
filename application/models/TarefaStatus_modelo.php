<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class TarefaStatus_modelo extends MJR_Model {
	public $idStatus;
	public $nome;
	public $descricao;
	public $dataCadastro;
	
    public function __construct(){
        parent::__construct('TarefaStatus');
    }
	
	function get_id_field() {
		return "idStatus";
	}
	
}
