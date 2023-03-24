<?php include 'header.php'; ?>

<div class="container" style="margin-top: 50px;">
        <h4>Data Mahasiswa</h4>
        <a href="tambah_mahasiswa.php" class="btn btn-info">Tambah Data</a>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Nomor HP</th>
              <th>Jurusan</th>
              <th>Sudah Lulus</th>
              <th>Dosen Pembimbing</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody> 
            <?php
                $nomor = 1;
                $mahasiswa = mysqli_query($connect,"select m.*,j.nama_jurusan,d.nama_dosen
                from mahasiswa as m 
                join jurusan as j on m.id_jurusan=j.id_jurusan
                join dosen as d on m.dosen_pembimbing_id=d.id_dosen");
                while($row=mysqli_fetch_array($mahasiswa)){
                ?> 
            <tr>
              <td> <?php echo $nomor;?> </td>
              <td> <?php echo $row['nim']?> </td>
              <td> <?php echo $row['nama']?> </td>
              <td> <?php echo $row['email']?> </td>
              <td> <?php echo $row['nomor_hp']?> </td>
              <td> <?php echo $row['nama_jurusan']?> </td>
              <td> <?php echo $row['sudah_lulus']==1?'Ya':'Tidak' ?> </td>
              <td> <?php echo $row['nama_dosen']?> </td>
              <td>
                <a href="edit_mahasiswa.php?nim=<?php echo $row['nim'];?>" class="btn btn-danger">Edit</a>
                <a href="delete_mahasiswa.php?nim=<?php echo $row['nim'];?>" class="btn btn-warning">Delete</a>
              </td>
            </tr> <?php 
            $nomor++;
            } ?> </tbody>
        </table>
      </div>

<?php include '/footer.php'; ?>


