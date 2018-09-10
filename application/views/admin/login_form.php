<!DOCTYPE HTML>
<html>
<head>
<title>Giriş Sayfası</title>
<meta charset="UTF-8" />


<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/login.css">
</head>

<body>
<center>
<?=$this->session->flashdata("mesaj")?>

<form action="<?=base_url()?>admin/Login/login_ol" method="post">
  <div class="imgcontainer">
    <img src="<?=base_url()?>uploads/indir.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adını Gir" name="email" required>

    <label><b>Sifre</b></label>
    <input type="password" placeholder="Şifreni Gir" name="sifre" required>

    <button type="submit">Giriş</button>
   
  </div>

  
  </center>
</form>
</body>
</html>
