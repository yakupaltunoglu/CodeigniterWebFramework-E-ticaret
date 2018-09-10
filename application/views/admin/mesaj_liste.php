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
                        <h3 class="text-themecolor m-b-0 m-t-0">Mesajlar Listesi</h3>
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
                                <form id="contact-us" method="post" action="#">
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                        
                                                <th>Adı Soyadı</th>
                                                <th>Email</th>
												<th>Telefon</th>
												<th>Mesaj</th>
													<th>Adminin Notu</th>
												<th>Tarih</th>
                                                <th>Ip</th>
												<th>Durum</th>
												<th>Düzenle</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										
										foreach($veriler as $rs)
										{ 
										?>
										<tr>
												
                                                <td><?=$rs->adsoy?></td>
                                                <td><?=$rs->email?></td>
												 <td><?=$rs->tel?></td>
												<td><?=$rs->mesaj?></td>
												<td><?=$rs->adminnotu?></td>
                                                <td><?=$rs->tarih?></td>
												<td><?=$rs->IP?></td>
                                               
												<td><?=$rs->durum?></td>
												<td><a href="<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?>">Detay</a></td>
                                                <td><a href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')">Sil</a></td>
										</tr>	
										<?php } ?>
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