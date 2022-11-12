<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {

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
        $this->load->model("Modindikator"); 

		$this->load->model('Modauth');
		if(!$this->Modauth->current_user()){
			redirect('auth/login');
		}
    }

	public function sinkronisasi()
	{
		require __DIR__ . '/sheet/vendor/autoload.php';
		$client = new Google_Client();

		$client->setApplicationName('Google Sheets API PHP Quickstart');
		$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
		$client->setAuthConfig('/sheet/phpakseskusheet-74211563db6e.json');
		$client->setAccessType('offline');
		$client->setPrompt('select_account consent');

		$service = new Google_Service_Sheets($client);

		$spreadsheetId = '1R8kRqt8fuTERKXZCDv-_MWC28mltixrDSTztSkskOJY';
		$range = 'DETAIL!A2:M300';
		$response = $service->spreadsheets_values->get($spreadsheetId, $range);
		$values = $response->getValues();
	}

	public function datakinerja()
	{
		$dataisi['getkinerja']=$this->db->query("select * from kinerja order by indikator ASC")->result();
		$this->template('kinerja/datakinerja',$dataisi);
	}

	public function index()
	{
		
        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/kinerja',$dataisi);
	}

	public function editkinerja()
	{
        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/editkinerja1',$dataisi);
	}

	public function tambahkinerja()
	{
        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi='';
		$this->template('kinerja/addkinerja',$dataisi);
	}

	public function cek_detail($id_kinerja='',$kode='99999',$loker='')
	{
		$dataisi['getter']=$kode;
		$dataisi['loker']=$loker;

		$getindikator=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->indikator;
		$gt=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->teritory;
		$getlokter=$this->db->query("select * from teritory where id_teritory='$gt'")->row()->teritory;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu grafik indikator $getindikator area $getlokter"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$dataisi['getkinerja']=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->templatebackup('kinerja/detail',$dataisi);
	}

	public function cekcek()
	{
		echo base_url();
	}

	public function cek_detail1($id_kinerja='',$kode='99999',$loker='')
	{
		$dataisi['getter']=$kode;
		$dataisi['loker']=$loker;
		$id_kinerja=$this->input->post('id_kinerja');
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->templatebackup('kinerja/detail',$dataisi);
	}

	public function save_ff()
	{
		$id_kinerja=$this->input->post('id_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Tambah Fact Finding indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$data = array(
            "id_kinerja" => $this->input->post('id_kinerja'),
            "id_indikator" => $this->input->post('id_indikator'),
            "fact" => $this->input->post('fact'),
            "teritory" => $this->input->post('teritory'),
            "status_ff" => 'open',
            "tanggal" => date('Y-m-d')
        );
        $this->db->insert("ff", $data);

		$this->cek_detail($id_kinerja,'99999');
	}

	public function savekinerja()
	{
		$id_uic_witel=$this->input->post('id_uic_witel');
		$id_indikator=$this->input->post('id_indikator');

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Tambah data kinerja"
        );
        $this->db->insert("log_aktivitas", $dataku);

		// $data = array(
        //     "tanding" => $this->input->post('tanding'),
        //     "pic_indikator" => $this->input->post('pic_indikator'),
        //     "id_uic_witel" => $this->input->post('id_uic_witel'),
        //     "teritory" => $this->input->post('teritory'),
        //     "id_indikator" => $this->input->post('id_indikator'),
        //     "inputer_kinerja" => 58,
        //     "uic_witel" => $this->db->query("select * from loker where id_loker='$id_uic_witel'")->row()->nama_loker,
        //     "indikator" => $this->db->query("select * from indikator where id_indikator='$id_indikator'")->row()->indikator,
        // );
        // $this->db->insert("kinerja", $data);

		foreach ($this->input->post('teritory') as $id_teritory) :
			$memData = array(
				    "tanding" => $this->db->query("select * from teritory where id_teritory='$id_teritory'")->row()->area,
					"pic_indikator" => $this->input->post('pic_indikator'),
					"id_uic_witel" => $this->input->post('id_uic_witel'),
					"teritory" => $id_teritory,
					"id_indikator" => $this->input->post('id_indikator'),
					"inputer_kinerja" => 58,
					"uic_witel" => $this->db->query("select * from loker where id_loker='$id_uic_witel'")->row()->nama_loker,
					"indikator" => $this->db->query("select * from indikator where id_indikator='$id_indikator'")->row()->indikator,
			);
			$this->db->insert('kinerja', $memData);
		endforeach;

		redirect('kinerja/datakinerja/');
	}

	public function save_ap()
	{
		$id_kinerja=$this->input->post('id_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Tambah Action Plan indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$data = array(
            "id_kinerja" => $this->input->post('id_kinerja'),
            "id_indikator" => $this->input->post('id_indikator'),
            "pic_plan" => $this->input->post('pic_plan'),
            "plan" => $this->input->post('plan'),
            "key_result" => $this->input->post('key_result'),
            "awal" => $this->input->post('awal'),
            "akhir" => $this->input->post('akhir'),
            "aspek_ppt" => $this->input->post('aspek_ppt'),
            "teritory" => $this->input->post('teritory'),
            "status_plan" => 'open',
            "tanggal" => date('Y-m-d')
        );
        $this->db->insert("plan", $data);

		$this->cek_detail($id_kinerja,'99999');
	}

	public function save_support()
	{
		$id_kinerja=$this->input->post('id_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Tambah Support Needed indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$data = array(
            "id_kinerja" => $this->input->post('id_kinerja'),
            "id_indikator" => $this->input->post('id_indikator'),
            "support" => $this->input->post('support'),
            "uic_support" => $this->input->post('uic_support'),
            "aspek_ppt" => $this->input->post('aspek_ppt'),
            "teritory" => $this->input->post('teritory'),
            "status_support" => 'open',
            "tanggal" => date('Y-m-d')
        );
        $this->db->insert("support", $data);

		$this->cek_detail($id_kinerja,'99999');
	}

	public function hapusff($id_ff='',$id_kinerja='')
	{
		$this->db->query("update ff set status_ff='close' where id_ff='$id_ff'");
		redirect('kinerja/cek_detail/'.$id_kinerja.'/99999');
	}

	public function hapusap($id_plan='',$id_kinerja='')
	{
		$this->db->query("update plan set status_plan='close' where id_plan='$id_plan'");
		redirect('kinerja/cek_detail/'.$id_kinerja.'/99999');
	}

	public function hapussupport($id_support='',$id_kinerja='')
	{
		$this->db->query("update support set status_support='close' where id_support='$id_support'");
		redirect('kinerja/cek_detail/'.$id_kinerja.'/99999');
	}

	public function hapusll($id_ll='',$id_kinerja='')
	{
		$this->db->query("update ll set status_ll='close' where id_ll='$id_ll'");
		redirect('kinerja/cek_detail/'.$id_kinerja.'/99999');
	}

	public function save_ll()
	{
		$id_kinerja=$this->input->post('id_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Tambah Lesson Learn indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$data = array(
            "id_kinerja" => $this->input->post('id_kinerja'),
            "id_indikator" => $this->input->post('id_indikator'),
            "lesson" => $this->input->post('lesson'),
            "teritory" => $this->input->post('teritory'),
            "status_ll" => 'open',
            "tanggal" => date('Y-m-d')
        );
        $this->db->insert("ll", $data);

		$this->cek_detail($id_kinerja,'99999');
		
	}

	

	public function editkinerjatarget1()
	{
		$id_kinerja=$this->input->post('id_kinerja');
		$dataisi['jumlahkinerja']=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->num_rows();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/editkinerjatarget',$dataisi);
	}

	public function editkinerjatarget($id_kinerja='')
	{
		$dataisi['jumlahkinerja']=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->num_rows();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row();
		$this->template('kinerja/editkinerjatarget',$dataisi);
	}

	public function editkinerjatargetwitelsave()
	{
		$id_kinerja=$this->input->post('id_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$id_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Update target dan realisasi witel indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$ac1=$this->input->post('ac1');
		$ac2=$this->input->post('ac2');
		$ac3=$this->input->post('ac3');
		$ac4=$this->input->post('ac4');
		$ac5=$this->input->post('ac5');
		$ac6=$this->input->post('ac6');
		$ac7=$this->input->post('ac7');
		$ac8=$this->input->post('ac8');
		$ac9=$this->input->post('ac9');
		$ac10=$this->input->post('ac10');
		$ac11=$this->input->post('ac11');
		$ac12=$this->input->post('ac12');

		if (empty($ac1)){$ac1=0;}
		if (empty($ac2)){$ac2=0;}
		if (empty($ac3)){$ac3=0;}
		if (empty($ac4)){$ac4=0;}
		if (empty($ac5)){$ac5=0;}
		if (empty($ac6)){$ac6=0;}
		if (empty($ac7)){$ac7=0;}
		if (empty($ac8)){$ac8=0;}
		if (empty($ac9)){$ac9=0;}
		if (empty($ac10)){$ac10=0;}
		if (empty($ac11)){$ac11=0;}
		if (empty($ac12)){$ac12=0;}

		$data = array(
            "t1" => $this->input->post('t1'),
            "t2" => $this->input->post('t2'),
            "t3" => $this->input->post('t3'),
            "t4" => $this->input->post('t4'),
            "t5" => $this->input->post('t5'),
            "t6" => $this->input->post('t6'),
            "t7" => $this->input->post('t7'),
            "t8" => $this->input->post('t8'),
            "t9" => $this->input->post('t9'),
            "t10" => $this->input->post('t10'),
            "t11" => $this->input->post('t11'),
            "t12" => $this->input->post('t12'),
            "r1" => $this->input->post('r1'),
            "r2" => $this->input->post('r2'),
            "r3" => $this->input->post('r3'),
            "r4" => $this->input->post('r4'),
            "r5" => $this->input->post('r5'),
            "r6" => $this->input->post('r6'),
            "r7" => $this->input->post('r7'),
            "r8" => $this->input->post('r8'),
            "r9" => $this->input->post('r9'),
            "r10" => $this->input->post('r10'),
            "r11" => $this->input->post('r11'),
            "r12" => $this->input->post('r12'),
            "ac1" => $ac1,
            "ac2" => $ac2,
            "ac3" => $ac3,
            "ac4" => $ac4,
            "ac5" => $ac5,
            "ac6" => $ac6,
            "ac7" => $ac7,
            "ac8" => $ac8,
            "ac9" => $ac9,
            "ac10" => $ac10,
            "ac11" => $ac11,
            "ac12" => $ac12,
			"last_update" => date("Y-m-d H:i:s"),
        );
        $this->db->update('kinerja', $data, array('id_kinerja' => $this->input->post('id_kinerja')));

		redirect ('kinerja/cek_detail/'.$id_kinerja);
	}

	public function editkinerjatargetstosave()
	{
		$stoid_kinerja=$this->input->post('stoid_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$stoid_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Update target dan realisasi STO indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$i=0;
		foreach ($this->input->post('stoid_kinerja') as $stoid_kinerja) :
			//echo $stoid_kinerja.'--'.$_POST['stot1'][$i].'<br>';
			$id_kinerja=$stoid_kinerja;
			$data = array(
				"t1" => $_POST['stot1'][$i],
				"t2" => $_POST['stot2'][$i],
				"t3" => $_POST['stot3'][$i],
				"t4" => $_POST['stot4'][$i],
				"t5" => $_POST['stot5'][$i],
				"t6" => $_POST['stot6'][$i],
				"t7" => $_POST['stot7'][$i],
				"t8" => $_POST['stot8'][$i],
				"t9" => $_POST['stot9'][$i],
				"t10" => $_POST['stot10'][$i],
				"t11" => $_POST['stot11'][$i],
				"t12" => $_POST['stot12'][$i],
				"r1" => $_POST['stor1'][$i],
				"r2" => $_POST['stor2'][$i],
				"r3" => $_POST['stor3'][$i],
				"r4" => $_POST['stor4'][$i],
				"r5" => $_POST['stor5'][$i],
				"r6" => $_POST['stor6'][$i],
				"r7" => $_POST['stor7'][$i],
				"r8" => $_POST['stor8'][$i],
				"r9" => $_POST['stor9'][$i],
				"r10" => $_POST['stor10'][$i],
				"r11" => $_POST['stor11'][$i],
				"r12" => $_POST['stor12'][$i],
				"ac1" => $_POST['stoac1'][$i],
				"ac2" => $_POST['stoac2'][$i],
				"ac3" => $_POST['stoac3'][$i],
				"ac4" => $_POST['stoac4'][$i],
				"ac5" => $_POST['stoac5'][$i],
				"ac6" => $_POST['stoac6'][$i],
				"ac7" => $_POST['stoac7'][$i],
				"ac8" => $_POST['stoac8'][$i],
				"ac9" => $_POST['stoac9'][$i],
				"ac10" => $_POST['stoac10'][$i],
				"ac11" => $_POST['stoac11'][$i],
				"ac12" => $_POST['stoac12'][$i],
				"last_update" => date("Y-m-d H:i:s"),
			);
			$this->db->update('kinerja', $data, array('id_kinerja' => $id_kinerja));

			$i++;
		endforeach;
		$getindikator=$this->db->query("select * from kinerja where id_kinerja='$stoid_kinerja'")->row()->id_indikator;
		$getidindikator=$this->db->query("select * from kinerja where id_indikator='$getindikator' and teritory='328'")->row()->id_kinerja;
		redirect ('kinerja/cek_detail/'.$getidindikator);
	}

	public function editkinerjatargetdatelsave()
	{
		$datelid_kinerja=$this->input->post('datelid_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$datelid_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Update target dan realisasi STO indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);		

		$i=0;
		foreach ($this->input->post('datelid_kinerja') as $datelid_kinerja) :
			//echo $stoid_kinerja.'--'.$_POST['stot1'][$i].'<br>';
			$id_kinerja=$datelid_kinerja;
			$data = array(
				"t1" => $_POST['datelt1'][$i],
				"t2" => $_POST['datelt2'][$i],
				"t3" => $_POST['datelt3'][$i],
				"t4" => $_POST['datelt4'][$i],
				"t5" => $_POST['datelt5'][$i],
				"t6" => $_POST['datelt6'][$i],
				"t7" => $_POST['datelt7'][$i],
				"t8" => $_POST['datelt8'][$i],
				"t9" => $_POST['datelt9'][$i],
				"t10" => $_POST['datelt10'][$i],
				"t11" => $_POST['datelt11'][$i],
				"t12" => $_POST['datelt12'][$i],
				"r1" => $_POST['datelr1'][$i],
				"r2" => $_POST['datelr2'][$i],
				"r3" => $_POST['datelr3'][$i],
				"r4" => $_POST['datelr4'][$i],
				"r5" => $_POST['datelr5'][$i],
				"r6" => $_POST['datelr6'][$i],
				"r7" => $_POST['datelr7'][$i],
				"r8" => $_POST['datelr8'][$i],
				"r9" => $_POST['datelr9'][$i],
				"r10" => $_POST['datelr10'][$i],
				"r11" => $_POST['datelr11'][$i],
				"r12" => $_POST['datelr12'][$i],
				"ac1" => $_POST['datelac1'][$i],
				"ac2" => $_POST['datelac2'][$i],
				"ac3" => $_POST['datelac3'][$i],
				"ac4" => $_POST['datelac4'][$i],
				"ac5" => $_POST['datelac5'][$i],
				"ac6" => $_POST['datelac6'][$i],
				"ac7" => $_POST['datelac7'][$i],
				"ac8" => $_POST['datelac8'][$i],
				"ac9" => $_POST['datelac9'][$i],
				"ac10" => $_POST['datelac10'][$i],
				"ac11" => $_POST['datelac11'][$i],
				"ac12" => $_POST['datelac12'][$i],
				"last_update" => date("Y-m-d H:i:s"),
			);
			$this->db->update('kinerja', $data, array('id_kinerja' => $id_kinerja));

			$i++;
		endforeach;
		$getindikator=$this->db->query("select * from kinerja where id_kinerja='$datelid_kinerja'")->row()->id_indikator;
		$getidindikator=$this->db->query("select * from kinerja where id_indikator='$getindikator' and teritory='328'")->row()->id_kinerja;
		redirect ('kinerja/cek_detail/'.$getidindikator);
	}

	public function editkinerjatargetherosave()
	{
		$heroid_kinerja=$this->input->post('heroid_kinerja');

		$getnamaindikator=$this->db->query("select * from kinerja where id_kinerja='$heroid_kinerja'")->row()->indikator;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "Update target dan realisasi STO indikator $getnamaindikator"
        );
        $this->db->insert("log_aktivitas", $dataku);		

		$i=0;
		foreach ($this->input->post('heroid_kinerja') as $heroid_kinerja) :
			//echo $stoid_kinerja.'--'.$_POST['stot1'][$i].'<br>';
			$id_kinerja=$heroid_kinerja;
			$data = array(
				"t1" => $_POST['herot1'][$i],
				"t2" => $_POST['herot2'][$i],
				"t3" => $_POST['herot3'][$i],
				"t4" => $_POST['herot4'][$i],
				"t5" => $_POST['herot5'][$i],
				"t6" => $_POST['herot6'][$i],
				"t7" => $_POST['herot7'][$i],
				"t8" => $_POST['herot8'][$i],
				"t9" => $_POST['herot9'][$i],
				"t10" => $_POST['herot10'][$i],
				"t11" => $_POST['herot11'][$i],
				"t12" => $_POST['herot12'][$i],
				"r1" => $_POST['heror1'][$i],
				"r2" => $_POST['heror2'][$i],
				"r3" => $_POST['heror3'][$i],
				"r4" => $_POST['heror4'][$i],
				"r5" => $_POST['heror5'][$i],
				"r6" => $_POST['heror6'][$i],
				"r7" => $_POST['heror7'][$i],
				"r8" => $_POST['heror8'][$i],
				"r9" => $_POST['heror9'][$i],
				"r10" => $_POST['heror10'][$i],
				"r11" => $_POST['heror11'][$i],
				"r12" => $_POST['heror12'][$i],
				"ac1" => $_POST['heroac1'][$i],
				"ac2" => $_POST['heroac2'][$i],
				"ac3" => $_POST['heroac3'][$i],
				"ac4" => $_POST['heroac4'][$i],
				"ac5" => $_POST['heroac5'][$i],
				"ac6" => $_POST['heroac6'][$i],
				"ac7" => $_POST['heroac7'][$i],
				"ac8" => $_POST['heroac8'][$i],
				"ac9" => $_POST['heroac9'][$i],
				"ac10" => $_POST['heroac10'][$i],
				"ac11" => $_POST['heroac11'][$i],
				"ac12" => $_POST['heroac12'][$i],
				"last_update" => date("Y-m-d H:i:s"),
			);
			$this->db->update('kinerja', $data, array('id_kinerja' => $id_kinerja));

			$i++;
		endforeach;
		$getindikator=$this->db->query("select * from kinerja where id_kinerja='$heroid_kinerja'")->row()->id_indikator;
		$getidindikator=$this->db->query("select * from kinerja where id_indikator='$getindikator' and teritory='328'")->row()->id_kinerja;
		redirect ('kinerja/cek_detail/'.$getidindikator);
	}
	

	public function getkinerja()
	{
		$id_loker=$this->input->post('id_loker');

		if ($id_loker!='All')
			$getkinerja=$this->db->query("select * from kinerja where id_uic_witel='$id_loker' and teritory='328'")->result();
		else
			$getkinerja=$this->db->query("select * from kinerja teritory='328'")->result();

		echo"<option selected>- Pilih Kinerja -</option>";
		foreach ($getkinerja as $rowkinerja) :
			echo '<option value='.$rowkinerja->id_kinerja.'>'.$this->db->query("select * from indikator where id_indikator='$rowkinerja->id_indikator'")->row()->indikator.'</option>';
		endforeach;
	}

	public function cek_detail2($id_indikator='',$id_teritory='99999')
	{

		$dataisi['getkinerja']=$this->db->query("select * from kinerja where id_indikator='$id_indikator' and teritory='$id_teritory'")->row();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/detail',$dataisi);
	}

	public function all()
	{
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu kinerja all"
        );
        $this->db->insert("log_aktivitas", $dataku);

        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
        // $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/all',$dataisi);
	}


	public function unit_detail()
	{
		$teritory=$this->input->post('teritory');
		$dataisi['getter']=$teritory;

		$getunit=$this->db->query("select * from loker where id_loker='$teritory'")->row()->nama_loker;
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu detail kinerja unit $getunit"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$dataisi['getkinerja']=$this->db->query("select * from kinerja where id_uic_witel='$teritory' and teritory='328'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/kinerjadetail',$dataisi);
	}

	public function datel()
	{
        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/kinerjadatel',$dataisi);
	}

	public function datel_detail()
	{
		$teritory=$this->input->post('teritory');
		$dataisi['getter']=$teritory;
		$getdatel=$this->db->query("select * from teritory where id_teritory='$teritory'")->row()->teritory;

		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu detail kinerja datel $getdatel"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$dataisi['getkinerja']=$this->db->query("select * from kinerja where teritory='$teritory'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/kinerjadateldetail',$dataisi);
	}

	public function hero()
	{
        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/kinerjahero',$dataisi);
	}

	public function hero_detail()
	{
        $teritory=$this->input->post('teritory');
		$dataisi['getter']=$teritory;

		$getunit=$this->db->query("select * from teritory where id_teritory='$teritory'")->row()->teritory;
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu detail kinerja hero $getunit"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$dataisi['getkinerja']=$this->db->query("select * from kinerja where teritory='$teritory'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11'")->result();
		$this->template('kinerja/kinerjaherodetail',$dataisi);
	}

	public function sto()
	{
        // $dataisi['getindikator']=$this->Modindikator->getAll();
		$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
		$this->template('kinerja/kinerjasto',$dataisi);
	}

	public function sto_detail()
	{
        $teritory=$this->input->post('teritory');
		$dataisi['getter']=$teritory;

		$getunit=$this->db->query("select * from teritory where id_teritory='$teritory'")->row()->teritory;
		$dataku = array(
            "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->session->userdata('nama_lengkap'),
            "waktu" => date("Y-m-d H:i:s"),
            "aktivitas" => "view menu detail kinerja sto $getunit"
        );
        $this->db->insert("log_aktivitas", $dataku);

		$dataisi['getkinerja']=$this->db->query("select * from kinerja where teritory='$teritory'")->result();
        $dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11'")->result();
		$this->template('kinerja/kinerjastodetail',$dataisi);
	}

	public function detail($teritory='')
	{
		$cekteritory=$this->db->query("select * from teritory where id_teritory='$teritory'")->row()->area;

		if ($cekteritory=='Hero')
		{
			$dataisi['getter']=$teritory;
			$dataisi['getkinerja']=$this->db->query("select * from kinerja where teritory='$teritory'")->result();
			$dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11'")->result();
			$this->template('kinerja/kinerjaherodetail',$dataisi);
		}
		else if ($cekteritory=='Datel')
		{
			$dataisi['getter']=$teritory;
			$dataisi['getkinerja']=$this->db->query("select * from kinerja where teritory='$teritory'")->result();
			$dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11'")->result();
			$this->template('kinerja/kinerjadateldetail',$dataisi);
		}
		else if ($cekteritory=='STO')
		{
			$dataisi['getter']=$teritory;
			$dataisi['getkinerja']=$this->db->query("select * from kinerja where teritory='$teritory'")->result();
			$dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11'")->result();
			$this->template('kinerja/kinerjadateldetail',$dataisi);
		}
		else
		{
			$dataisi['getter']=$teritory;
			$dataisi['getkinerja']=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
			$dataisi['getunit']=$this->db->query("select * from loker where teritory='328' and id_loker<>'12' and id_loker<>'11' ")->result();
			$this->template('kinerja/kinerja',$dataisi);
		}
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

	public function templatebackup($file='',$dataisi='')
	{
		$data['header']=$this->load->view('template/header.php',$dataisi,true);
		$data['sidebar']=$this->load->view('template/sidebar.php',$dataisi,true);
		$data['konten']=$this->load->view("page/$file.php",$dataisi,true);
		$this->load->view('template/templatebackup.php',$data);
	}
	
}
	