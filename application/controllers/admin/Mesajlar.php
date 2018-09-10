<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
               if(!$this->session->userdata("admin_session"))
				   redirect(base_url().'admin\login');
        }
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Mesajlar";
		$query=$this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
		$data["veriler"]=$query->result();
		$this->load->view('admin/mesaj_liste',$data);
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/mesajlar_ekle');
		
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
			$this->db->insert("mesajlar",$data);
			$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi.");
			redirect(base_url().'admin/mesajlar');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM mesajlar WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/mesajlar_duzenle_formu',$data);
	}
	public function detay($id)
	{
		$this->db->query("UPDATE Mesajlar SET durum='Okundu' WHERE Id=$id");
		$query=$this->db->query("SELECT * FROM mesajlar WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/mesaj_detay',$data);
		
	}
	public function guncelle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'adminnotu'=>$this->input->post('adminnotu'),
			
			);
			$this->load->model('Database_Model');
			$this->Database_Model->update_data("mesajlar",$data,$id);
			
			$this->session->set_flashdata("mesaj","Notunuz Güncelledi.");
			redirect(base_url()."admin/mesajlar/detay/$id");
	}
	public function sil($id)
	{
		$this->db->query("DELETE  FROM mesajlar WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Mesaj silindi.");
		redirect(base_url().'admin/mesajlar');
	}
	
}