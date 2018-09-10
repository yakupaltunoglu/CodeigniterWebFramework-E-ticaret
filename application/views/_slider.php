
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						<?php 
						$say=0;
						$aktf=null;
						foreach($kampanya as $rs) 
						{	$say++;
							if($say==1)
								$aktf="active";
							else
								$aktf=null;
							?>
							<div class="item <?=$aktf?>">
								
								<div class="col-sm-6" >
									<div class="ic">
									<img src="<?=base_url()?>uploads/<?=$rs->resim?>" class="pricing" alt="<?=$rs->adi?>" height="280" />
								</div>
								</div>
							</div>
							<?php } ?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->