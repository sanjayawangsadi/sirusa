<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $validation     = $this->form_validation;
        $data           = $this->User_model;
        $validation->set_rules($data->rules());

        if ($validation->run()) {
            if ($this->input->post()) {
                if ($this->User_model->isLogin()) redirect(base_url('admin'));
            }
        }

        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}
