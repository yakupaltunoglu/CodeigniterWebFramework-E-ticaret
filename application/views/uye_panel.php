<!-- MAIN -->
<?php $this->load->view('_header');


?><div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Hesabı Düzenle </h2>    			    				    				
					
				</div>			 		
			</div>    	
			
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				
						<?php
							if($this->session->flashdata("mesaj"))
							{?>
						<h3><?=$this->session->flashdata("mesaj")?></h3>
						<?php 
							}?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/uyebilgileri_guncelle/<?=$musteri[0]->Id?>">
				            <div class="form-group col-md-6">
								<h3>Adı Soyadı:</h3>
				                <input type="text" name="adsoy" class="form-control" required="required" value="<?=$musteri[0]->adsoy?>">
				            </div>
				            
				            <div class="form-group col-md-6">
								<h3>E-Mail Adresi</h3>
				                <input type="text" name="email" class="form-control" required="required" value="<?=$musteri[0]->email?>">
				            </div>
							 <div class="form-group col-md-6">
								<h3>Telefon</h3>
				                <input type="text" name="tel" class="form-control" required="required" value="<?=$musteri[0]->tel?>">
				            </div>
				                      <div class="form-group col-md-6">
								<h3>Şehir</h3>
				                <input type="text" name="sehir" class="form-control" required="required" value="<?=$musteri[0]->sehir?>">
				            </div>
 <div class="form-group col-md-6">
								<h3> Adres</h3>
				                <input type="text" name="adres" class="form-control" required="required" value="<?=$musteri[0]->adres?>">
				            </div>						
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Bilgileri Güncelle">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    
	<?php $this->load->view('_footer');?>