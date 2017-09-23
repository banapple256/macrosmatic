<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['header'] = 'template/header';
		$data['sidebar'] = 'template/sidebar';
		$data['main_content'] = 'dashboard'; 
		$data['footer'] = 'template/footer'; 
		$this->load->view('template/template',$data);
	}
}
?>
