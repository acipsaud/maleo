<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modloker extends CI_Model
{
    private $table = 'loker';

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_loker" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_loker',
                'label' => 'nama_loker',
                'rules' => 'required'
            ],
            [
                'field' => 'singkatan',
                'label' => 'singkatan',
                'rules' => 'required'
            ],
            [
                'field' => 'teritory',
                'label' => 'teritory',
                'rules' => 'required'
            ],
            [
                'field' => 'datel',
                'label' => 'datel',
                'rules' => 'required'
            ],
            [
                'field' => 'witel',
                'label' => 'witel',
                'rules' => 'required'
            ],
            [
                'field' => 'aktif',
                'label' => 'aktif',
                'rules' => 'required'
            ]
        ];
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_loker", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "nama_loker" => $this->input->post('nama_loker'),
            "singkatan" => $this->input->post('singkatan'),
            "teritory" => $this->input->post('teritory'),
            "datel" => $this->input->post('datel'),
            "witel" => $this->input->post('witel'),
            "aktif" => $this->input->post('aktif')
        );
        return $this->db->insert($this->table, $data);
    }


    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "nama_loker" => $this->input->post('nama_loker'),
            "singkatan" => $this->input->post('singkatan'),
            "teritory" => $this->input->post('teritory'),
            "datel" => $this->input->post('datel'),
            "witel" => $this->input->post('witel'),
            "aktif" => $this->input->post('aktif')
        );
        return $this->db->update($this->table, $data, array('id_loker' => $this->input->post('id_loker')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_loker" => $id));
    }
}
