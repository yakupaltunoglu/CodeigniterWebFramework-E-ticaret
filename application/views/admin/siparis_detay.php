<?php 
$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar'); ?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Yeni Şiparişler</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Ürünler</li>
							   <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> <?= $this->session->flashdata("mesaj")?></a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                
                                <h6 class="card-subtitle"><a href="<?=base_url()?>admin/urunler/ekle" class="btn btn-danger"  class="fa fa-plus-circle" ><i class="fa fa-plus-circle"> Ürün Ekle</i></a> </h6>
                                <div class="table-responsive">
                                   <h3>Yapılan Şiparişler</h3>
								   <form id="contact-us" method="post" action="<?=base_url()?>admin/Siparisler/guncelle/<?=$siparis[0]->Id?>">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<th class="image">Adı Soyadı:</th>
							
							<th>Adres:</th>
							
							<th>Telefon:</th>
							
							<th>Şehir:</th>
							
							<th>Kargo Firma:</th>
							
							<th>Kargo No:</th>
							
							<th>Durumu:</th>
							
							<th>Siparis Notu:</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<tr>
							
							<td class="cart_description">
								<h4><a href=""><?=$siparis[0]->adsoy?></a></h4>
								
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
								<h4>  <input type="text" name="kargofirma" class="form-control" value="<?=$siparis[0]->kargofirma?>">   </h4>
								
							</td>
							
						
							<td class="cart_total">
								<p class="cart_total_price"><input type="text" name="kargono" class="form-control" value="<?=$siparis[0]->kargono?>"></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">     
								<select name="durum">
									<option><?=$siparis[0]->durum?></option>
									<option>Onaylandı</option>
									<option>Kargoda</option>
									<option>Tamamlandı</option>
								</select>
								
								</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><textarea name="admin_aciklama" id="message" required="required" class="form-control" rows="8" placeholder="Şipariş açıklama"></textarea></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><input type="submit" value="guncelle" /></p>
							</td>
							
						</tr>
								
						
						
						
						
					</tbody>
				</table></form>  
				
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
								
						
						
						
						</TD></tr>
					</tbody>
				</table>
                              
							</div>
								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
			<?php $this->load->view('admin/_footer'); ?>