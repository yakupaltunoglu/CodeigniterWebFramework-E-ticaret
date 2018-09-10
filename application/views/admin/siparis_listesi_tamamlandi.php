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
                        <h3 class="text-themecolor m-b-0 m-t-0">Tamamlanan Siparişler</h3>
                        
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
                                <form id="contact-us" method="post" action="#">
                                <div class="table-responsive">
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
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?=base_url()?>admin/Siparisler/siparis_detay/<?=$rs->Id?>"><i class="fa fa-times">Şipariş Detayı</i></a>
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
								</form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
			<?php $this->load->view('admin/_footer'); ?>