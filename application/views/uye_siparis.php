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
							
							<td class="price">Tutar</td>
							<td class="quantity">Durum</td>
							<td class="total">Detay</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php 
					
					foreach($veriler as $rs) {
						
						
						
						?>
						<tr>
							
							<td class="cart_description">
								<h4><a href=""><?=$rs->tarih?></a></h4>
							
							</td>
							<td class="cart_price">
								<p><?=$rs->tutar?> TL</p>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price"><?=$rs->durum?> </p>
							</td>
							<td >
								<a href="<?=base_url()?>home/siparis_detay/<?=$rs->Id?>"><i class="fa fa-times">Şipariş Detayı</i></a>
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