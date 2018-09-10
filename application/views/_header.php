<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$veri[0]->description?>">
	<meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
    <title><?=$sayfa ?> <?=$veri[0]->adi ?></title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="<?=base_url()?>home"> Anasayfa</a></li>
								<li><a href="<?=base_url()?>home/hakkimizda">Hakkimizda</a></li>
								<li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/<?=$veri[0]->facebook?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/<?=$veri[0]->twitter?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
						
						
						<SPAN style="color: #FE980F; font-size:xx-large"> DEMİRHAN</SPAN><BR><SPAN style=" font-size:xx-large"> PAZARLAMA</SPAN>  
							
							
						</div>
						
					</div>
					<?php 
					if($this->session->userdata("uye_session"))
					{?>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="<?=base_url()?>home/siparislerim"><i class="fa fa-star"></i> Siparişlerim</a></li>
								
								
								<li><a href="<?=base_url()?>home/sepetim"><i class="fa fa-shopping-cart"></i> Sepetim</a></li>
								<li><a href="<?=base_url()?>home/yorumlarim"><i class="fa fa-star"></i> Yorumlarım</a></li>
								<li>
								<div class="btn-group pull-right">
							
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Kullanıcı: <?=$this->session->uye_session["adsoy"]?>
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="<?=base_url()?>home/uyepanel">Hesap Bilgileri</a></li>
									<li><a href="<?=base_url()?>home/sifre_degistir">Şifre Değistir.</a></li><br>
									<li><a href="<?=base_url()?>home/login2_cik">Çıkış</a></li>
								</ul>
							</div>
						</div>
								</li>
							</ul>
						</div>
					</div>
					<?php } else {?>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="<?=base_url()?>home/login2_ol"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							
								<?php foreach($kategoriler as $rs) {?>
              <li><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>"><?=$rs->adi?></a></li>
			<?php } ?>
			
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
