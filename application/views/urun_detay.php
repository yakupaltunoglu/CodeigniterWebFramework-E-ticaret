<?php $this->load->view('_header');
$this->load->view('_sidebar');

?>
	<section>
		<div class="container">
			<div class="row">
				
					
						
						
						
						
			
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
									
										<div class="item active">
										 <img src="<?=base_url()?>uploads/<?=$veri2[0]->resim?>" alt="" />
										</div>
										<?php foreach($resimler as $rs) 
						{	?>
										<div class="item">
										  <a href=""><img src="<?=base_url()?>uploads/<?=$resimler[0]->resim?>" alt=""></a>
										  
										</div>
						<?php }?>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?=$veri2[0]->adi?></h2>
								<p><?=$veri2[0]->katadi?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
								<form action="<?=base_url()?>home/sepete_ekle/<?=$veri2[0]->Id?>" method="post">
									<span><?=$veri2[0]->sfiyat?>TL</span>
									
							
						
									
									<label>Miktar:</label>
									<input type="text" Name="miktar" value="1" />
									<?php 
					if($this->session->userdata("uye_session"))
					{?> <button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</button>
									<br><br>
									
					<?PHP } else{ ?>
									<a href="<?=base_url()?>home/login2_ol" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</a>
					<?php } ?>
								</span>
								</form>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								
								<li><a href="#tag" data-toggle="tab">Açıklama</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Yorum Yap</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
							
							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												
												<p>Ürün Açıklaması:</p>
												<?=$veri2[0]->aciklama?>
												
												
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									<p><b>Yorum Yap</b></p>
									
									<form action="<?=base_url()?>home/yorum_kaydet" method="post">
										<span>
											<input type="text" name="konu" placeholder="Başlık"/>
											
										</span>
										
										<textarea name="yorum" placeholder="Yorumunuz" ></textarea>
										 <img src="images/product-details/rating.png" alt="" />
										<button type="submit" class="btn btn-default pull-right">
											Gönder
										</button>
									</form>
										
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
					
					
				</div>
			</div>
		</div>
	</section>
					
					
	<?php $this->load->view('_footer');?>