<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KOMKORDIK RSUD-HAT</title>
        <link href="assets/img/logors.jpg" rel="icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">KOMKORDIK</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!----------==========NAVBAR LOGOUT==============----------------->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-----------------------=================SIDEBAR================================---------------------------------->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">HOME</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-chimney-user"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">MASTER</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks-alt"></i></div>
                                Data Mahasiswa
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="dosenpembimbing.php"><i class="fa-solid fa-user-doctor"></i>
                                        Dosen Pembimbing
                                    </a>
                                    <a class="nav-link" href="datamhs.php"><i class="fa-solid fa-user-graduate"></i>
                                        Mahasiswa Profesi
                                    </a>
                                    <a class="nav-link" href="layout-static.html"><i class="fa-solid fa-book"></i>
                                        Panduan
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">MAHASISWA</div>
                            <a class="nav-link" href="jadwal_kegiatan.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div>
                                Jadwal Kegiatan
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#fu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-medical"></i></div>
                                Follow Up
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#kg" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-medical"></i></div>
                                Kegiatan
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pn" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks-alt"></i></div>
                                Penilaian
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ev" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-bookmark"></i></div>
                                Evaluasi
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#rd" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-brain"></i></div>
                                Refleksi Diri
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="sb-sidenav-menu-heading">ADMINISTRASI</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-open"></i></div>
                                Berita Acara Kegiatan
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-square-poll-vertical"></i></div>
                                Rekap Absensi
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-to-bracket"></i></div>
                                Halaman Login
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.php">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sb-sidenav-footer">
                        Komkordik RSUD Drs H Amri Tambunan
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">DAFTAR NILAI MAHASISWA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">KOMKORDIK RSUD-HAT</li>
                        </ol>
                        <form action="/rekapAbsen" methode="POST">
                            <div class="form-row">Daftar</div>
                        </form>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="card mb-4">
                        <div class="card-header">
                    </div>
                    <div class="card-body">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NPM</th>
                                            <th>NAMA MAHASISWA</th>
                                            <th>DOSEN PEMBIMBING</th>
                                            <th>ACTION</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $ambildata = mysqli_query($conn, "SELECT * FROM kom_user RIGHT JOIN kom_nilai ON kom_user.id_us = tb_nilai.id_us");
                                            while($data=mysqli_fetch_array($ambildata)){
                                                $i=1;
                                                $npm                  = $data['npm'];
                                                $username             = $data['username'];
                                                $dosen_pembimbing     = $data['dosen_pembimbing'];
  
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$npm;?></td>
                                            <td><?=$username;?></td>
                                            <td><?=$dosen_pembimbing;?></td>
                                            <td>
                                            <button type="button" class="btn btn-primary">Sudah Dinilai</button>
                                            </td>
                                            <td><button type="button" class="btn btn-success">Disetujui</button></td>
                                            </td>
                                        </tr>
                                        <?php        
                                            };
                                        ?>
                                    </tbody>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </main>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Kegitan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="" enctype="multipart/form-data">
                    <section class="base">
                <div>
                    <p>Nama Mahasiswa :</p>
                    <input type="text" name="username" class="form-control">
                    <p>NPM :</p>
                    <input type="text" name="npm" class="form-control">
                    <p>Tanggal :</p>
                    <input type="date" name="tanggal" class="form-control">
                    <p>Jam Operasional :</p>
                    <input type="text" name="jam_operasional" class="form-control">
                    <p>Rumah Sakit :</p>
                    <input type="text" name="rumah_sakit" value="RSUD DRS H AMRI TAMBUNAN" readonly class="form-control">
                    <p>Stase :</p>
                    <input type="text" name="stase" class="form-control">
                    <p>Kegiatan :</p>
                    <input type="text" name="kegiatan" class="form-control">
                    <p>Nama Dosen :</p>
                    <input type="text" name="nama_dosen" class="form-control">
                    <p>Keterangan :</p>
                    <input type="text" name="keterangan" class="form-control">
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="addkegiatan">Submit</button>
                </div>
                </div>
                </form>
                </div>
    

                </div>
            </div>
            </div>
</html>