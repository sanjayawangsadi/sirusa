<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Peta_model');
	}
	
	public function index()
	{
		$data = $this->Peta_model->getBySelect(['nama', 'lat', 'long']);
		$this->load->view('peta', ['data' => $data]);
	}
}
