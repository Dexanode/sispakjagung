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
            <a href="index.php"><i class="fas fa-home"></i></a>
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

  <div class="col-sm-2">
    <center>
      <h3>Expert <b>System</b></h3>
      <img src="img/unpak.png" width="60%" alt="" srcset="">
      <hr>
      
      <hr>
      <div class="panel panel-danger">
        <div class="panel-heading">Dibuat Oleh :</div>
        <div class="panel-body text-left">
          Muhamad Ridwan Sidik<br>
          0651 13 061<br>
          Fakultas MIPA<br>
          Ilmu Komputer<br>
        </div>
      </div>
  </div>
  </center>
  </div>
  <div class="container">
    <div class="col-sm-10 text-left">
      <center>
        <h2>ABOUT</h2>
      </center>
      <div class="panel panel-success">
        <div class="panel-heading">Introduce:</div>
        <div class="panel-body">
          <p>Petani jagung di Bojong Hilir salabenda kabupaten Bogor, yang ahli pada bidang tanaman jagung masih terbatas baik dari segi jumlah dan waktu kerja. Dalam menyelesaikan serangan hama dan penyakit yang menyerang tidak sedikit dari petani melakukan kesalahan dalam mengatasi permasalahan yang dihadapi, sehingga produksi jagung yang di panen setiap musimnya banyak mengalami gagal panen karena terserang hama dan penyakit. Jagung merupakan salah satu komoditas unggulan pertanian dari sub sektor tanaman pangan yang multi guna dan bernilai strategis untuk dikembangkan. Pada saat ini, jagung tidak hanya dimanfaatkan untuk bahan pangan (food) saja tetapi juga untuk pakan ternak (feed), dan juga bahan bakar (fuel). Jumlah produksi, produktivitas dan harga jagung selalu mengalami fluktuasi karena pengaruh jumlah permintaan dan penawaran yang selalu berubah ubah. Tingginya permintaan jagung di pasar domestik merupakan salah satu peluang bagi Indonesia untuk menyeimbangkan antara jumlah permintaan dan penawaran jagung. Adapun cara yang dapat ditempuh untuk mewujudkan keseimbangan permintaan dan penawaran jagung domestik adalah dengan memproduksi jagung sendiri di dalam negeri dengan menggunakan sumber daya domestik atau dengan melakukan impor jagung dari negara lain (Maharani,2014).</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
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