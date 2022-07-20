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

//tambah dosen
if(isset($_POST['addnew'])){
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $alamat         = $_POST['alamat'];
    $no_hp          = $_POST['no_hp'];

    $addtable = mysqli_query($conn, "insert into kom_dokter (username,email,alamat,no_hp)
    values ('$username','$email','$alamat','$no_hp')");
    if($addtable){
        header('location:dosenpembimbing.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//tambah kegiatan
if(isset($_POST['addkegiatan'])){
    $username             = $_POST['id_us'];
    $dosen_pembimbing     = $_POST['dosen_pembimbing'];
    $kegiatan             = $_POST['kegiatan'];
    $judul                = $_POST['judul'];
    $keterangan           = $_POST['keterangan'];

    $addtable = mysqli_query($conn, "INSERT INTO kom_kegiatancoas (username,dosen_pembimbing,kegiatan,judul,keterangan)
    values ('$username','$dosen_pembimbing','$kegiatan','$judul','$keterangan')");
    if($addtable){
        header('location:jadwal_kegiatan.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

?>