<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">VİTRİNDEKİLER</h2>
						<?php foreach($vitrindekiler as $rs){?>
						
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
									<ul class="nav nav-pills nav-justified">
										
										
									</ul>
								</div>
							</div>
							
						</div>
						
						<?php } ?>
						
					</div><!--features_items-->
					
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">YENİ ÜRÜNLERİMİZ</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<?php 
						$say=0;
						$aktf=null;
							$say++;
							if($say==1)
								$aktf="active";
							else
								$aktf=null;
							$sayac=0;
							?>
							
								<div class="item <?=$aktf?>">	
							<?php foreach($yeniurunler as $rs) 
						{$sayac++; 
						if($sayac!=4){
						
						
						?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" height="300" />
													<h2><?=$rs->sfiyat?> TL</h2>
													<p><?=$rs->adi?></p>
													<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
												</div>
												</div>
											</div>
										</div>
									
						


						<?php }
						if($sayac==3)$aktf=null;
						else if($sayac==4) {?>
						</div>
						<div class="item <?=$aktf?>">
						<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" height="300" />
													<h2><?=$rs->sfiyat?> TL</h2>
													<p><?=$rs->adi?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
												</div>
												
											</div>
										</div>
								
									</div>
						<?php }}  ?>
								
							
							</div>
						</div>
								
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>	
							  
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	