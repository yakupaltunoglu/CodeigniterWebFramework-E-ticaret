<?php $this->load->view('_header');?>
<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">HAKKIMIZDA </h2>    			    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		
	    		
	    			
	    				
	    				<address>
	    					<p><?=$veri[0]->hakkimizda?></p>
	    				</address>
						
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Ağlar</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
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
    </div><!--/#contact-page-->
	<?php $this->load->view('_footer');?>