<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class TarefaMarca_modelo extends MJR_Model {
	public $idMarca;
	public $nome;
	public $descricao;
	public $dataCadastro;
	
    public function __construct(){
        parent::__construct('TarefaMarca');
    }
	
	function get_id_field() {
		return "idMarca";
	}
	
}
