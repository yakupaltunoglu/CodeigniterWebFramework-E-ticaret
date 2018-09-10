<?php $this->load->view('_header');?>
<?php $this->load->view('_sidebar');?>
<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center"><?=$urunler[0]->adi?></h2>
						<div class="single-blog-post">
							
							
							<a href="">
								<img src="<?=base_url()?>uploads/<?=$urunler[0]->resim?>" alt="" height="500" >
							</a>
							<p>
							<?=$urunler[0]->aciklama?>
							</p>
							
						</div>
					</div><!--/blog-post-area-->

					
			</div>
		</div>
	</section>
	<?php $this->load->view('_footer');?>