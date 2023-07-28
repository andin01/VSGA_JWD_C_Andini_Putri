<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("location:index.php");
    }
}
?>