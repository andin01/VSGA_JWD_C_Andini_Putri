<?php 
include 'koneksi.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <button type="button" class="btn btn-success"><a href="tambah_data.php">Tambah Data</a></button>
    <table class="table container">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">asal sekolah</th>
    </tr>
  </thead>
                  <tbody>
                    <?php 
                    $sql = mysqli_query($koneksi,"SELECT * FROM siswa");
                    while($data = mysqli_fetch_array($sql)){
                     ?>
                    <tr>
                      <td><?=$data['id'];?></td>
                      <td><?=$data['nama'];?></td>
                      <td><?=$data['alamat'];?></td>
                      <td><?=$data['jk'];?></td>
                      <td><?=$data['agama'];?></td>
                      <td><?=$data['asal_sekolah'];?></td>
                    <?php 
                    }
                     ?>
                  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>