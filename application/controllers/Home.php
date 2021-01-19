<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Peta_model');
    }

    public function index()
    {
        $data = $this->Peta_model->getAll();
        $this->load->view('home', ['data' => $data]);
    }

    public function view($slug = null)
    {
        $data = $this->Peta_model->getBySlug($slug);

        if (!$data) {
            show_404();
        }

        $this->load->view('view', ['data' => $data]);
    }
}
