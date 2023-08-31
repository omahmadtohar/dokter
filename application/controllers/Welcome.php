<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pasienRajal');
	}

	public function index()
	{
		$data['pasienRajal'] = $this->m_pasienRajal->getPasienRajal()->result();
		$this->load->view('menu/header');
		$this->load->view('menu/index');
		$this->load->view('menu/footer');
	}
}
