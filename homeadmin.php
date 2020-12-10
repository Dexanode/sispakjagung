<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="Js/jquery-2.2.3.min.js"></script>
  <script src="Js/bootstrap.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         <li>
            <a href="index.php"><i class="fas fa-home"></i> BERANDA</a>
          </li>
          <li>
            <a href="diagnosa.php"><i class="fas fa-flask"></i> DIAGNOSA PENYAKIT</a>
          </li>
          <li>
            <a href="daftarpenyakit.php"><i class="fas fa-book-open"></i> DAFTAR PENYAKIT</a>
          </li>
          <li>
            <a href="about.php"><i class="fas fa-address-card"></i> TENTANG</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="logout.php" id="myBtn">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="col-sm-12 text-left">
    <div class="jumbotron">
      <center>
        <h2>SISTEM PAKAR DIAGNOSA</h2>
        <h3>PENYAKIT TANAMAN JAGUNG</h3>
      <p>Selamat datang <?php echo $login_session; ?></p>
      <br>
    </div>
    </center>
    <center>
  
    <img src="img/unpak.png" width="12%" alt="" srcset="">

    </center>
    </div>
  </div>
  </div>
  </div>



</body>

</html>