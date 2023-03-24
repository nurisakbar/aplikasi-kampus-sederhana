<?php
// membaca parameter nim yang akan digunakan untuk mendelete data
$nim = $_GET['nim'];

// memanggil koneksi ke database
include('koneksi.php');

// query untuk menghapus data
$delete = mysqli_query($connect,"delete from mahasiswa where nim='$nim'");
// check status query apakah berhasil atau gagal
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}

// redirect ke halaman index
header("location:index.php?status=".$status);
?>