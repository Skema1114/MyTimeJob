<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class PedidoAtualizacao_modelo extends MJR_Model {
	public $idPedidoAtualizacao;
	public $data;
	public $comentario;

	public function __construct() {
		parent::__construct ( 'PedidoAtualizacao' );
	}

	function get_id_field() {
		return "idPedidoAtualizacao";
	}
}