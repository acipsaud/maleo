<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modregister extends CI_Model
{
    private $table = 'new_user';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'username',  //samakan dengan atribute name pada tags input
                'label' => 'username',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nama_lengkap',
                'label' => 'nama_lengkap',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'teritory',
                'label' => 'teritory',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'loker',
                'label' => 'loker',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_telp',
                'label' => 'no_telp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ]
        ];
    }

    public function rulesAll()
    {
        return [
            [
                'field' => 'username',  //samakan dengan atribute name pada tags input
                'label' => 'username',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nama_lengkap',
                'label' => 'nama_lengkap',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'teritory',
                'label' => 'teritory',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'loker',
                'label' => 'loker',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_telp',
                'label' => 'no_telp',
                'rules' => 'trim|required|numeric|min_length[7]|max_length[15]'
            ],
            [
                'field' => 'level',
                'label' => 'level',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'blokir',
                'label' => 'blokir',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_user" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_user", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
           
        $data = array(
            "username" => $this->input->post('username'),
            "password" => $password,
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "teritory" => $this->input->post('teritory'),
            "loker" => $this->input->post('loker'),
            "no_telp" => $this->input->post('no_telp'),
            "level" => "user",
            "blokir" => "N",
            "last_login" => date("Y-m-d H:i:s")
        );
        return $this->db->insert($this->table, $data);
    }

    public function saveAll()
    {
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
           
        $data = array(
            "username" => $this->input->post('username'),
            "password" => $password,
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "teritory" => $this->input->post('teritory'),
            "loker" => $this->input->post('loker'),
            "no_telp" => $this->input->post('no_telp'),
            "level" => $this->input->post('level'),
            "blokir" => $this->input->post('blokir'),
            "last_login" => date("Y-m-d H:i:s")
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        if ($this->input->post('password')=="123456")
        {
            $password = password_hash($this->input->post('mainpassword'), PASSWORD_DEFAULT);
        }
        else
        {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        }

        $data = array(
            "username" => $this->input->post('username'),
            "password" => $password,
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "teritory" => $this->input->post('teritory'),
            "loker" => $this->input->post('loker'),
            "no_telp" => $this->input->post('no_telp'),
            "level" => $this->input->post('level'),
            "blokir" => $this->input->post('blokir'),
            "last_login" => date("Y-m-d H:i:s")
        );
        return $this->db->update($this->table, $data, array('id_user' => $this->input->post('id_user')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_user" => $id));
    }
}
