<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_model extends CI_Model
{
    protected $table = "peta";

    protected $id;
    protected $nama;
    protected $lat;
    protected $long;
    protected $alamat;
    protected $image;
    protected $telepon;
    protected $slug;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'latitude',
                'label' => 'latitude',
                'rules' => 'required'
            ],

            [
                'field' => 'longitude',
                'label' => 'longitude',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'telepon',
                'label' => 'telepon',
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

    public function getBySlug($slug)
    {
        return $this->db->get_where($this->table, ['slug' => $slug])->row();
    }

    public function getBySelect($select)
    {
        $this->db->select($select);
        return $this->db->get($this->table)->result();
    }

    public function save()
    {
        $post               = $this->input->post();
        $this->id           = uniqid();
        $this->nama         = $post['nama'];
        $this->lat          = $post['latitude'];
        $this->long         = $post['longitude'];
        $this->alamat       = $post['alamat'];
        $this->image        = $this->uploadImage();
        $this->telepon      = $post['telepon'];
        $out                = explode(" ", $this->nama);
        $slug               = implode("-", $out);
        $this->slug         = $slug;

        $data = [
            'nama'      => $this->nama,
            'lat'       => $this->lat,
            'long'      => $this->long,
            'alamat'    => $this->alamat,
            'image'     => $this->image,
            'telepon'   => $this->telepon,
            'slug'      => $this->slug
        ];

        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $post               = $this->input->post();
        $this->id           = $post['id'];
        $this->nama         = $post['nama'];
        $this->lat          = $post['latitude'];
        $this->long         = $post['longitude'];
        $this->alamat       = $post['alamat'];
        $filename           = $_FILES['thumbnail']['name'];

        if (!empty($filename)) {
            $this->image    = $this->uploadImage();
        } else {
            $this->image    = $post["old_thumbnail"];
        }

        $this->telepon      = $post['telepon'];
        $out                = explode(" ", $this->nama);
        $slug               = implode("-", $out);
        $this->slug         = $slug;

        $data = [
            'nama'      => $this->nama,
            'lat'       => $this->lat,
            'long'      => $this->long,
            'alamat'    => $this->alamat,
            'image'     => $this->image,
            'telepon'   => $this->telepon,
            'slug'      => $this->slug
        ];

        return $this->db->update($this->table, $data, ['id' => $post['id']]);
    }

    public function delete($id)
    {
        $this->deleteImage($id);
        return $this->db->delete($this->table, ['id' => $id]);
    }

    protected function uploadImage()
    {
        $config['upload_path']   = './upload/thumbnail/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = $this->id;
        $config['overwrite']     = true;
        $config['max_size']      = '1024';
        //$config['max_width'] = '1024';
        //$config['max_height'] = '768';

        $this->load->library('upload', $config);

        $field_name = "thumbnail";
        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data("file_name");
        }

        //print_r($this->upload->display_errors());
        return 'default.jpg';
    }

    protected function deleteImage($id)
    {
        $data = $this->getById($id);
        if ($data->image != "default.jpg") {
            $filename = explode(".", $data->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/thumbnail/$filename.*"));
        }
    }
}
