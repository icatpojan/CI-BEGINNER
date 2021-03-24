<?php
class Berita_model extends CI_Model
{

	public function view($view)
	{
		$this->load->view($view);
	}

}
