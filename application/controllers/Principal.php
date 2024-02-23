<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	
	public function index()
	{
		$this->load->view('landing');
        $this->vista_web();
	}

    public function vista_web()

	{
	
		$this->load->view('templates/head');
		$this->load->view('templates/menu');
		$this->load->view('templates/cuerpo');
		$this->load->view('templates/footer');

	}
	
}