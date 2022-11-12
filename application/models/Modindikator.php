<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modindikator extends CI_Model
{
    private $table = 'indikator';

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

    public function rules()
    {
        return [
            [
                'field' => 'indikator',
                'label' => 'indikator',
                'rules' => 'required'
            ],
            [
                'field' => 'satuan',
                'label' => 'satuan',
                'rules' => 'required'
            ],
            [
                'field' => 'kategori_indikator',
                'label' => 'kategori_indikator',
                'rules' => 'required'
            ],
            [
                'field' => 'uic_witel',
                'label' => 'uic_witel',
                'rules' => 'required'
            ],
            [
                'field' => 'aktif',
                'label' => 'aktif',
                'rules' => 'required'
            ]
        ];
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "indikator" => $this->input->post('indikator'),
            "kategori_indikator" => $this->input->post('kategori_indikator'),
            "satuan" => $this->input->post('satuan'),
            "teritory" => $this->input->post('teritory'),
            "uic_witel" => $this->input->post('uic_witel'),
            "uic_treg" => $this->input->post('uic_treg'),
            "aktif" => $this->input->post('aktif')
        );
        return $this->db->insert($this->table, $data);
    }


    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "indikator" => $this->input->post('indikator'),
            "kategori_indikator" => $this->input->post('kategori_indikator'),
            "satuan" => $this->input->post('satuan'),
            "teritory" => $this->input->post('teritory'),
            "uic_witel" => $this->input->post('uic_witel'),
            "uic_treg" => $this->input->post('uic_treg'),
            "aktif" => $this->input->post('aktif')
        );
        return $this->db->update($this->table, $data, array('id_indikator' => $this->input->post('id_indikator')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_indikator" => $id));
    }
}
