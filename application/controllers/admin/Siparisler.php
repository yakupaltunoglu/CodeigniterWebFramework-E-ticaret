<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
               if(!$this->session->userdata("admin_session"))
				   redirect(base_url().'admin/login');
        }
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Yeni";
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Yeni' ORDER BY Id desc");
		$data["veriler"]=$query->result();
		$this->load->view('admin/siparis_listesi',$data);
		
	}
	public function onayli()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Onayli";
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Onaylandı' ORDER BY Id desc");
		$data["veriler"]=$query->result();
		$this->load->view('admin/siparis_listesi_onaylandi',$data);
		
	}
	public function Kargoda()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Kargoda";
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Kargoda' ORDER BY Id desc");
		$data["veriler"]=$query->result();
		$this->load->view('admin/siparis_listesi_kargoda',$data);
		
	}
	public function Tamamlandi()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Tamamlandi";
		$query=$this->db->query("SELECT * FROM siparisler WHERE durum='Tamamlandı' ORDER BY Id desc");
		$data["veriler"]=$query->result();
		$this->load->view('admin/siparis_listesi_tamamlandi',$data);
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/uyeler_ekle');
		
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
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/uyeler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'kargofirma'=>$this->input->post('kargofirma'),
			'kargono'=>$this->input->post('kargono'),
			'admin_aciklama'=>$this->input->post('admin_aciklama'),
			'durum'=>$this->input->post('durum')
			
			);
			
			$this->load->model('Database_Model');
			$this->Database_Model->update_data("siparisler",$data,$id);
			
			$this->session->set_flashdata("mesaj","Siparis kaydı Güncelledi.");
			redirect(base_url().'admin/siparisler');
	}
	public function sil($id)
	{
		$this->db->query("DELETE  FROM uyeler WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Üye silindi.");
		redirect(base_url().'admin/uyeler');
	}
	public function siparis_detay($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Detay";
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM siparisler WHERE Id=$id");
		$data["siparis"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$id");
		$data["urunler"]=$query->result();
		$this->load->view('admin/siparis_detay',$data);
	}
	
}
