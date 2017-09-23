<?php defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>
<?php
	$this->load->view($header);
	$this->load->view($sidebar);
	$this->load->view($main_content);
	$this->load->view($footer);
?>