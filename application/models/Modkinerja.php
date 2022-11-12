<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modkinerja extends CI_Model
{
    private $table = 'kinerja';

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_indikator" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_indikator", "asc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        // $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
           
        // $data = array(
        //     "username" => $this->input->post('username'),
        //     "password" => $password,
        //     "nama_lengkap" => $this->input->post('nama_lengkap'),
        //     "teritory" => $this->input->post('teritory'),
        //     "loker" => $this->input->post('loker'),
        //     "no_telp" => $this->input->post('no_telp'),
        //     "level" => "user",
        //     "blokir" => "N",
        //     "last_login" => date("Y-m-d H:i:s")
        // );
        // return $this->db->insert($this->table, $data);
    }


    //edit data mahasiswa
    public function update()
    {
        // $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        // $data = array(
        //     "username" => $this->input->post('username'),
        //     "password" => $password,
        //     "nama_lengkap" => $this->input->post('nama_lengkap'),
        //     "teritory" => $this->input->post('teritory'),
        //     "loker" => $this->input->post('loker'),
        //     "no_telp" => $this->input->post('no_telp'),
        //     "level" => "user",
        //     "blokir" => "N",
        //     "last_login" => date('d-m-Y h:i:s')
        // );
        // return $this->db->update($this->table, $data, array('id_user' => $this->input->post('IdMhsw')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_indikator" => $id));
    }
}
