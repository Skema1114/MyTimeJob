<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Usuario_modelo extends MJR_Model {
	public $idUsuario;
	public $nome;
	public $email;
	public $senha;
	public $tipoUsuario;

	public function __construct() {
		parent::__construct ( 'Usuario' );
	}

	function get_id_field() {
		return "idUsuario";
	}

	function get_usuarios($id) {
		$this->get_by_id($id);

		$objvar = get_object_vars($this);
		foreach ($objvar as $key => $value) {
			$arr[$key] = $value;
		}
		return $arr;
	}

	/**
	 * Efetua Login do usuário caso email e senha estiverem corretos
	 */
	function login($email, $senha) {
		$this->db->where ( 'email', $email );
		$query = $this->db->get ( 'Usuario' );

		if ($query->num_rows () > 0) {
			$result = $query->row ();
			if (password_verify ( $senha, $result->senha )) {
				$userdata = array (
						'id' => $result->idUsuario,
						'nome' => $result->nome,
						'email' => $result->email,
						'tipoUsuario'=> $result->tipoUsuario,
						'senha'=> $result->senha,
						'logado' => TRUE
				);
				return $userdata;
			}
		}
		return null;
	}




	/**
	 * Busca todos os usuarios que são adminsitradores
	 */
	function busca_administradores() {
		$this->db->where ( 'tipoUsuario', 1);
		$query = $this->db->get ( 'Usuario' );

		if ($query->num_rows ()) {
			return $result = $query->result();
		}
		return array();
	}


	/**
	 * Busca um usuario a partir do endereco de email
	 */
	function busca_por_email($email) {
		$this->db->where ( 'email', $email );
		$query = $this->db->get ( 'Usuario' );

		if ($query->num_rows ()) {
			return $result = $query->row ();
		}
		return null;
	}
}