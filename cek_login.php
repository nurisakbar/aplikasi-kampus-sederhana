<?php
// menyimpan hasil inputan kedalam variabel
$usernameTxt = $_POST['username'];
$passwordTxt = md5($_POST['password']);

// panggil koneksi ke database
include 'koneksi.php';

// melakukan query untuk pengecekan data
$pengguna = mysqli_query($connect,"select * from pengguna where username='$usernameTxt' 
and password='$passwordTxt'");

// menghitung jumlah data yang tersedia
$chek = mysqli_num_rows($pengguna);

// melakukan validasi apakah login valid atau tidak
if($chek>0){
    // jika valid maka redirect ke index
    session_start();
    // mengambil data dari database berdasakan login pengguna
    $penggunaRow = mysqli_fetch_array($pengguna);
    // membuat session
    $_SESSION['username']   = $penggunaRow['username'];
    $_SESSION['nama']       =  $penggunaRow['nama'];
    header("location:index.php");
}else{
    // jika gagal maka redirect ke halaman login login kembali
    header("location:login.php");
}
?>