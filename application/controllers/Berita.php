<?php
class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
	}

	public function index()
	{
		$this->berita_model->view('templates/header');
		$this->berita_model->view('berita');
		$this->berita_model->view('templates/footer');
	}
}
