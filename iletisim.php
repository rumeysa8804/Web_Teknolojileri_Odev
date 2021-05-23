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
<div>
  <p><b>İsim: </b><?php echo $_POST['isim']; ?></p>
  <p><b>Soyisim: </b><?php echo $_POST['soyisim']; ?></p>
  <p><b>E-mail: </b><?php echo $_POST['email1']; ?></p>
  <p><b>Mesaj: </b><?php echo $_POST['mesaj']; ?></p>
</div>
  </body>
</html>

