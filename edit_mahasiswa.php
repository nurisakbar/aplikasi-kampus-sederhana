<?php 
include 'header.php';
// menangkap parameter nim dari URL
$nim = $_GET['nim'];
$query = mysqli_query($connect,"select * from mahasiswa where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
?>
<div class="container" style="margin-top: 50px;">
<h4>Update Data Mahasiswa</h4>
<form action="update_mahasiswa.php" method="post">
<table class="table table-bordered">
  <tr>
    <td>NIM</td>
    <td>
      <input name="nim" type="text" value="<?php echo $mahasiswa['nim']?>" placeholder="NIM" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>
      <input type="text" name="nama" value="<?php echo $mahasiswa['nama']?>" placeholder="Nama Lengkap" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <input type="email" name="email" value="<?php echo $mahasiswa['email']?>" placeholder="email" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Nomor HP</td>
    <td>
      <input type="text" name="nomor_hp" value="<?php echo $mahasiswa['nomor_hp']?>" placeholder="Nomor HP" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>
    <select name="id_jurusan" class="form-control">
        <?php
        $jurusan = mysqli_query($connect,"select * from jurusan");
        while($jrs = mysqli_fetch_array($jurusan)){
          echo "<option value='".$jrs['id_jurusan']."' ";
          echo $jrs['id_jurusan']==$mahasiswa['id_jurusan']?"selected":"";
          echo ">".$jrs['nama_jurusan']."</option>";
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>
      <input type="date" value="<?php echo $mahasiswa['tanggal_lahir']?>" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
      <select name="jenis_kelamin" class="form-control">
        <option value="L">Laki Laki</option>
        <option value="P">Perempuan</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Sudah Lulus</td>
    <td>
      <select name="sudah_lulus" class="form-control">
        <option value="1">Ya</option>
        <option value="0">Tidak</option>
      </select>
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      <button type="submit" class="btn btn-success">Simpan Data</button>
      <a href="index.php" class="btn btn-primary">Kembali</a>
    </td>
  </tr>
</table>      
</form>  
</div>
<?php include 'footer.php';?>