<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
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
            <a href="index.php">BERANDA</a>
          </li>
          <li>
            <a href="diagnosa.php">DIAGNOSA PENYAKIT</a>
          </li>
          <li>
            <a href="daftarpenyakit.php">DAFTAR PENYAKIT</a>
          </li>
          <li>
            <a href="about.php">TENTANG</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#" id="myBtn" class="text-primary">LOGIN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="jumbotron" style="background-image:url(img/corn.jpg);background-size:cover;">
<center><img src="img/unpak.png" width="10%" alt="" srcset="">
  <div class="container">
    <h2 align="center" style="color:white">SISTEM PAKAR </h2>
    <h3 style="color:white">DIAGNOSA HAMA DAN PENYAKIT TANAMAN JAGUNG</h3>
    <a href="diagnosa.php" class="btn btn-danger">Diagnosa Sekarang</a>
  </div></center>
</div>
  <div class="container">
  <p align=justify>Di Indonesia tanaman bawang dan cabai adalah salah satu jenis tanaman hortikultura yang
              secara luas dibudidayakan. Akan tetapi, jika dilihat dari hasil panen yang dihasilkan masih belum
              memuaskan. Hal ini disebabkan oleh berbagai faktor, diantaranya yaitu teknik budidaya, kondisi lingkungan
              dan hama penyakit. Dari ketiga faktor, faktor yang paling bermasalah sampai saat ini adalah hama dan
              penyakit.Masalahnya sering ditemui bahwa petani yang minim akan pengetahuaan mengenai penyakit yang
              menyerang tanaman mereka, ditambah lagi keterbatasan seorang ahli kadang-kadang menjadi kendala bagi
              petani yang akan melakukan konsultasi untuk menyelesaikan masalah dan mendapatkan solusi terbaik.
              Diharapka sistem pakar simulasi diagnosa hama dan penyakit tanaman bawang dan cabai dibuat bertujuan untuk
              sebagai sarana konsultasi, sarana belajar di suatu instansi dan dapat digunakan sebagai alat yang
              digunakan untuk mendiagnosa dan mensosialisasikan jenis hama dan penyakit.</p>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span
                class="glyphicon glyphicon-off"></span> Login</button>
          </form>

        </div>
      </div>




    </div>
  </div>



  <script>
    $(document).ready(function () {
      $("#myBtn").click(function () {
        $("#myModal").modal();
      });
    });
  </script>

</body>

</html>