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
                        <h3 class="text-themecolor m-b-0 m-t-0">Ürün Resim Ekleme</h3>
                        
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
							<h3 class="text-themecolor m-b-0 m-t-0">Eklenecek Resmi Seçiniz.</h3><br>
                              <!-- Form Area --><div class="inner contact">
                <div class="contact-form">
                    <!-- Form -->
					
					<?PHP if($this->session->flashdata("mesaj")) { ?>
					
					<p><h3><?=$this->session->flashdata("mesaj"); } ?></h3></p>
                    <form id="contact-us" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <table align="center" >
							<tr>
							
                            <td><input type="file" name="resim" id="name" required="required" class="form" placeholder="Yüklemek için gözat" onchange="this.form.submit()" ></td> 
                            </tr>
							
							
							
                       
						
                            
                        <tr><td>
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Resim Ekle</button> </td></tr>
                        </Table>
                        <!-- Clear -->
                        <div class="clear"><?php foreach($veriler as $rs) { ?> 
						<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100"> <a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')">Sil</a>
						<?php } ?>
						</div>
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
               
            </div></div>
			<?php $this->load->view('admin/_footer'); ?>