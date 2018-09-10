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
                        <h3 class="text-themecolor m-b-0 m-t-0">Ürün Düzenleme Formu</h3>
                        
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content --><form id="contact-us" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>">
				 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
							 	<?PHP if($this->session->flashdata("mesaj")) { ?>
					
					<p><h3><?=$this->session->flashdata("mesaj"); } ?></h3></p>
							
                              <!-- Form Area --><div class="inner contact">
                <div class="contact-form">
                    <!-- Form -->
                    
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <table align="center" >
							<tr>
							<td>Adı:</td>
                            <td><input type="text" name="adi" id="name" required="required" class="form" value="<?=$veri[0]->adi?>" /></td> 
                            </tr>
							
							<tr>
							<td>Açıklama:</td>
                            <td><textarea name="aciklama" rows=10 cols=100><?=$veri[0]->aciklama?></textarea> </td>
                            </tr>
							
							
                       <tr>
					   <td>Kategori</td>
					   <td>
                            <select class="form" name="kategori" >
								
						<option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
						<?php foreach($veriler as $rs) { ?> 
						<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
						<?php } ?>
							
							
							</select></td>
							</tr>
                        
					
                        
						
						<tr><td>
                            Durum</td><td>
                            <select class="form" name="durum">
							<option><?=$veri[0]->durum?></option>
							<option>aktif</option>
							<option>pasif</option>
							
							</select></td></tr>
                       
						
                            
                        <tr><td>
				
						</td><td>
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Güncelle</button> </td></tr>
                        </Table>
                        <!-- Clear -->
                        <div class="clear"></div>
                    

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
			</form>
			<?php $this->load->view('admin/_footer'); ?>
			<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
			<script>
				$(function () {
					CKEDITOR.replace('aciklama')
					$('.textarea').wysihtm15()
				})
			</script>