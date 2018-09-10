<?php 
$this->load->view('_header');


?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
					<?php if($this->session->flashdata("mesaj")){?>
					<p><?=$this->session->flashdata("mesaj")?>
									
					<?php }?>
						<h2>Üye Login</h2>
						<form action="<?=base_url()?>home/login2" method="post">
							<input type="email" name="eposta" placeholder="E-Mail" />
							<input type="password" name="sifre" placeholder="Şifre" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Beni Hatırla
							</span>
							<button type="submit" class="btn btn-default">Giriş Yap</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
					
					
						<h2>Üye Olunuz</h2>
						<form action="#" method="post">
							<input type="text" name="adi" placeholder="İsim Soyisim"/>
							<input type="email" name="eposta" placeholder="E-Mail adres"/>
							<input type="password" name="sifre" placeholder="sifre"/>
							<button type="submit" class="btn btn-default">Kayıt ol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php $this->load->view('_footer');?>