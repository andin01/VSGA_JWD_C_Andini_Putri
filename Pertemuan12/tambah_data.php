<?php 
include 'koneksi.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>form</title>
 </head>
 <body>
 	<form method="POST">
 		<label>Nama</label><br>
 		<input type="text" name="nama" placeholder="masukkan nama anda"><br>
 		<label>Alamat</label><br>
 		<textarea name="alamat" placeholder="masukkan alamat anda"></textarea><br>
 		<label>Jenis Kelamin</label><br>
 <select class="form-select" name="jk" aria-label="Default select example">
  		<option selected>Open this select menu</option>
  		<option value="Laki-Laki">Laki-Laki</option>
  		<option value="Perempuan">Perempuan</option>
</select><br>
 		<label>Agama</label><br>
 <select class="form-select" name="agama" aria-label="Default select example">
  		<option selected>Open this select menu</option>
  		<option value="islam">Islam</option>
  		<option value="kristen">Kristen</option>
  		<option value="katolik">katolik</option>
  		<option value="hindu">hindu</option>
  		<option value="budha">budha</option>
</select><br>
		<label>asal sekolah</label><br>
		<input type="text" name="asal_sekolah"><br>

		<button type="submit" name="btn">Daftar</button>


 	</form>
 </body>
 </html>

 <?php 
if (isset($_POST['btn'])) {
  $sql = mysqli_query($koneksi,"INSERT INTO siswa VALUES ('','$_POST[nama]','$_POST[alamat]','$_POST[jk]','$_POST[agama]','$_POST[asal_sekolah]')");
  if($sql){
    header("location:index.php");
  }
}
  ?>