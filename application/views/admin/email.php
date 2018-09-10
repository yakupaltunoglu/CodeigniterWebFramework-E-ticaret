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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Ürün</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> Upgrade to Pro</a>
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
							<table align="center"><tr><td>
							<h3 class="text-themecolor m-b-0 m-t-0"><a href="#genel" class="text-themecolor m-b-0 m-t-0">Genel Ayarlar</a></h3></td>
						<td><td width="0">|</td><td>
							<h3 class="text-themecolor m-b-0 m-t-0"><a href="#email">Email</a></h3></td><td width="0">|</td>
							<td>
							<h3 class="text-themecolor m-b-0 m-t-0"><a href="#sosyal" class="text-themecolor m-b-0 m-t-0">Sosyal</a></h3></td><td width="0">|</td>
							<td>
							<h3 class="text-themecolor m-b-0 m-t-0"><a href="#hakkimizda" class="text-themecolor m-b-0 m-t-0">Hakkimizda</a></h3></td><td width="0">|</td>
							<td>
							<h3 class="text-themecolor m-b-0 m-t-0"><a href="#hakkimizda" class="text-themecolor m-b-0 m-t-0">İletişim</a></h3></td>
							</tr>
							</table>
                              <!-- Form Area --><div class="inner contact">
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id ?>">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
						<h3 class="text-themecolor m-b-0 m-t-0" id="genel">Genel Ayarlar</h3>
                            <table align="center" >
							
							<tr>
							<td>Description:</td>
                            <td><input type="text" name="description" id="name" required="required" class="form" value="<?=$veri[0]->description?>" /> </td>
                            </tr>
							<tr>
							<td>Keywords:</td>
                            <td><input type="text" name="keywords" id="name" required="required" class="form" value="<?=$veri[0]->keywords?>" /> </td>
                            </tr>
							<tr>
							<td>Adres:</td>
                            <td><input type="text" name="adres" id="name" required="required" class="form" value="<?=$veri[0]->adres?>" /> </td>
                            </tr>
							<tr>
							<td>Telefon:</td>
                            <td><input type="text" name="tel" id="name" required="required" class="form" value="<?=$veri[0]->tel?>" /> </td>
                            </tr>
							<tr>
							<td>Şehir:</td>
                            <td><input type="text" name="sehir" id="name" required="required" class="form" value="<?=$veri[0]->sehir?>" /> </td>
                            </tr>
							
							
							
                       
							
							
					
                        
						
						
                            
                        <tr><td>
				
						</td><td>
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Güncelle</button> </td></tr>
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
			<?php $this->load->view('admin/_footer'); ?>
			<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
			<script>
				$(function () {
					CKEDITOR.replace('aciklama')
					$('.textarea').wysihtm15()
				})
			</script>