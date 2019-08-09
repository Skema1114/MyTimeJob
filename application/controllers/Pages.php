<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {
	public function view($page){
		if(!file_exists(APPPATH.'views/'.$page.'.php')){
			$this->load->view("errors/html/error_404");
		}
		else {
			$data['title'] = ucfirst($page);

			$this->load->view('header_view', $data);
			$this->load->view($page,$data);
			$this->load->view('footer_view',$data);
		}
	}
}