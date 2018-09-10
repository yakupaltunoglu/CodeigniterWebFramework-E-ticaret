<?php 
$this->load->view('_header');
		$this->load->view('_sidebar'); ?>
<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?=$kicerik[0]->kadi?></h2>
						<?php foreach($kicerik as $rs){?>
						
						<div class="col-sm-4">
						
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center" >
											<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" height="300" />
											<h2><?=$rs->sfiyat?> TL</h2>
											<p><?=$rs->adi?></p>
											<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart">Ürünün Detayı</a>
										</div>
										
								</div>
								<div class="choose">
									
								</div>
							</div>
							
						</div>
						
						<?php } ?>
						
					</div><!--features_items-->
					
					
					
					
					
				</div>
			</div>
		</div>
	</section>
	<?php $this->load->view('_footer'); ?>