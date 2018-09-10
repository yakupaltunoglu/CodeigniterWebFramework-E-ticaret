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
                        <h3 class="text-themecolor m-b-0 m-t-0">Üye Listesi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Üyeler</li>
							   <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> <?= $this->session->flashdata("mesaj")?></a>
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
                                <h6 class="card-subtitle"><a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-danger"  class="fa fa-plus-circle" ><i class="fa fa-plus-circle"> Üye Ekle</i></a> </h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Adı Soyadı</th>
                                                <th>Email</th>
                                                <th>Şehir</th>
												<th>Tel</th>
												<th>Yetki</th>
                                                <th>Durum</th>
												<th>Düzenle</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$sno=0;
										foreach($veriler as $rs)
										{ $sno++;
										?>
										<tr>
												<td><?=$sno?></td>
                                                <td><?=$rs->adsoy?></td>
                                                <td><?=$rs->email?></td>
												<td><?=$rs->sehir?></td>
                                                <td><?=$rs->tel?></td>
												
                                                <td><?=$rs->yetki?></td>
												<td><?=$rs->durum?></td>
												<td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>">Düzenle</a></td>
                                                <td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')">Sil</a></td>
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