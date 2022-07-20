
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Home | Dokter Muda</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/@fortawesome/fontawesome-free/css/all.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/selectric/public/selectric.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/assets/css/style.css">
  <link rel="stylesheet" href="https://koas.umsu.ac.id/template/assets/css/components.css">

  <style type="text/css">
    /* .text-primary:hover {
      text-decoration: underline;
    } */

    .previewsign {
      border: 1px dashed #ccc;
      border-radius: 5px;
      color: #bbbabb;
      height: 250px;
      width: 100%;
      text-align: center;
      vertical-align: middle;
      top: 73px;
      right: 35px;
    }

    .m-signature-pad-body {
      border: 1px dashed #ccc;
      border-radius: 5px;
      color: #bbbabb;
      height: 100%;
      width: 100%;
      text-align: center;
      float: right;
      vertical-align: middle;
      top: 73px;
      margin-bottom: 20px;
    }

    .img {
      right: 0;
      position: absolute;
    }
  </style>
</head>


<body onload="announcement('Dosen','1')">

  <div id="app">
    <div class="main-wrapper">

      
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
          <div class="dropdown-header">Reminders
            <div class="float-right">
              <a href="#">Close</a>
            </div>
          </div>
          <div class="dropdown-list-content dropdown-list-icons">
            <a href="/followUp" class="dropdown-item dropdown-item-unread">
              <div class="dropdown-item-icon bg-primary text-white">
                <i class="fas fa-notes-medical"></i>
              </div>
              <div class="dropdown-item-desc">
                Jumlah Follow Up yang belum kamu verifikasi
                <div class="time text-primary">4 Follow Up</div>
              </div>
            </a>
            <a href="/kegiatanMahasiswa" class="dropdown-item">
              <div class="dropdown-item-icon bg-info text-white">
                <i class="fas fa-book-medical"></i>
              </div>
              <div class="dropdown-item-desc">
                Jumlah Kegiatan yang belum kamu verifikasi
                <div class="time text-primary">36 Kegiatan</div>
              </div>
            </a>
            <a href="/penilaian" class="dropdown-item">
              <div class="dropdown-item-icon bg-primary text-white">
                <i class="fas fa-book-medical"></i>
              </div>
              <div class="dropdown-item-desc">
                Jumlah Kegiatan yang belum kamu Nilai
                <div class="time text-primary">489 Kegiatan</div>
              </div>
            </a>
                        <a href="/penilaian" class="dropdown-item">
              <div class="dropdown-item-icon bg-info text-white">
                <i class="fas fa-marker"></i>
              </div>
              <div class="dropdown-item-desc">
                Jumlah Penilaian kamu yang sudah di verifikasi
                <div class="time text-primary">24 Penilaian</div>
              </div>
            </a>
          </div>
        </div>
      </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="https://koas.umsu.ac.id/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, Wirandi Dalimunthe</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title"></div>
        <form action="/logout" method="POST">
          <div class="buttons">
                          <a style="display: inline-block;  margin-left: 18px; width:80%;" href="/profile" class="btn btn-icon btn-primary"></i> Profile</a>
                        <a style="display: inline-block;  margin-left: 18px; margin-bottom: 20px;" href="/home" class="btn btn-icon btn-secondary"></i> Close</a>
            <button type="submit" style="display: inline-block; margin-bottom: 20px;" class="btn btn-icon icon-left btn-danger"><i class="fas fa-sign-out-alt"></i> logout</button>
          </div>
        </form>
      </div>
    </li>
  </ul>
</nav>
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/home">Dokter Muda</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Home</li><li><a class="nav-link" href="/home"><i class="fas fa-home"></i> <span>Dashboard</span></a></li><li class="menu-header">Master</li><li class="nav-item dropdown"><a href="" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data</span></a><ul class="dropdown-menu"><li><a class="nav-link" href="/panduan"><i class="far fa-file-pdf"></i><span>Panduan</span></a></li><li><a class="nav-link" href="/mahasiswaProfesi"><i class="fas fa-user-graduate"></i><span>Mahasiswa Profesi</span></a></li></ul></li><li class="menu-header">Mahasiswa</li><li><a class="nav-link" href="/followUp"><i class="fas fa-notes-medical"></i> <span>Follow Up</span></a></li><li><a class="nav-link" href="/kegiatanMahasiswa"><i class="fas fa-book-medical"></i> <span>Kegiatan</span></a></li><li><a class="nav-link" href="/penilaian"><i class="fas fa-marker"></i> <span>Penilaian</span></a></li><li><a class="nav-link" href="/evaluasi"><i class="fas fa-comment-dots"></i> <span>Evaluasi</span></a></li><li class="menu-header">Administrasi</li><li class="nav-item dropdown"><a href="" class="nav-link has-dropdown"><i class="fas fa-envelope"></i> <span>Berita Acara Kegiatan</span></a><ul class="dropdown-menu"><li><a class="nav-link" href="/lapBeritaAcara"><i class="fas fa-calendar-plus"></i><span>Jadwal Normal</span></a></li><li><a class="nav-link" href="/lapBeritaSkipKegiatan"><i class="fas fa-user-clock"></i><span>Jadwal Tertunda</span></a></li></ul></li><li class="menu-header">User Manual</li><li><a class="nav-link" href="/tutor"><i class="fas fa-chalkboard-teacher"></i> <span>Panduan Penggunaan</span></a></li>    </ul>
  </aside>
