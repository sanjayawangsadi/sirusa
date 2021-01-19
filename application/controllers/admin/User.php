<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        if ($this->User_model->isNotLogin()) {
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data = $this->User_model->getAll();
        $this->load->view('admin/users/list', ['data' => $data]);
    }

    public function settings()
    {
        $validation     = $this->form_validation;
        $data = $this->User_model;
        $validation->set_rules($data->rules());
        
        if ($validation->run()) {
            $data->update();
        }

        $this->load->view('admin/users/settings');
    }

    public function tambah()
    {
        $validation     = $this->form_validation;
        $user           = $this->User_model;
        $validation->set_rules($user->rules());
        
        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'User baru berhasil ditambahkan');
        }
        $this->load->view('admin/users/add_form');
    }
}
