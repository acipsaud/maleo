<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kat_indikator extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
        $this->load->model('Modkatindikator');

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $dataisi['getkat']=$this->Modkatindikator->getAll();
		$this->template('kategori/kategori',$dataisi);
	}  

	public function add()
    {
        $dataisi['getkat']=$this->Modkatindikator->getAll();
		$this->template('kategori/addkategori',$dataisi);
    }

	public function edit($id_kategori="")
    {
		$dataisi['getkat']=$this->Modkatindikator->getById($id_kategori);
		$this->template('kategori/editkategori',$dataisi);
	}

	public function update()
    {
        $kategori = $this->Modkatindikator; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($kategori->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $kategori->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('kat_indikator/');
        }
		else
		{
			$id_kategori=$this->input->post('id_kategori');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_kategori);
		}
    }

	public function save()
    {
        $kategori = $this->Modkatindikator; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($kategori->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('kat_indikator/');
        }
		else
		{
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->template('kategori/addkategori',$dataisi);
		}
    }

	public function hapus($id_kategori="")
    {
		$this->Modkatindikator->delete($id_kategori);
		redirect('kat_indikator/');
	}

    public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}