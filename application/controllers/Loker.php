<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
        $this->load->model('Modloker');
		$this->load->model('Modkandatel');
		$this->load->model('Modwitel');
		$this->load->model('Modteritory');

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $dataisi['getloker']=$this->Modloker->getAll();
		$this->template('loker/loker',$dataisi);
	}  

	public function add()
    {
		$dataisi['getkandatel']=$this->Modkandatel->getAll();
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['getteritory']=$this->Modteritory->getAll();
		$this->template('loker/addloker',$dataisi); 
    }

	public function edit($id_loker="")
    {
		$dataisi['getkandatel']=$this->Modkandatel->getAll();
		$dataisi['getwitel']=$this->Modwitel->getAll();
		$dataisi['getteritory']=$this->Modteritory->getAll();
		$dataisi['getloker']=$this->Modloker->getById($id_loker);
		$this->template('loker/editloker',$dataisi);
	}

	public function save()
    {
        $loker = $this->Modloker; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($loker->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $loker->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('loker/');
        }
		else
		{
			$dataisi['getkandatel']=$this->Modkandatel->getAll();
			$dataisi['getwitel']=$this->Modwitel->getAll();
			$dataisi['getteritory']=$this->Modteritory->getAll();
			$this->template('witel/addloker',$dataisi);
		}
    }

	public function update()
    {
        $loker = $this->Modloker; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($loker->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $loker->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('loker/');
        }
		else
		{
			$id_loker=$this->input->post('id_loker');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_loker);
		}
    }

	public function hapus($id_loker="")
    {
		$this->Modloker->delete($id_loker);
		redirect('loker/');
	}

    public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}