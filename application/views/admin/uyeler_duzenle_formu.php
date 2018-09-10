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
                        <h3 class="text-themecolor m-b-0 m-t-0">Üye Düzenleme Formu</h3>
                        <ol class="breadcrumb">
                           
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
							<h3 class="text-themecolor m-b-0 m-t-0">Üye Listesi</h3><br>
                              <!-- Form Area --><div class="inner contact">
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <table align="center" >
							<tr>
							<td>Adı Soyadi:</td>
                            <td><input type="text" name="adsoy" id="name" required="required" class="form" value="<?=$veriler[0]->adsoy?>" /></td> 
                            </tr>
							
							<tr>
							<td>Email:</td>
                            <td><input type="email" name="email" id="mail" required="required" class="form" value="<?=$veriler[0]->email?>"  /></td>
                            </tr>
							<tr>
							<td>Şifre:</td>
                            <td><input type="password" name="sifre" id="subject" required="required" class="form" value="<?=$veriler[0]->sifre?>"/></td>
							</tr>
							
                       <tr>
					   <td>Şehirler</td>
					   <td>
                            <select class="form" name="sehir" >
							<option><?=$veriler[0]->sehir?></option>
							<option>Ankara</option>
							<option>Ankara</option>
							<option>Ankara</option>
							<option>Ankara</option>
							</select></td>
							</tr>
                        
						<tr><td>
                            Yetki:</td>
							<td>
                            <select class="form" name="yetki">
						<option><?=$veriler[0]->yetki?></option>
							<option>uye</option>
							<option>satici</option>
							<option>yorumcu</option>
							<option>yazar</option>
							
							</select></td></tr>
                        
						
						<tr><td>
                            Durum</td><td>
                            <select class="form" name="durum">
							<option><?=$veriler[0]->durum?></option>
							<option>aktif</option>
							<option>pasif</option>
							
							</select></td></tr>
                       
						
                            
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