<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table = 'users';

    protected $id;
    protected $username;
    protected $password;

    
    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];

        $data = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $post               = $this->input->post();
        $this->id           = $post['id'];
        $this->password     = $post['password'];

        $data = [
            'id'         => $this->id,
            'password'   => $this->password,
        ];

        return $this->db->update($this->table, $data, ['id' => $post['id']]);
    }

    public function isLogin()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];

        $this->db->where('username', $this->username);
        $user = $this->db->get($this->table)->row();

        if ($user) {
            if ($this->password == $user->password) {
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }

        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }
}
