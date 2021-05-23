<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style type="text/css" lang="scss">
    body{
      background-color: rgb(192,192,192);
    }
    .navbar{
      max-height: 50px;
    }
    .nav-item{
      margin: 15px;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background-color:rgb(150,150,150);">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.html" target="_self" style="color: white; size: 16px;">Hakkimda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="ozgecmis.html" target="_self" style="color: white; size: 16px;">Ozgecmis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sehrim.html" target="_self" style="color: white; size: 16px;">Sehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mirasimiz.html" target="_self" style="color: white; size: 16px;">Mirasimiz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ilgialanlari.html" target="_self" style="color: white; size: 16px;">Ilgi Alanlarim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html" target="_self" style="color: white; size: 16px;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletisim.html" target="_self" style="color: white; size: 16px;">Iletisim</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
  </body>
</html>
<?php 
ob_start();
session_start();
 	if (isset($_POST['submit'])) {
 		$email=$_POST['email'];
 		$password=$_POST['password'];
    $kullanici=explode("@", $email);

 		if(!$email&&!$password){
 			echo "Lütfen e-mailinizi ve şifrenizi giriniz";
 			header('Refresh:2;login.html');
 		}
 		else if(!$email || $email!="b201210043@sakarya.edu.tr"){
 			echo "Lütfen Emaili giriniz";
 			header('Refresh:2;login.html');
 		}
 		else if(!$password){
 			echo "Lütfen şifrenizi giriniz";
 			header('Refresh:2;login.html');
 		}
 		else{
 			echo "Hoşgeldin ".$kullanici[0];
 		}

 	}

?>
