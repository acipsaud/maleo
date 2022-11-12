<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandatel extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
        $this->load->model('Modkandatel');
		$this->load->model('Modwitel');

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
        $dataisi['getkandatel']=$this->Modkandatel->getAll();
		$this->template('kandatel/kandatel',$dataisi);
	}  

	public function add()
    {
        $dataisi['getkandatel']=$this->Modkandatel->getAll();
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
		$this->template('kandatel/addkandatel',$dataisi);
    }

	public function edit($id_datel="")
    {
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
		$dataisi['getkandatel']=$this->Modkandatel->getById($id_datel);
		$this->template('kandatel/editkandatel',$dataisi);
	}

	public function update()
    {
        $datel = $this->Modkandatel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($datel->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $datel->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('kandatel/');
        }
		else
		{
			$id_datel=$this->input->post('id_datel');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_datel);
		}
    }

	public function save()
    {
        $datel = $this->Modkandatel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($datel->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $datel->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('kandatel/');
        }
		else
		{
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $dataisi['getwitel']=$this->Modwitel->getAll();
			$dataisi['gettreg']=$this->db->query("select * from treg")->result();
			$dataisi['getkandatel']=$this->Modkandatel->getAll();
			$this->template('kandatel/addkandatel',$dataisi);
		}
    }

	public function hapus($id_datel="")
    {
		$this->Modkandatel->delete($id_datel);
		redirect('kandatel/');
	}

    public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}