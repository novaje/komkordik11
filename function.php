<?php
include "mysql_mysqli.inc.php";
session_start();

//koneksi
$conn = mysqli_connect("localhost","root","","db_komkordik");
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

function base_url($url = null) {
    $base_url = "http://localhost/komkordik";
    if($url != null) {
        return $base_url."/".$url;
    } else {
        return $base_url;
    }
}

if(isset($_POST['register'])){
    //jika tombol register diklik

    $username = $_POST['email'];
    $password = $_POST['password'];

    //fungsi enkrip password
    $epassword = password_hash()

    //insert into database
    $insert = mysqli_query($conn,"INSERT INTO kom_user (username,password) VALUES ('$email','$password')");

    if($insert){
        //jika berhasil
        header('location:index.php');
    } else {
        //jika gagal
        echo '
        <script>
            alert("register gagal");
            window.location.href="register.php";
        </script>
        ';
    }
}

//TAMBAH DATA DOSEN
if(isset($_POST['addnew'])){
    $username      = $_POST['username'];
    $email         = $_POST['email'];
    $alamat        = $_POST['alamat'];
    $no_hp         = $_POST['no_hp'];

    $addtotable = mysqli_query($conn, "insert into kom_dokter (username,email,alamat,no_hp)
    values ('$username','$email','$alamat','$no_hp')");
    if($addtotable){
        header('location:dosenpembimbing.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//TAMBAH DATA JADWAL KEGIATAN
if(isset($_POST['addkegiatan'])){
    $nama_mahasiswa      = $_POST['nama_mahasiswa'];
    $npm                 = $_POST['npm'];
    $tanggal             = $_POST['tanggal'];
    $jam_operasional     = $_POST['jam_operasional'];
    $rumah_sakit         = $_POST['rumah_sakit'];
    $stase               = $_POST['stase'];
    $kegiatan            = $_POST['kegiatan'];
    $nama_dosen          = $_POST['nama_dosen'];
    $keterangan          = $_POST['keterangan'];


    $addtable = mysqli_query($conn, "insert into kom_kegiatan (nama_mahasiswa,npm,tanggal,jam_operasional,rumah_sakit,stase,kegiatan,nama_dosen,keterangan)
    values ('$nama_mahasiswa','$npm','$tanggal','$jam_operasional','$rumah_sakit','$stase','$kegiatan','$nama_dosen','$keterangan')");
    if($addtable){
        header('location:jadwal_kegiatan.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//TAMBAH ABSENSI
if(isset($_POST['add_absen'])){
    $tanggal        = $_POST['tanggal'];
    $npm            = $_POST['npm'];
    $username       = $_POST['username'];
    $stase          = $_POST['stase'];
    $kelas          = $_POST['kelas'];
    $rumah_sakit    = $_POST['rumah_sakit'];
    $keterangan     = $_POST['keterangan'];


    $addtable = mysqli_query($conn, "insert into kom_absensi (tanggal,npm,username,stase,kelas,rumah_sakit,keterangan)
    values ('$tanggal','$npm','$username','$stase','$kelas','$rumah_sakit','$keterangan')");
    if($addtable){
        header('location:rekapabsen.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//tambah_coas
if(isset($_POST['add_coas'])){
    $nama_lengkap        = $_POST['nama_lengkap'];
    $kelompok            = $_POST['kelompok'];
    $dosen_pembimbing    = $_POST['dosen_pembimbing'];
    $nama_lengkap2       = $_POST['nama_lengkap2'];
    $nama_lengkap3       = $_POST['nama_lengkap3'];
    $nama_lengkap4       = $_POST['nama_lengkap4'];

    $addtable = mysqli_query($conn, "insert into kom_coas (nama_lengkap,kelompok,dosen_pembimbing,nama_lengkap2,nama_lengkap3,nama_lengkap4)
    values ('$nama_lengkap','$kelompok','$dosen_pembimbing','$nama_lengkap2','$nama_lengkap3','$nama_lengkap4')");
    if($addtable){
        header('location:data_coas.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//tambah nilai
if(isset($_POST['add_coas'])){
    $username            = $_POST['username'];
    $kelompok            = $_POST['kelompok'];
    $dosen_pembimbing    = $_POST['dosen_pembimbing'];
    $nama_lengkap2       = $_POST['nama_lengkap2'];
    $nama_lengkap3       = $_POST['nama_lengkap3'];

    $addtable = mysqli_query($conn, "insert into kom_coas (nama_lengkap,kelompok,dosen_pembimbing,nama_lengkap2,nama_lengkap3,nama_lengkap4)
    values ('$nama_lengkap','$kelompok','$dosen_pembimbing','$nama_lengkap2','$nama_lengkap3','$nama_lengkap4')");
    if($addtable){
        header('location:data_coas.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

?>