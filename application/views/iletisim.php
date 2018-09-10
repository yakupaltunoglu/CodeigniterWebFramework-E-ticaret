<!-- MAIN -->
<?php $this->load->view('_header');


?><div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">İLETİŞİM </h2>    			    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">BİZE YAZIN</h2>
						<?php
							if($this->session->flashdata("mesaj"))
							{?>
						<h3><?=$this->session->flashdata("mesaj")?></h3>
						<?php 
							}?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/mesajkaydet">
				            <div class="form-group col-md-6">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adınızı Soyadınızı Giriniz">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email Adresini Giriniz">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon Numarınızı Giriniz">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınızı Giriniz."></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İLETİŞİM BİLGİLERİ</h2>
	    				<address>
	    					<p><?=$veri[0]->iletisim?></p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/<?=$veri[0]->facebook?>"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/<?=$veri[0]->twitter?>"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    
	<?php $this->load->view('_footer');?>