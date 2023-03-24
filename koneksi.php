<?php
// membuat variabel untuk menyimpan konfigurasi database
$username   =   "root";
$passDB     =   "";
$host       =   "127.0.0.1";
$database   =   "praktek_web";

// script untuk melakukan koneksi ke database
$connect = mysqli_connect($host, $username, $pasDB,$database);
if(!$connect){
    echo "Error connecting to database ".$database;
}
?>