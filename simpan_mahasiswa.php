<?php
// membuat variabel dan menyimpan inputan
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$nomor_hp       = $_POST['nomor_hp'];
$id_jurusan     = $_POST['id_jurusan'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$sudah_lulus    = $_POST['sudah_lulus'];

// memanggil koneksi
include ('koneksi.php');
// query untuk insert ke tabel mahasiswa
$query = "INSERT INTO mahasiswa (nim,nama,email,nomor_hp,id_jurusan,tanggal_lahir,jenis_kelamin,sudah_lulus) 
VALUES('$nim','$nama','$email','$nomor_hp','$id_jurusan','$tanggal_lahir','$jenis_kelamin','$sudah_lulus')";

$insert = mysqli_query($connect,$query);
// check status query apakah berhasil atau gagal
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
// redirect ke halaman index
header("location:index.php?status=".$status);
?>