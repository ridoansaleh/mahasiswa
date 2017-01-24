<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_mahasiswa');
	}
	
	public function index() 
	{
		$data['mhs'] = $this->model_mahasiswa->get_mhs();
		$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
		$this->load->view('index',$data);
	}
	
	public function simpan_data() 
	{
		$this->model_mahasiswa->simpan_data();
		$data['mhs'] = $this->model_mahasiswa->get_mhs();
		$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
		$this->load->view('index',$data);
	}
	
	public function edit_data($id) 
	{
		$data['data']   = $this->model_mahasiswa->get_edit_data($id); 
		$data['mhs']    = $this->model_mahasiswa->get_mhs();
		$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
		$this->load->view('mhs',$data);
	}
	
	public function eksekusi_edit() 
	{
		$this->model_mahasiswa->eksekusi_edit(); 
	}
	
	public function hapus_data($id) 
	{
		$this->model_mahasiswa->hapus_data($id);
	}
	
}
?>