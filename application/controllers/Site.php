<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
/**
 * Este controlador nao estende o controlador padrão por não precisa estar logado para operá-lo
 */
class Site extends CI_Controller {
	public function index() {
		$this->template->build ( 'site_view' );
	}
}