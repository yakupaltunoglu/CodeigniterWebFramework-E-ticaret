<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function __construct()
        {
 parent::__construct();
				$this->load->model('Database_Model');
		}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='rehber' ");
		$data["altkategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='vitrin' limit 8 ");
		$data["altkategoriler2"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler WHERE parent_id=3 limit 11 ");
		$data["altkategoriler3"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='vitrin' limit 10");
		$data["vitrindekiler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='yeni' limit 6");
		$data["yeniurunler"]=$query->result();
		
		$data["sayfa"]="";
$data["menu"]="Anasayfa";
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda";
		
		$this->load->view('hakkimizda',$data);
		
		
	}
	public function kategori($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT urunler.*, kategoriler.adi as kadi
			FROM urunler
			INNER JOIN kategoriler ON kategoriler.Id=urunler.kategori
			WHERE urunler.kategori=$id
		");
		$data["kicerik"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='rehber' ");
		$data["altkategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='vitrin' limit 8 ");
		$data["altkategoriler2"]=$query->result();
		
	$data["sayfa"]="Hurmalar";
		
		$this->load->view('medine_hurmalari',$data);
		
	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletisim";
	
		$this->load->view('iletisim',$data);
		
	}
	
	public function kategoriSayfa($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='rehber' ");
		$data["altkategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori=$id");
		$data["urunler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
$query=$this->db->query("SELECT * FROM urunler WHERE grubu='vitrin' limit 8 ");
		$data["altkategoriler2"]=$query->result();
	$data["sayfa"]="Hurma Rehberi";
		$this->load->view('kategoriSayfa',$data);
		
	}
	public function urundetay($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler WHERE parent_id=0 limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='rehber' ");
		$data["altkategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='vitrin' limit 8 ");
		$data["altkategoriler2"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$data["menu"]="urun";
		$data["sayfa"]="Ürün Detay";
		$data["veri2"]=$this->Database_Model->get_urun($id);
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result();
		$this->load->view('urun_detay',$data);
	}
	
	public function login2_ol()
	{
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$data["sayfa"]="Login";
		$this->load->view('login2',$data);
		
		
		
		
	}
	public function login2()
	{
		
	$eposta = $this->input->post("eposta");
		$sifre = $this->input->post("sifre");
		//zararlı kodlardan	temizleme
		$email=$this->security->xss_clean($eposta);
		$sifre=$this->security->xss_clean($sifre);
		$this->load->model('Database_Model');
		
		$result=$this->Database_Model->login('uyeler',$email,$sifre);
		
		if($result)
		{
			//kullanici var ise bilgileri diziye aktariliyor
			$sess_array=array(
			'id'=>$result[0]->Id,
			'adsoy'=>$result[0]->adsoy,
			'email'=>$result[0]->email,
			'sifre'=>$result[0]->sifre,
			
			'resim'=>$result[0]->resim
			);
			/*print_r($sess_array);
			echo "login oldu";
			exit();*/
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url());
		}
		else{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı yada şifre");
		redirect(base_url().'home/login2_ol');
		}
		
		
	}
	public function login2_cik()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	}
	public function siparislerim()
	{
		if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj','Giriş yapmadınız');
			redirect(base_url()."home/login2_ol");
		}
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Siparislerim";
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM siparisler WHERE musteri_id=$musteri_id");
		$data["veriler"]=$query->result();
		$this->load->view('uye_siparis',$data);
		
		
		
		
	}
	public function sepete_ekle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'musteri_id'=>$this->session->uye_session["id"],
			'urun_id'=>$id,
			'miktar'=>$this->input->post('miktar')
		
			);
			$this->db->insert("sepet",$data);
			$this->session->set_flashdata("mesaj","Ürün Sepete Eklendi.");
			redirect(base_url()."home/urundetay/$id");
	}
	public function sepetim()
	{
		if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj','Giriş Yapmadınız !!!');
			redirect(base_url().'home/login2_ol');
		}
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepetim";
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$musteri_id limit 1");
		$data["musteri"]=$query->result();
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT sepet.*, urunler.adi as urunadi, urunler.sfiyat as urunsfiyat
			FROM sepet
			INNER JOIN urunler ON urunler.Id=sepet.urun_id
			WHERE sepet.musteri_id=$musteri_id ");
		$data["veriler"]=$query->result();
		$this->load->view('uye_sepet',$data);
	}
	public function yorumlarim()
	{
		if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj','Giriş Yapmadınız !!!');
			redirect(base_url().'home/login2_ol');
		}
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Yorumlarım";
		
		$query=$this->db->query("SELECT * FROM yorumlar WHERE musteri_id=$musteri_id limit 1");
		$data["musteri"]=$query->result();
		
		
		$this->load->view('uye_yorumlar',$data);
	}
	
	public function yorum_kaydet()
	{$musteri_id=$this->session->uye_session["id"];
		$data=array(
			'konu'=>$this->input->post('konu'),
			'yorum'=>$this->input->post('yorum'),
			'musteri_id'=>$musteri_id,
			
			
			);
			$this->db->insert("yorumlar",$data);
			$this->session->set_flashdata("mesaj","Yorum Eklendi.");
			redirect(base_url()."home/urundetay/$musteri_id");
		
			
	}
	
	public function sepetsil($id)
	{
		
		$this->db->query("DELETE  FROM sepet WHERE Id=$id");
		$this->session->set_flashdata('mesaj2','Sepetdeki Ürün Silindi !!!');
		redirect(base_url().'home/sepetim');
		
	}
	public function siparis_tamamla()
	{
		$musteri_id=$this->session->uye_session["id"];
		
		//Banka kredi kartı ödeme tutarı gönderilip onay alınması
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'adres'=>$this->input->post('adres'),
			'tel'=>$this->input->post('tel'),
			'sehir'=>$this->input->post('sehir'),
			'tutar'=>$this->input->post('tutar1'),
			'musteri_id'=>$musteri_id,
			'Ip'=>$_SERVER['REMOTE_ADDR']
			);
		//print_r($data);
		$siparis_id=$this->Database_Model->insert_data("siparisler",$data);
		if($siparis_id)
		{
		$query=$this->db->query("SELECT sepet.*, urunler.adi as urunadi, urunler.sfiyat as urunsfiyat
			FROM sepet
			INNER JOIN urunler ON urunler.Id=sepet.urun_id
			WHERE sepet.musteri_id=$musteri_id ");
		$veriler=$query->result();
		foreach ($veriler as $rs)
		{
			$data=array(
			'musteri_id'=>$this->session->uye_session["id"],
			'siparis_id'=>$siparis_id,
			'adi'=>$rs->urunadi,
			'miktar'=>$rs->miktar,
			'fiyat'=>$rs->urunsfiyat,
			'tutar'=>($rs->urunsfiyat * $rs->miktar)
			);
			$this->Database_Model->insert_data("siparis_urunler",$data);
		}
		}//siparis_id if end
		$this->db->query("DELETE  FROM sepet WHERE musteri_id=$musteri_id "); //sepete boşaltıyoruz.
		$this->session->set_flashdata("mesaj","Şiparişiniz Tamamlanmıştır.<br> Teşekkür Ederiz..");
		redirect(base_url().'home/siparislerim');
		
	}
	public function uyepanel()
	{
		if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj','Giriş Yapmadınız !!!');
			redirect(base_url().'home/login2_ol');
		}
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hesap Bilgilerim";
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$musteri_id limit 1");
		$data["musteri"]=$query->result();
		$this->load->view('uye_panel',$data);
	}
	public function sifre_degistir()
	{
		if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj','Giriş Yapmadınız !!!');
			redirect(base_url().'home/login2_ol');
		}
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hesap Bilgilerim";
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$musteri_id limit 1");
		$data["musteri"]=$query->result();
		$this->load->view('uye_sifre_degistir',$data);
	}
	public function uyebilgileri_guncelle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			
			'email'=>$this->input->post('email'),
			
			'tel'=>$this->input->post('tel'),
			'sehir'=>$this->input->post('sehir'),
			'adres'=>$this->input->post('adres')
			);
			
			$this->Database_Model->update_data("uyeler",$data,$id);
			
			$this->session->set_flashdata("mesaj","Üye kaydı Güncelledi.");
			redirect(base_url().'home/uyepanel');
	}
	public function sifre_degistir_guncelle($id)
	{
		//Form verilerini alacaz.
		$data=array(
			'sifre'=>$this->input->post('sifre')
			
			);
			
			$this->Database_Model->update_data("uyeler",$data,$id);
			
			$this->session->set_flashdata("mesaj","Şifreniz Güncelledi.");
			redirect(base_url().'home/sifre_degistir');
	}

	public function siparis_detay($id)
	{
		if(!$this->session->userdata('uye_session'))
		{
			$this->session->set_flashdata('mesaj','Giriş Yapmadınız !!!');
			redirect(base_url().'home/login2_ol');
		}
		$musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM kategoriler limit 5");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Siparis Detay";
		$query=$this->db->query("SELECT * FROM siparisler WHERE Id=$id");
		$data["siparis"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$id");
		$data["urunler"]=$query->result();
		$this->load->view('uye_siparis_detay',$data);
	}
	
	public function mesajkaydet()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'mesaj'=>$this->input->post('mesaj'),
			'Ip'=>$_SERVER['REMOTE_ADDR']
			);
			$this->Database_Model->insert_data("mesajlar",$data);
			$this->session->set_flashdata("mesaj","Mesajınız başarı ile alındı.  İlginiz için teşekkür Ederiz..");
			redirect(base_url().'home/iletisim');
	}
}
