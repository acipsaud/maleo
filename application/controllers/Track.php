<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Track extends CI_Controller
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
        // $dataisi['getloker']=$this->Modloker->getAll();
		// $this->template('loker/loker',$dataisi);
	}  

	public function trackff()
    {
		$dataisi['getff']=$this->db->query("select * from ff order by tanggal DESC")->result();
		$this->template('track/trackff',$dataisi); 
    }

	public function trackll()
    {
		$dataisi['getll']=$this->db->query("select * from ll order by tanggal DESC")->result();
		$this->template('track/trackll',$dataisi); 
    }

	public function tracksupport()
    {
		$dataisi['getsupport']=$this->db->query("select * from support order by tanggal DESC")->result();
		$this->template('track/tracksupport',$dataisi); 
    }

	public function trackplan()
    {
		$dataisi['getplan']=$this->db->query("select * from plan order by tanggal DESC")->result();
		$this->template('track/trackplan',$dataisi); 
    }

	public function update($status='',$id='')
    {
		if ($status=='ll')
		{
			$this->db->query("update ll set status_ll='close' where id_ll='$id'");
			redirect("track/trackll");
		}
		else if ($status=='ff')
		{
			$this->db->query("update ff set status_ff='close' where id_ff='$id'");
			redirect("track/trackff");
		}
		else if ($status=='plan')
		{
			$this->db->query("update plan set status_plan='close' where id_plan='$id'");
			redirect("track/trackplan");
		}
		else
		{
			$this->db->query("update support set status_support='close' where id_support='$id'");
			redirect("track/tracksupport");
		}
    }

    public function template($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/template.php',$data);
	}

}