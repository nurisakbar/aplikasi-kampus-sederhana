<?php 
include 'header.php';
$id         = $_GET['id'];
$query      = mysqli_query($connect,"select * from pengguna where id='$id'");
$pengguna   = mysqli_fetch_array($query);
?>
<div class="container" style="margin-top: 50px;">
<h4>Edit Data Pengguna</h4>
<table class="table table-bordered">
  <tr>
    <td>Nama</td>
    <td>
      <input type="text" value="<?php echo $pengguna['nama']?>" placeholder="Nama Lengkap" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Username</td>
    <td>
      <input type="text" value="<?php echo $pengguna['username']?>" placeholder="Username" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
      <input type="text" placeholder="Password" class="form-control">
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      <button type="submit" class="btn btn-success">Simpan Data</button>
      <a href="list_pengguna.php" class="btn btn-primary">Kembali</a>
    </td>
  </tr>
</table>        
</div>
<?php include 'footer.php';?>