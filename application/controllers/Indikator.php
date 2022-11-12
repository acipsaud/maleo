<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends CI_Controller
{
    public function __construct() 
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
        $this->load->library(array('pagination','form_validation','upload'));
        $this->load->model('Modindikator');
		$this->load->model('Modkatindikator');
		$this->load->model('Modloker');
		$this->load->model('Modteritory');

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function index()
	{

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu indikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

        $dataisi['getindikator']=$this->Modindikator->getAll();
		$this->template('indikator/indikator',$dataisi);
	}  

	public function add()
    {
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu add indikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

        $dataisi['getkatindikator']=$this->Modkatindikator->getAll();

		if ($this->session->userdata('level')=='admin'){
			$dataisi['getlokerwitel']=$this->db->query("select * from loker where teritory <> 329")->result();
		}
		else
		{
			$id_loker=$this->session->userdata('loker');
			$dataisi['getlokerwitel']=$this->db->query("select * from loker where id_loker='$id_loker'")->result();
		}

		$dataisi['getlokerregional']=$this->db->query("select * from loker where teritory = 329")->result();
		$dataisi['getteritory']=$this->Modteritory->getAll();
		$this->template('indikator/addindikator',$dataisi);
    }

	public function edit($id_indikator="")
    {
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "edit indikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$dataisi['getkatindikator']=$this->Modkatindikator->getAll();
		$dataisi['getlokerwitel']=$this->db->query("select * from loker where teritory <> 329")->result();
		$dataisi['getlokerregional']=$this->db->query("select * from loker where teritory = 329")->result();
		$dataisi['getteritory']=$this->Modteritory->getAll();
		$dataisi['getindikator']=$this->Modindikator->getById($id_indikator);
		$this->template('indikator/editindikator',$dataisi);
	}

	public function update()
    {
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "update menu indikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

        $indikator = $this->Modindikator; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($indikator->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
            $indikator->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');
            redirect('indikator/');
        }
		else
		{
			$id_indikator=$this->input->post('id_indikator');
			$dataisi="";
			$this->session->set_flashdata('message', '<div style="color:red">
            Data gagal terupdate !!</div>');
            $this->edit($id_indikator);
		}
    }

	public function save()
    {
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "tambah indikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

        // $indikator = $this->Modindikator; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($this->Modindikator->rules()); //menerapkan rules validasi pada register
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada register
        if ($validation->run()) {
			$data = array(
				"indikator" => $this->input->post('indikator'),
				"kategori_indikator" => $this->input->post('kategori_indikator'),
				"satuan" => $this->input->post('satuan'),
				"teritory" => $this->input->post('teritory'),
				"uic_witel" => $this->input->post('uic_witel'),
				"uic_treg" => $this->input->post('uic_treg'),
				"aktif" => $this->input->post('aktif')
			);
			$this->db->insert('indikator', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button></div>');

			foreach ($this->input->post('teritoryku') as $id_teritory) :
				$tanding=$this->db->query("select * from teritory where id_teritory='$id_teritory'")->row()->area;
				$inputer_kinerja='58';
				$teritory=$id_teritory;
				$pic_indikator='-';
				$indikator=$this->input->post('indikator');
				$id_indikator=$this->db->query("select * from indikator where indikator='$indikator'")->row()->id_indikator;
				$id_uic_witel=$this->input->post('uic_witel');
				$uic_witel=$this->db->query("select * from loker where id_loker='$id_uic_witel'")->row()->nama_loker;

				$memData = array(
					'tanding' => $tanding,
					'inputer_kinerja' => $inputer_kinerja,
					'teritory' => $teritory,
					'pic_indikator' => $pic_indikator,
					'indikator' => $indikator,
					'id_indikator' => $id_indikator,
					'id_uic_witel' => $id_uic_witel,
					'uic_witel' => $uic_witel
				);
				$this->db->insert('kinerja', $memData);
			endforeach;

            redirect('indikator/');
        }
		else
		{
			$dataisi['getkatindikator']=$this->Modkatindikator->getAll();
			$dataisi['getlokerwitel']=$this->db->query("select * from loker where teritory <> 329")->result();
			$dataisi['getlokerregional']=$this->db->query("select * from loker where teritory = 329")->result();
			$dataisi['getteritory']=$this->Modteritory->getAll();
			$this->template('indikator/addindikator',$dataisi);
		}
    }

	public function hapus($id_indikator="")
    {
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "hapus indikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$this->Modindikator->delete($id_indikator);
		redirect('indikator/');
	}
	public function tes()
	{
		// echo "t";
		header("location: https://websitelain.co.id/");
		
	}

    public function template($file='',$dataisi='')
	{
		// echo '<script>window.location.href = "'.base_url("SultengDashboardSheet/addindikator.php").'";</script>';
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}