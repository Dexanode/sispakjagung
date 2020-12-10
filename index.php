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
  <link rel="stylesheet" href="fontawesome550/css/all.css">
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
            <a href="#" id="myBtn" class="text-primary">LOGIN  <i class="fas fa-sign-in-alt"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="jumbotron" style="background-image:url(img/bg1.jpg);background-size:cover;">
<center><img src="img/unpak.png" width="10%" alt="" srcset="">
  <div class="container">
    <h2 align="center" style="color:white">SISTEM PAKAR </h2>
    <h3 style="color:white">DIAGNOSA HAMA DAN PENYAKIT TANAMAN JAGUNG</h3>
    <a href="diagnosa.php" class="btn btn-danger">Diagnosa Sekarang</a>
  </div></center>
</div>
  <div class="container">
  <p align=justify>Jagung merupakan salah satu komoditas unggulan pertanian dari sub sektor tanaman pangan yang multi guna dan bernilai strategis untuk dikembangkan. Pada saat ini, jagung tidak hanya dimanfaatkan untuk bahan pangan (food) saja tetapi juga untuk pakan ternak (feed), dan juga bahan bakar (fuel). Jumlah produksi, produktivitas dan harga jagung selalu mengalami fluktuasi karena pengaruh jumlah permintaan dan penawaran yang selalu berubah ubah. Tingginya permintaan jagung di pasar domestik merupakan salah satu peluang bagi Indonesia untuk menyeimbangkan antara jumlah permintaan dan penawaran jagung. Adapun cara yang dapat ditempuh untuk mewujudkan keseimbangan permintaan dan penawaran jagung domestik adalah dengan memproduksi jagung sendiri di dalam negeri dengan menggunakan sumber daya domestik atau dengan melakukan impor jagung dari negara lain (Maharani, 2014).
</p>
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