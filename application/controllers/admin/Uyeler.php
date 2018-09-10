<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
               if(!$this->session->userdata("admin_session"))
				   redirect(base_url().'admin/login');
        }
	
	public function index()
	{   $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üyeler";
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
		$this->load->view('admin/uyeler_liste',$data);
		
	}
	public function ekle()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uyeler Ekle";
		$this->load->view('admin/uyeler_ekle',$data);
		
	}
	public function ekle_kaydet()
	{
		//Form verilerini alacaz.
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'durum'=>$this->input->post('durum'),
			'yetki'=>$this->input->post('yetki'),
			'adres'=>$this->input->post('adres'),
			'sifre'=>$this->input->post('sifre')
			);
			$this->db->insert("uyeler",$data);
			$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi.");
			
			redirect(base_url().'admin/uyeler');
	}
	public function duzenle($id)
	{   $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Resim Yükle";
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["veriler"]=$query->result();
		$this->load->view('admin/uyeler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'durum'=>$this->input->post('durum'),
			'yetki'=>$this->input->post('yetki'),
			'adres'=>$this->input->post('adres'),
			'sifre'=>$this->input->post('sifre')
			);
			$this->load->model('Database_Model');
			$this->Database_Model->update_data("uyeler",$data,$id);
			
			$this->session->set_flashdata("mesaj","Üye kaydı Güncelledi.");
			redirect(base_url().'admin/uyeler');
	}
	public function sil($id)
	{
		$this->db->query("DELETE  FROM uyeler WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Üye silindi.");
		redirect(base_url().'admin/uyeler');
	}
	
}
