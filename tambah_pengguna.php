<?php include 'header.php';?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data Mahasiswa</h4>
<table class="table table-borderd">
<tr>
    <td>Nama</td>
    <td>
      <input type="text" placeholder="Nama Lengkap" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Username</td>
    <td>
      <input type="text" placeholder="Username" class="form-control">
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