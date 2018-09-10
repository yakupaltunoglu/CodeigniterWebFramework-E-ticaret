<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
				$this->load->model('Database_Model');
               if(!$this->session->userdata("admin_session"))
				   redirect(base_url().'admin\login');
        }
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Anasayfa";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
	}
	public function ayarlar()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Ayarlar";
		$this->load->view('admin/ayarlar',$data);
	}
	public function ayarlar_guncelle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'adi'=>$this->input->post('adi'),
			'smtpemail'=>$this->input->post('smtpemail'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'keywords'=>$this->input->post('keywords'),
			'hakkimizda'=>$this->input->post('hakkimizdada'),
			'iletisim'=>$this->input->post('iletisimde'),
			'facebook'=>$this->input->post('facebook'),
			'description'=>$this->input->post('description')
			
			);
			
			$this->Database_Model->update_data("ayarlar",$data,$id);
			
			$this->session->set_flashdata("mesaj","ayarlar kaydı Güncelledi.");
			redirect(base_url().'admin/home/ayarlar');
	}
}
