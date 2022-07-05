<?php
require 'function.php';
if(@$_GET['act'] == '') {
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
                                Kegiatan
                            </a>
                            <a class="nav-link collapsed" href="data_coas.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Data Coas
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#fu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-medical"></i></div>
                                Follow Up
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
                        <h1 class="mt-4">DOSEN PEMBIMBING</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">KOMKORDIK RSUD-HAT</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="card mb-4">
                        <div class="card-header">
                        <!-- Button to Open the Modal -->
                            <div class="pull-right">
                                <a href="" class="btn btn-default btn-xs"><i class='fa fa-refresh'></i></a>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class='fa fa-user-plus'></i>Tambah Data Dosen
                                </button>
                            </div>
                            </div>
                    </div>
                    <div class="card-body">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA DOSEN</th>
                                            <th>EMAIL</th>
                                            <th>ALAMAT</th>
                                            <th>NOMOR TELEPHONE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $ambildata = mysqli_query($conn, "select * from kom_dokter");
                                            while($data=mysqli_fetch_array($ambildata)){
                                                $i=1;
                                                $username   = $data['username'];
                                                $email      = $data['email'];
                                                $alamat     = $data['alamat'];
                                                $no_hp      = $data['no_hp'];
                                                
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$username;?></td>
                                            <td><?=$email;?></td>
                                            <td><?=$alamat;?></td>
                                            <td><?=$no_hp;?></td>
                                            <td>
                                            <a href="edit.php?id_dokter=<?php echo $id_dokter; ?>" onclick="return confirm('Anda Yakin Ingin Edit data?')">
                                                <button class="btn btn-danger btn-xs">Edit</button>
                                                </a>
                                                <a href="delete.php?id_dokter=<?php echo $id_dokter; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus data?')">
                                                <button class="btn btn-danger btn-xs"><i class="fa-solid fa-trash"></i>Hapus</button>
                                                </a>
                                            </td>
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
                    <h4 class="modal-title">Add Data Dosen</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="" enctype="multipart/form-data">
                    <section class="base">
                <div>
                    <p>Nama Dokter :</p>
                    <input type="text" name="username" class="form-control">
                    <p>Email :</p>
                    <input type="text" name="email" class="form-control">
                    <p>Alamat :</p>
                    <input type="text" name="alamat" class="form-control">
                    <p>Nomor Telephone :</p>
                    <input type="number" name="no_hp" class="form-control">
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="addnew">Submit</button>
                    </div>
                </div>
                </form>


                </div>
            </div>
            </div>
</html>

<?php
} else if(@$_GET['act'] == 'del') {
    echo "proses delete untuk id : ".$_GET['id_dokter'];
}