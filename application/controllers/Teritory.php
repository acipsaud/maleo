<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teritory extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
        $this->load->model('Modteritory');
		$this->load->model('Modloker');
		$this->load->model('Modkandatel');
		$this->load->model('Modwitel');

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $dataisi['getteritory']=$this->db->query("select * from teritory where area='sto'")->result();
		$this->template('teritory/teritory',$dataisi);
	}  

	public function add()
    {
        $dataisi['getkandatel']=$this->Modkandatel->getAll();
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
		$this->template('teritory/addteritory',$dataisi); 
    }

	public function edit($id_teritory="")
    {
        $dataisi['getkandatel']=$this->Modkandatel->getAll();
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
		$dataisi['getteritory']=$this->Modteritory->getById($id_teritory);
		$this->template('teritory/editteritory',$dataisi); 
    }

	public function save()
    {
        $teritory = $this->Modteritory; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($teritory->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $teritory->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('teritory/');
        }
		else
		{
			$dataisi['getkandatel']=$this->Modkandatel->getAll();
			$dataisi['getwitel']=$this->Modwitel->getAll();
			$dataisi['gettreg']=$this->db->query("select * from treg")->result();
			$this->template('teritory/addteritory',$dataisi); 
		}
    }

	public function update()
    {
        $teritory = $this->Modteritory; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($teritory->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $teritory->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('teritory/');
        }
		else
		{
			$id_teritory=$this->input->post('id_teritory');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_teritory);
		}
    }

	public function hapus($id_teritory="")
    {
		$this->Modteritory->delete($id_teritory);
		redirect('teritory/');
	}

    public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}