</div>
<!-- Main Content -->
<div class="main-content">
  <section class=" section">
    <div class="section-header">
      <h1>Selamat Datang di Aplikasi Dokter Muda UMSU</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Home</a></div>
        <div class="breadcrumb-item active">Dashboard</div>
      </div>
    </div>
    <div class="section-body">
      <div class="card">
        <center>
          <lottie-player src=" https://assets9.lottiefiles.com/packages/lf20_shc5hxwh.json" background="transparent" speed="1" style="width: 100%; height: 500px;" loop autoplay></lottie-player>
        </center>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="announcementSuperadmin">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selamat Datang di<strong> Aplikasi Dr. Muda UMSU</strong></h5>

      </div>
      <div class="modal-body">
        <div class="alert alert-info alert-has-icon alert-dismissible show fade">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-title">Pemberitahuan!</div>
         Role akun Kamu adalah <strong>Dosen</strong>    </div>
</div>        <p>Berikut adalah hal yang wajib Kamu lakukan pertama kali saat menggunakan aplikasi ini:</p>
        <ul>
          <li>Mengisi data panduan untuk keperluan aplikasi mobile (jika belum)</li>
          <li>Mengisi data stase (jika belum)</li>
          <li>Mengisi data kegiatan (jika belum)</li>
          <li>Mengisi bobot nilai sesuai stase (jika belum)</li>
          <li>Mengisi data rumah sakit (jika belum)</li>
          <li>Mengisi data stase pada rumah sakit (jika belum)</li>
          <li>Membuat kelompok mahasiswa untuk penjadwalan (jika belum)</li>
          <li>Membuat jadwal kegiatan (jika belum)</li>
        </ul>
      </div>
      <form action="/home/savepopup" method="post">
        <input type="hidden" name="email" value="dalimunthewirandi@gmail.com">
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ingati nanti</button>
          <button type="submit" class="btn btn-primary">Baiklah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="announcementAdmin">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selamat Datang di<strong> Aplikasi Dr. Muda UMSU</strong></h5>
      </div>
      <div class="modal-body">
        <div class="alert alert-info alert-has-icon alert-dismissible show fade">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-title">Pemberitahuan!</div>
         Role akun Kamu adalah <strong>Dosen</strong>    </div>
</div>        <p>Berikut adalah hal yang wajib Kamu lakukan pertama kali saat menggunakan aplikasi ini:</p>
        <ul>
          <li>Mengisi data panduan untuk keperluan aplikasi mobile (jika belum)</li>
          <li>Mengisi data stase (jika belum)</li>
          <li>Mengisi data kegiatan (jika belum)</li>
          <li>Mengisi bobot nilai sesuai stase (jika belum)</li>
          <li>Mengisi data rumah sakit (jika belum)</li>
          <li>Mengisi data stase pada rumah sakit (jika belum)</li>
          <li>Membuat kelompok mahasiswa untuk penjadwalan (jika belum)</li>
          <li>Membuat jadwal kegiatan (jika belum)</li>
        </ul>
      </div>
      <form action="/home/savepopup" method="post">
        <input type="hidden" name="email" value="dalimunthewirandi@gmail.com">
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ingati nanti</button>
          <button type="submit" class="btn btn-primary">Baiklah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="announcementKoordik">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selamat Datang di<strong> Aplikasi Dr. Muda UMSU</strong></h5>

      </div>
      <div class="modal-body">
        <div class="alert alert-info alert-has-icon alert-dismissible show fade">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-title">Pemberitahuan!</div>
         Role akun Kamu adalah <strong>Dosen</strong>    </div>
