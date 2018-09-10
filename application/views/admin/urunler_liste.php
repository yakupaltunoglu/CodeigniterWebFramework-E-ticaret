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
                        <h3 class="text-themecolor m-b-0 m-t-0">Ürünler Listesi</h3>
                        
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
                                <h6 class="card-subtitle"><a href="<?=base_url()?>admin/urunler/ekle" class="btn btn-danger"  class="fa fa-plus-circle" ><i class="fa fa-plus-circle"> Ürün Ekle</i></a> </h6>
<?PHP if($this->session->flashdata("mesaj")) { ?>
					
					<p><h3><?=$this->session->flashdata("mesaj"); } ?></h3></p>                               
							   <div class="table-responsive">
                                    <table class="table" border="1">
                                        <thead>
                                            <tr>
                                                <th>Nr</th>
                                                <th>Adı</th>
                                                <th>Kategori</th>
                                                <th>A.Fiyat</th>
												<th>S.Fiyat</th>
												<th>Resim</th>
                                                <th>Galeri</th>
												<th>Durum</th>
												<th>Düzelt</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$rn=0;
										foreach($veriler as $rs)
										{ $rn++;
										?>
										<tr>
												<td><?=$rn?></td>
                                                <td><?=$rs->adi?></td>
                                                <td><?=$rs->katadi?></td>
												<td><?=$rs->afiyat?></td>
                                                <td><?=$rs->sfiyat?></td>
												
                                                <td><?php if($rs->resim){?>
												<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" class="form"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
												<?php } else { ?>
												<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" class="form">Resim Yükle</a>
												<?php } ?>
												</td>
												<td>		<a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>" class="form">Galeri Yükle</a>	</td>
												<td><?=$rs->durum?></td>
												<td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>">Düzenle</a></td>
                                                <td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')">Sil</a></td>
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