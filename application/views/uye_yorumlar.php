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
							<td class="image">Tarih</td>
							
							
							<td class="quantity">Konu Başlık</td>
							<td class="total">Yorum</td>
							<td>Sil</td>
						</tr>
					</thead>
					<tbody>
					<?php 
					
					foreach($musteri as $rs) {
						
						?>
						<tr>
							
							<td class="cart_description">
								<h4><a href=""><?=$rs->tarih?></a></h4>
								
							</td>
							
							
							<td class="cart_total">
								<p class="cart_total_price"><?=$rs->konu?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=$rs->yorum?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?=base_url()?>home/sepetsil/<?=$rs->Id?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
					<?php } ?>
						
						
						
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