</div>        <p>Berikut adalah hal yang wajib Kamu lakukan pertama kali saat menggunakan aplikasi ini:</p>
        <ul>
          <li>Membuat tanda tangan digital pada menu profile. <a href="/profile" class="text-primary">klik disini</a></li>
        </ul>
        <p>Setelah proses koas berjalan, selanjutnya Kamu harus:</p>
        <ul>
          <li>Memverifikasi follow up dan kegiatan mahasiswa (jika dosen)</li>
          <li>Menilai kegiatan mahasiswa (jika dosen)</li>
          <li>Memverifikasi penilaian yang dibuat oleh dosen</li>
          <li>Membuat berita acara kegiatan (jika dosen)</li>
        </ul>
      </div>
      <form action="/home/savepopup" method="post">
        <input type="hidden" name="email" value="dalimunthewirandi@gmail.com">
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ingati nanti</button>
          <button type="submit" class="btn btn-primary">Baiklah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="announcementDosen">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selamat Datang di<strong> Aplikasi Dr. Muda UMSU</strong></h5>
      </div>
      <div class="modal-body">
        <div class="alert alert-info alert-has-icon alert-dismissible show fade">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-title">Pemberitahuan!</div>
         Role akun Kamu adalah <strong>Dosen</strong>    </div>
</div>        <p>Berikut adalah hal yang wajib Kamu lakukan pertama kali saat menggunakan aplikasi ini:</p>
        <ul>
          <li>Membuat tanda tangan digital pada menu profile. <a href="/profile" class="text-primary">klik disini</a></li>
        </ul>
        <p>Setelah proses koas berjalan, selanjutnya Kamu harus:</p>
        <ul>
          <li>Memverifikasi follow up dan kegiatan mahasiswa</li>
          <li>Menilai kegiatan mahasiswa</li>
          <li>Membuat berita acara kegiatan</li>
        </ul>
      </div>
      <form action="/home/savepopup" method="post">
        <input type="hidden" name="email" value="dalimunthewirandi@gmail.com">
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ingati nanti</button>
          <button type="submit" class="btn btn-primary">Baiklah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="announcement">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selamat Datang di<strong> Aplikasi Dr. Muda UMSU</strong></h5>

      </div>
      <div class="alert alert-info alert-has-icon alert-dismissible show fade">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-title">Pemberitahuan!</div>
         Role akun Kamu adalah <strong>Dosen</strong>    </div>
</div>      <p>Silahkan hubungi administrator untuk mempromosikan akun Kamu</p>
      <form action="/home/savepopup" method="post">
        <input type="hidden" name="email" value="dalimunthewirandi@gmail.com">
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ingati nanti</button>
          <button type="submit" class="btn btn-primary">Baiklah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2021 <a href="https://umsu.ac.id/">UMSU</a> Version 1.0.13
  </div>
</footer>

    </div>
  </div>
  <input type="hidden" name="sessionEmail" value="dalimunthewirandi@gmail.com">
  <input type="hidden" name="sessionId" value="113">
  <input type="hidden" name="sessionRole" value="Dosen">
  <!-- General JS Scripts -->
  <script src="https://koas.umsu.ac.id/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/moment/min/moment.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="https://koas.umsu.ac.id/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/select2/dist/js/select2.full.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/cleave.js/dist/cleave.min.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
  <script src="https://koas.umsu.ac.id/template/node_modules/summernote/dist/summernote-bs4.js"></script>



  <!-- Template JS File -->
  <script src="https://koas.umsu.ac.id/template/assets/js/scripts.js"></script>
  <script src="https://koas.umsu.ac.id/template/assets/js/custom.js"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!-- Page Specific JS File -->
  <script src="https://koas.umsu.ac.id/template/assets/js/page/forms-advanced-forms.js"></script>
  <script type="text/javascript" src="https://koas.umsu.ac.id/js/signature-pad.js"></script>
  <script src="https://koas.umsu.ac.id/template/assets/js/page/modules-datatables.js"></script>

  <!-- label dokumen -->
  <script>
    function announcement(role, $stat) {
      if (role == 'Superadmin' && $stat == '0') {
        $('#announcementSuperadmin').modal('show');
      } else if (role == 'Admin Prodi' && $stat == '0') {
        $('#announcementAdmin').modal('show');
      } else if (role == 'General User' && $stat == '0') {
        $('#announcement').modal('show');
      } else if (role == 'Dosen' && $stat == '0') {
        $('#announcementDosen').modal('show');
      } else if (role == 'Koordik' && $stat == '0') {
        $('#announcementKoordik').modal('show');
      }
    }

    function labelDokumen() {
      const dokumen = document.querySelector('#customFile');
      const dokumenLabel = document.querySelector('.custom-file-label');

      dokumenLabel.textContent = dokumen.files[0].name;
    }

    function labelDokumenEdit(id) {
      const dokumen = document.querySelector('#customFile' + id);
      const dokumenLabel = document.querySelector('.custom-file-label' + id);

      dokumenLabel.textContent = dokumen.files[0].name;
    }
  </script>
    
  
  
  
  
  <script src="https://koas.umsu.ac.id/js/script.js"></script>






</body>

</html>