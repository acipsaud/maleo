<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
		$this->load->model('Modhalaman');	

		$this->load->model('Modauth');
        $this->load->model("Modregister"); 
        $this->load->model("Modteritory"); 
        $this->load->model("Modloker"); 

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $dataisi['getuser']=$this->Modregister->getAll();
		$this->template('manageduser/manageuser',$dataisi);
	}

    public function add()
	{
        $dataisi['getteritory']=$this->Modteritory->getAll();
        $dataisi['getloker']=$this->Modloker->getAll();
		$this->template('manageduser/adduser',$dataisi);
	}
	
	public function save()
    {
        $register = $this->Modregister; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($register->rulesAll()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $register->saveAll();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('manageuser/');
        }
		else
		{
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal tersimpan !!</div>');
            $this->template('manageduser/adduser',$dataisi);
		}
    }

	public function update()
    {
        $register = $this->Modregister; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($register->rulesAll()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $register->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('manageuser/');
        }
		else
		{
			$id_user=$this->input->post('id_user');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_user);
		}
    }

	public function hapus($id_user="")
    {
		$this->Modregister->delete($id_user);
		redirect('manageuser/');
	}

	public function edit($id_user="")
    {
		$dataisi['getteritory']=$this->Modteritory->getAll();
        $dataisi['getloker']=$this->Modloker->getAll();
		$dataisi['getuser']=$this->Modregister->getById($id_user);
		$this->template('manageduser/edituser',$dataisi);
	}

	public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}
	
}
	