<?php include 'header.php'; ?>
<div class="container" style="margin-top: 50px;">
        <h4>Data Pengguna</h4>
        <a href="tambah_pengguna.php" class="btn btn-info">Tambah Data</a>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Username</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody> 
            <?php
                $nomor = 1;
                $pengguna = mysqli_query($connect,"select * from pengguna");
                while($row=mysqli_fetch_array($pengguna)){
                ?> 
            <tr>
              <td> <?php echo $nomor;?> </td>
              <td> <?php echo $row['nama']?> </td>
              <td> <?php echo $row['username']?> </td>
              <td>
                <a href="edit_pengguna.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Edit</a>
                <a href="#" class="btn btn-warning">Delete</a>
              </td>
            </tr> <?php 
            $nomor++;
            } ?> </tbody>
        </table>
      </div>

<?php include '/footer.php'; ?>


