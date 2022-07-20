<?php
require 'function_registrasi.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register User</title>
        <link rel="assets/img/logors.jpg" />
        <link href="assets/img/logors.jpg" rel="icon">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                        <form class="pt-3"method="POST" action="">
                                        <div class="row mb-3">
                                        <div class="row w-100 mx-0">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" name="username" id="username" class="form-control">
                                                </div>
                                                </br>
                                                <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" id="password" class="form-control">
                                                </div>
                                                </br>
                                                <button type="submit" name="register" class="btn btn-info">Register</button>
                                        </form>
                                    </div>
                                    <div class="text-center py-3">
                                    <div class=""><a href="login.php">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
