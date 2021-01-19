<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Peta_model');
        $this->load->model("User_model");
        if ($this->User_model->isNotLogin()) {
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $markers = $this->Peta_model->getBySelect(['nama', 'lat', 'long']);
        $this->load->view('admin/dashboard', ['markers' => $markers]);
    }
}
