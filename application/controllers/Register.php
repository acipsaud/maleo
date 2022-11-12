<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
		$this->load->model("Modregister"); 

        $this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
		$this->load->view('register');
	}  

	public function add()
    {
        $register = $this->Modregister; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($register->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $register->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect("auth/login");
			$this->load->view('register');
        }
		else
		{
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal tersimpan !!</div>');
            $this->load->view('register');
		}
    }

}