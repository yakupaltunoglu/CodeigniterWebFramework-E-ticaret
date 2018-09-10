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
                        <h3 class="text-themecolor m-b-0 m-t-0">Mesaj Detay Bilgileri</h3>
                        <ol class="breadcrumb">
                            
							   <li class="breadcrumb-item active"></li>
                        </ol>
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
                         <?php
							if($this->session->flashdata("mesaj"))
							{?>
						<h3><?=$this->session->flashdata("mesaj")?></h3>
						<?php 
							}?>
                               
                                <div class="table-responsive">
                                    <table class="table">
                                       
                                            <tr>
                                                <th>Adı Soyadı</th>
												<td><?=$veri[0]->adsoy?></td>
												</tr>
												
												 <tr>
                                                <th>Email</th>
												<td><?=$veri[0]->email?></td>
												</tr>
												
												 <tr>
                                                <th>Telefon</th>
												<td><?=$veri[0]->tel?></td>
												</tr>
												
												 <tr>
                                                <th>Mesaj</th>
												<td><?=$veri[0]->mesaj?></td>
												</tr>
                                                
                                             <tr>
                                                <th>Tarih</th>
												<td><?=$veri[0]->tarih?></td>
												</tr>
                                        <tr>
                                                <th>IP:</th>
												<td><?=$veri[0]->IP?></td>
												</tr>
                                         <tr>
                                                <th>Notunuz:</th>
												<td>
												<form action="<?=base_url()?>admin/mesajlar/guncelle/<?=$veri[0]->Id?>" method="post">
												<textarea name="adminnotu" rows="5" cols="50"><?=$veri[0]->adminnotu?></textarea>
												
												<br>
												
												<input type="submit" value="Güncelle" />
												</form>
												
												</td>
												</tr>
									
                                    </table>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
			<?php $this->load->view('admin/_footer'); ?>