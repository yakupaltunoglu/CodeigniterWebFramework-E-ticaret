
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>HURMA REHBERİ</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							<?php foreach($altkategoriler as $rs) {?>
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<a href="<?=base_url()?>home/kategoriSayfa/<?=$rs->Id?>">
											<?=$rs->adi?>
											</a>
										</a>
									</h4>
								</div>
							
							
								
									
								
							<?php } ?>
							
							</div>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>SİZİN İÇİN SEÇTİKLERİMİZ</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php foreach($altkategoriler2 as $rs) {?>
									<li><a href="#"> <span class="pull-right"></span><?=$rs->adi?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Promosyon Ürünü</h2>
							
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?=base_url()?>uploads/promosyon_25_zemzem-500x450.jpg" alt="" width="450" height="300"  />
						</div><!--/shipping-->
					
					</div>
				</div>