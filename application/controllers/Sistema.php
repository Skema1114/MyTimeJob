<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Sistema extends MJR_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {
		$this->template->build( 'home_sistema_view' );

	}
}