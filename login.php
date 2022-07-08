<?php
include "mysql_mysqli.inc.php";
require 'function.php';
include "../config.php";
session_start();

//ceklogin
if(isset($_POST['login'])){
    $email      = $_POST['email'];
    $password   = $_POST['password'];

//cocokin dengan database
    $cekdatabase    = mysqli_query($conn, "SELECT * FROM kom_user WHERE email='$email' and password='$password'");

    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chars et="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Komkordik</title>
        <link rel="assets/img/logors.jpg" />
        <link href="assets/img/logors.jpg" rel="icon">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon href="<?=base_url()?>">
    </head>
    <style type="text/css">
  .auth .brand-logo img {
    width: 50px;
  }
  .auth .auth-form-light {
    background: #ffffff;
    border-radius: 10px;
  }
</style>
<body class="bg-primary">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('assets/images/bg/bg1.jpg');background-size: cover;background-repeat: no-repeat;background-position: center;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="assets/img/logors.jpg" alt="logo">
              </div>
              <h4>Aplikasi-Komkordik <font style="font-size: 10px;font-weight:600">RSUD Drs. H. Amri Tambunan</font></h4>
              <font class="fw-light" style="font-size: 12px;top:-10px">Silahkan Login.</font>
              <form class="pt-3" method="post" action="">
                <div class="form-group">
                <label class="small mb-1" for="inputemail"></label>
                <input class="form-control" py-4 name="email" id="inputEmail" type="email" placeholder="username" />
                </div>
                <div class="form-group">
                <label class="small mb-1" for="inputpassword"></label>
                <input class="form-control" py-4 name="password" id="inputPassword" type="password" placeholder="password" />
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary" name="login">Login</button>
                  <a class="btn btn-danger" href="register.php">Create Account</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Ingat saya
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" id="ckb1" onclick="myFunction()" class="form-check-input">
                       Tampilkan Password
                    </label>
                  </div>
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <div class="text-center mt-4 fw-light">
                  Version <a href="#" class="text-primary">1.0.1</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Show Password -->
  <script type="text/javascript">
    function myFunction() {
      var x = document.getElementById("inputPassword");
      if (x.type === "inputPassword") {
        x.type = "text";
      } else {
        x.type = "inputPassword";
      }
    }
  </script>
  <!-- End Show Password -->
  <script type="text/javascript">
    if (window?.location?.href?.indexOf('error') > -1) {
      Swal.fire({
        title: 'Gagal Log In!',
        icon: 'error',
        text: 'Username atau password anda salah! Periksa kembali atau hubungungi Administrator!',
      })
      history.replaceState({}, '', './login.php.php');
    }

    if (window?.location?.href?.indexOf('errorAccess') > -1) {
      Swal.fire({
        title: 'Tidak Ada Akses!',
        icon: 'error',
        text: 'hubungungi Administrator!',
      })
      history.replaceState({}, '', './login.php');
    }
  </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </body>
</html>