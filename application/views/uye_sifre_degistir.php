<!-- MAIN -->
<?php $this->load->view('_header');


?><div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Şifre Değiştir</h2>    			    				    				
					
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
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/sifre_degistir_guncelle/<?=$musteri[0]->Id?>">
				            
							 <div class="form-group col-md-6">
								<h3>Şifre</h3>
				                <input type="password" name="sifre" class="form-control" required="required" >
				            </div>
				                      <div class="form-group col-md-6">
								<h3>Şifre Tekrar</h3>
				                <input type="password" name="sifretekrar" class="form-control" required="required" >
				            </div>
							<div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Şifre Değiştir">
				            </div>
 
				        </form>
	    			</div>
	    		</div>
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    
	<?php $this->load->view('_footer');?>