<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Peta_model');
        $this->load->model("User_model");
        $this->load->library('form_validation');
        if ($this->User_model->isNotLogin()) {
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data = $this->Peta_model->getAll();
        $this->load->view('admin/peta/list', ['data' => $data]);
    }

    public function tambah()
    {
        $validation     = $this->form_validation;
        $peta           = $this->Peta_model;
        $validation->set_rules($peta->rules());

        if ($validation->run()) {
            $peta->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }

        $this->load->view('admin/peta/add_form');
    }

    public function edit($id = null)
    {
        if (!isset($id)) {
            redirect('admin/peta');
        }

        $validation     = $this->form_validation;
        $peta           = $this->Peta_model;
        $validation->set_rules($peta->rules());

        if ($validation->run()) {
            $peta->update();
            $this->session->set_flashdata('success', 'Data berhasil diperbarui');
        }

        $data = $peta->getById($id);

        if (!$data) {
            show_404();
        }

        $this->load->view('admin/peta/edit_form', ['data' => $data]);
    }

    public function delete($id = null)
    {
        if (!isset($id)) {
            show_404();
        }

        $peta = $this->Peta_model;
        if ($peta->delete($id)) {
            redirect('admin/peta');
        }
    }
}
