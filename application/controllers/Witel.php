<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Witel extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
        $this->load->model('Modwitel');

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{
        $dataisi['getwitel']=$this->Modwitel->getAll();
		$this->template('witel/witel',$dataisi);
	}  

	public function add()
    {
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
		$this->template('witel/addwitel',$dataisi);
    }

	public function edit($id_witel="")
    {
		$dataisi['gettreg']=$this->db->query("select * from treg")->result();
		$dataisi['getwitel']=$this->Modwitel->getById($id_witel);
		$this->template('witel/editwitel',$dataisi);
	}

	public function update()
    {
        $witel = $this->Modwitel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($witel->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $witel->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('witel/');
        }
		else
		{
			$id_witel=$this->input->post('id_witel');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_witel);
		}
    }

	public function save()
    {
        $witel = $this->Modwitel; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($witel->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $witel->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('witel/');
        }
		else
		{
			$dataisi['gettreg']=$this->db->query("select * from treg")->result();
			$this->template('witel/addwitel',$dataisi);
		}
    }

	public function hapus($id_witel="")
    {
		$this->Modwitel->delete($id_witel);
		redirect('witel/');
	}


    public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}