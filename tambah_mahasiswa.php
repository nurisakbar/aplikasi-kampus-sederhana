<?php include 'header.php';?>
<div class="container" style="margin-top: 50px;">
<h4>Input Data Mahasiswa</h4>
<form action="simpan_mahasiswa.php" method="post">
<table class="table table-borderd">
  <tr>
    <td>NIM</td>
    <td>
      <input name="nim" type="text" placeholder="NIM" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>
      <input name="nama" type="text" placeholder="Nama Lengkap" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <input name="email" type="email" placeholder="email" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Nomor HP</td>
    <td>
      <input name="nomor_hp" type="text" placeholder="Nomor HP" class="form-control">
    </td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>
      <select name="id_jurusan" class="form-control">
        <?php
        $jurusan = mysqli_query($connect,"select * from jurusan");
        while($jrs = mysqli_fetch_array($jurusan)){
          echo "<option value='".$jrs['id_jurusan']."'>".$jrs['nama_jurusan']."</option>";
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>
      <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control">
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
      <a href="" class="btn btn-primary">Kembali</a>
    </td>
  </tr>
</table>      
</form>  
</div>
<?php include 'footer.php';?>