<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        $this->load->library(array('pagination','form_validation','upload','session'));
		$this->load->model('Modhalaman');	

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
		// echo $this->modauth->current_user()->username;
    }

	public function index()
	{
		// echo $this->session->userdata('level');
		// $dataisi['level']=$this->modauth->current_user()->level;
		$dataisi['totalindikator']=$this->db->query("select * from indikator")->num_rows();
		$dataisi['totalKM']=$this->db->query("select * from indikator where kategori_indikator='1'")->num_rows();
		$dataisi['totalSN']=$this->db->query("select * from support where status_support='open'")->num_rows();
		$dataisi['totalAP']=$this->db->query("select * from plan where status_plan='open'")->num_rows();
		$dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$dataisi['getdatel']=$this->db->query("select * from teritory where area='Datel'")->result();
		$dataisi['gethero']=$this->db->query("select * from teritory where area='Hero'")->result();

		$dataisi['witelSN']=$this->db->query("select * from support where teritory='328'")->num_rows();
		$dataisi['witelAP']=$this->db->query("select * from plan where teritory='328'")->num_rows();

		$dataisi['datelSN']=$this->db->query("select * from support inner join teritory on support.teritory=teritory.id_teritory where teritory.area='Datel'")->num_rows();
		$dataisi['datelAP']=$this->db->query("select * from plan inner join teritory on plan.teritory=teritory.id_teritory where teritory.area='Datel'")->num_rows();

		$dataisi['heroSN']=$this->db->query("select * from support inner join teritory on support.teritory=teritory.id_teritory where teritory.area='Hero'")->num_rows();
		$dataisi['heroAP']=$this->db->query("select * from plan inner join teritory on plan.teritory=teritory.id_teritory where teritory.area='Hero'")->num_rows();

		$this->template('dashboard',$dataisi);
	}

	public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}
	
}
	