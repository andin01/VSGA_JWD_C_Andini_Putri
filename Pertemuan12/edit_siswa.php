<?php
include 'koneksi.php';

if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "UPDATE siswa SET nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("location:index.php");
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        <label>Alamat</label><br>
        <textarea name="alamat"><?php echo $data['alamat']; ?></textarea><br>
        <label>Jenis Kelamin</label><br>
        <select class="form-select" name="jk">
            <option value="Laki-Laki" <?php if ($data['jk'] == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
            <option value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select><br>
        <label>Agama</label><br>
        <select class="form-select" name="agama">
            <option value="Islam" <?php if ($data['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
            <option value="Kristen" <?php if ($data['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
            <option value="Katolik" <?php if ($data['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
            <option value="Hindu" <?php if ($data['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
            <option value="Budha" <?php if ($data['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
        </select><br>
        <label>Asal Sekolah</label><br>
        <input type="text" name="asal_sekolah" value="<?php echo $data['asal_sekolah']; ?>"><br>

        <button type="submit" name="btn">Simpan Perubahan</button>
    </form>
</body>
</html>
