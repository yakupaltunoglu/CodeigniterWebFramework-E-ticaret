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
                        <h3 class="text-themecolor m-b-0 m-t-0">Sitenin Ayarlar Alanı</h3>
                        
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				<form class="form-horizontal form-material" method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id ?>">
                <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#genel" role="tab">Genel Ayarlar</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#email" role="tab">Email</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sosyal" role="tab">Sosyal</a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#hakkimizda" role="tab">Hakkimizda</a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#iletisim" role="tab">İletişim</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="genel" role="tabpanel">
                                    <div class="card-block">
                                       
                                            <div class="form-group">
                                                <label class="col-md-12">Adı:</label>
                                                <div class="col-md-12">
                                                    <input type="text"  name="adi" class="form-control form-control-line" value="<?=$veri[0]->adi?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Description:</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line" name="description" id="example-email" value="<?=$veri[0]->description?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Keywords:</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="keywords"  class="form-control form-control-line" value="<?=$veri[0]->keywords?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Adres</label>
                                                <div class="col-md-12">
                                                    <input type="text" Name="adres"  class="form-control form-control-line" value="<?=$veri[0]->adres?>">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-12">Tel</label>
                                                <div class="col-md-12">
                                                    <input type="text" Name="tel"  class="form-control form-control-line" value="<?=$veri[0]->tel?>">
                                                </div>
                                            </div>
                                           
											<div class="form-group">
                                                <label class="col-md-12">Sehir</label>
                                                <div class="col-md-12">
                                                    <input type="text" Name="sehir"  class="form-control form-control-line" value="<?=$veri[0]->sehir?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Güncelle</button>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="email" role="tabpanel">
                                    <div class="card-block">
                                       <div class="form-group">
                                                <label class="col-md-12">Smtp Server:</label>
                                                <div class="col-md-12">
                                                    <input type="text"  name="smtpserver" class="form-control form-control-line" value="<?=$veri[0]->smtpserver?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Smtp Email:</label>
                                                <div class="col-md-12">
                                                    <input type="email"  class="form-control form-control-line" name="smtpemail" id="example-email" value="<?=$veri[0]->smtpemail?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Port:</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="smtpport"  class="form-control form-control-line" value="<?=$veri[0]->smtpport?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Şifre</label>
                                                <div class="col-md-12">
                                                    <input type="text" Name="password"  class="form-control form-control-line" value="<?=$veri[0]->password?>">
                                                </div>
                                            </div>
											
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Güncelle</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
								
								 <!--3 tab-->
							
                                <div class="tab-pane" id="sosyal" role="tabpanel">
                                    <div class="card-block">
                                       
                                            <div class="form-group">
                                                <label class="col-md-12">Facebook</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">İnstegram:</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="instegram"  class="form-control form-control-line" name="example-email" id="example-email" value="<?=$veri[0]->instegram?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Twitter:</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="twitter" class="form-control form-control-line" value="<?=$veri[0]->twitter?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Güncelle</button>
                                                </div>
                                            </div>
                                          
                                            </div>
                                            
                                            </div>
											 <!--4 tab-->
											 <div class="tab-pane" id="hakkimizda" role="tabpanel">
                                    <div class="card-block">
                                       
                                            <div class="form-group">
                                               <textarea name="hakkimizdada" rows=10 cols=100><?=$veri[0]->hakkimizda?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Güncelle</button>
                                                </div>
                                            </div>
                                          
                                            </div>
                                            
                                            </div>
											<!--5 tab-->
											 <div class="tab-pane" id="iletisim" role="tabpanel">
                                    <div class="card-block">
                                       
                                            <div class="form-group">
                                               <textarea name="iletisimde" rows=10 cols=100><?=$veri[0]->iletisim?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Güncelle</button>
                                                </div>
                                            </div>
                                          
                                            </div>
                                            
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
						</form>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
				<?php $this->load->view('admin/_footer'); ?>
				<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
			<script>
				$(function () {
					CKEDITOR.replace('hakkimizdada')
					CKEDITOR.replace('iletisimde')
					$('.textarea').wysihtm15()
				})
			</script>