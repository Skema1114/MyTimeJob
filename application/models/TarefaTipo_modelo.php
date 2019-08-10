<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class TarefaTipo_modelo extends MJR_Model {
	public $idTipo;
	public $nome;
	public $descricao;
	public $dataCadastro;
	
    public function __construct(){
        parent::__construct('TarefaTipo');
    }
	
	function get_id_field() {
		return "idTipo";
	}
	
}
