<?php
/**
 * Modelo que representa os dados de um usuarioResponsavel
 */
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class UsuarioResponsavel_modelo extends MJR_Model {
	public $idUsuarioResponsavel;
	public $dataInicio;
	public $dataFim;
	public $idUsuario;
	
	public function __construct() {
		parent::__construct ( 'UsuarioResponsavel' );
	}
	
	public function get_id_field() {
		return "idUsuarioResponsavel";
	}
	
	/**
	 * Busca todos os dados da tabela
	 */
	public function get_all() {
		$this->db->select('idUsuarioResponsavel,UsuarioResponsavel.dataInicio,dataFim,nome');
		$this->db->from("UsuarioResponsavel");
		$this->db->join('Usuario','UsuarioResponsavel.idUsuario = Usuario.idUsuario');
		$result = $this->db->get();
		if ($result->num_rows ()) {
			return $result->result ();
		}
		return array ();
	}
	
	/**
	 * Busca por usuario;
	 */
	public function busca_por_usuario($id) {
		$this->db->where('idUsuario', $id);
		$result = $this->db->get('UsuarioResponsavel');
		if ($result->num_rows ()) {
			return $result->result ();
		}
		return array ();
	}
}