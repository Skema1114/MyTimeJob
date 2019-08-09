<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class Curso_modelo extends MJR_Model {
	public $idCurso;
	public $nomeCurso;
	
	
    public function __construct(){
        parent::__construct('Curso');
    }
	
	function get_id_field() {
		return "idCurso";
	}
	
}
