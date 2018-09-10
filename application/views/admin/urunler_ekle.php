<?php 
$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar'); ?>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/style.css">

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
                        <h3 class="text-themecolor m-b-0 m-t-0">Ürün Ekleme Sayfası</h3>
                        
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
				 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
							
                              <!-- Form Area --><div class="inner contact">
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <table align="center" >
							<tr>
							<td>Adı</td>
                            <td ><input type="text" name="adi" id="name" required="required" class="form" /></td> 
                            </tr>
							<tr>
							<td>Kodu:</td>
                            <td><input type="text" name="kodu" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>Türü:</td>
                            <td><input type="text" name="turu" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>Kategori:</td>
                            <td><input type="text" name="kategori" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>A.Fiyat:</td>
                            <td><input type="text" name="afiyat" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>S.Fiyat:</td>
                            <td><input type="text" name="sfiyat" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>Stok:</td>
                            <td><input type="text" name="stok" id="subject" required="required" class="form" /></td>
							</tr>
							
							<tr>
							<td>Description:</td>
                            <td><input type="text" name="description" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>Keywords:</td>
                            <td><input type="text" name="keywords" id="subject" required="required" class="form" /></td>
							</tr>
							<tr>
							<td>Açıklama:</td>
                            <td> <textarea name="aciklama" rows=10 cols=100></textarea></td>
							</tr>
							
							
                       
                        
						
                        
						
						<tr><td>
                            Durum</td><td>
                            <select class="form" name="durum">
							<option>aktif</option>
							<option>pasif</option>
							
							</select></td></tr>
                       
						
                            
                        <tr><td>
						<button type="submit" id="submit" name="submit" class="form-btn semibold">Vazgeç</button>
						</td><td>
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Ürünü Ekle</button> </td></tr>
                        </Table>
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area--></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
			</div>
			<?php $this->load->view('admin/_footer'); ?>
			<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
			<script>
				$(function () {
					CKEDITOR.replace('aciklama')
					
					$('.textarea').wysihtm15()
				})
			</script>