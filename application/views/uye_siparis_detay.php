<?php $this->load->view('_header');?>


<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
	
				</ol>
			</div>
		
				<?=$this->session->flashdata('mesaj2');?>
			<div class="table-responsive cart_info">
			<h3>Yapılan Şiparişler</h3>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<th class="image">Adı Soyadı:</th>
							
							<th>Adres:</th>
							
							<th>Telefon:</th>
							
							<th>Şehir:</th>
							
							<th>Kargo Firma:</th>
							
							<th>Kargo No:</th>
							
							
						</tr>
					</thead>
					<tbody>
					<tr>
							
							<td class="cart_description">
								<h4><a href=""><?=$siparis[0]->adsoy?>	</a></h4>
								
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$siparis[0]->adres?></a></h4>
								
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$siparis[0]->tel?></a></h4>
								
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$siparis[0]->sehir?></a></h4>
								
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$siparis[0]->kargofirma?></a></h4>
								
							</td>
							
						
							<td class="cart_total">
								<p class="cart_total_price"><?=$siparis[0]->kargono?></p>
							</td>
							
						</tr>
								</form>
						
						
						
						
					</tbody>
				</table>
				
				<h3>Siparişe Ait Ürünler</h3>
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
					
					foreach($urunler as $rs) {
						$tutar=0;
					
						
						?>
						<tr>
							
							<td class="cart_description">
								<h4><a href=""><?=$rs->adi?></a></h4>
								
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$rs->fiyat?></a></h4>
								
							</td>
							
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantity" value="<?=$rs->miktar?>" autocomplete="off" size="2">
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=$rs->tutar?> TL</p>
							</td>
							
						</tr>
						
					<?php } ?>
						
						<tr><td></td><td></td><td></td><td></Td><td>
						
									</button>
									
								</span>
								</form>
						
						
						
						</TD></tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	
	
	
	
	
	
	
	<?php $this->load->view('_footer');?>