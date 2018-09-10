<?php $this->load->view('_header');?>


<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				 
				</ol>
			</div>
		
				<?=$this->session->flashdata('mesaj2');?>
			<div class="table-responsive cart_info">
			
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ürün Adı</td>
							
							<td class="price">Fiyat</td>
							<td class="quantity">Miktar</td>
							<td class="total">Toplam</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php 
					$top=0;
					foreach($veriler as $rs) {
						$tutar=0;
						$tutar=$rs->urunsfiyat * $rs->miktar;
						$top+=$tutar;
						?>
						<tr>
							
							<td class="cart_description">
								<h4><a href=""><?=$rs->urunadi?></a></h4>
								<p><?=$rs->urunadi?></p>
							</td>
							<td class="cart_price">
								<p><?=$rs->urunsfiyat?> TL</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$rs->miktar?>" autocomplete="off" size="2">
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=$tutar?> TL</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?=base_url()?>home/sepetsil/<?=$rs->Id?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
					<?php } ?>
						
						<tr><td></td><td></td><td></td><td>Toplam Tutar:<?=$top?> TL</Td><td>
						
									</button>
									
								</span>
								</form>
						
						
						
						</TD></tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	
	
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Nereye Gidicek?</h3>
				<p>Verdiğiniz siparişlerin ücretini ödeyerek ve kargo adres bilgileri girerek kapınıza gelmesini sağlayabilirsiniz.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
					<form action="<?=base_url()?>home/siparis_tamamla/" method="post">
						<ul class="user_option">
						<table>
						
						<h3>Kargo Adres Bilgileri</h3>
						<tr>
							<li>
							<td><label>Alıcı Adı Soyadı :</label></td>
								<td><input type="text" name="adsoy" value="<?=$musteri[0]->adsoy?>" 	/></td>
								
							</li>
							</tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr>
							<li>
							<td><label>Adresi :</label></td>
								<td><input type="text" name="adres" value="<?=$musteri[0]->adres?>" 	/></td>
								
							</li>
							</tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr>
							<li>
							<td><label>Telefonu :</label></td>
								<td><input type="text" name="tel" value="<?=$musteri[0]->tel?>" 	/></td>
								
							</li>
							</tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							
						</ul>
						<ul class="user_info">
						<tr>
							<li class="single_field">
								<tD><label>Şehir:</label></td>
								<tD><input type="text" name="sehir" value="<?=$musteri[0]->sehir?>"/></Td>
								
							</li>
						</tr>
						<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr>
							
						</tr><tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							
							</Table>
						</ul>
						
					</div>
				</div>
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option" >
						<table>
						<h3>Ödeme Bilgileri</h3>
						<tr>
							<li>
							<td><label>Kredi Kartı No :</label></td>
								<td><input type="text" name="karno" value="" 	/></td>
								
							</li>
							</tr><tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr>
							<li>
							<td><label>SKT AY :</label></td>
								<td><input type="text" name="ay" value="" 	/></td>
								
							</li>
							</tr><tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr>
							<li>
							<td><label>SKT YIL :</label></td>
								<td><input type="text" name="yil" value="" 	/></td>
								
							</li>
							</tr><tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							
						</ul>
						<ul class="user_info">
						<tr>
							<li class="single_field">
								<tD><label>Güvenlik Kodu:</label></td>
								<tD><input type="text" name="gkodu"/></Td>
								
							</li>
						</tr><tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr>
							<li class="single_field">
								<li class="single_field">
								<tD><label>Toplam Tutar:</label></td>
								<tD><input type="text" name="tutar1" readonly value="<?=$top?>"/></Td>
								
							</li>
								
							</li>
						</tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							<tr><td></Td><td></Td></tr>
							</Table>
					
						</ul>
							
							<button class="btn btn-default check_out" type="submit">Alışverişi Tamamla</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	
	
	
	
	<?php $this->load->view('_footer');?>