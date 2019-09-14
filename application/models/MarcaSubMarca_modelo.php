<?php
/**
 * Modelo que representa os dados de um estado
 */
defined ('BASEPATH') or exit ('Acesso Negado');
class MarcaSubMarca_modelo extends MJR_Model {
	public $idSubMarca;
	public $nome;
	public $descricao;
	public $dataCadastro;

    public function __construct(){
        parent::__construct('MarcaSubMarca');
    }

	function get_id_field() {
		return "idSubMarca";
	}

}