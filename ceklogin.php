<?php
include('koneksi.php');
$username= $_POST['username'];
$password=$_POST['password'];
$error='';

$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
$result = $konek_db->query($query) or die($konek_db->error.__LINE__);
    if($result->num_rows > 0) {
              session_start();
              $_SESSION['login_user']=$username;
              header('location:homeadmin.php');
        }
    else {
        header('location:salahlogin.php');
        }
    ?>