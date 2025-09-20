<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];

$sql = "INSERT INTO absensi (nama, tanggal, jam_masuk, jam_keluar)
        VALUES ('$nama', '$tanggal', '$jam_masuk', '$jam_keluar')";

if (mysqli_query($conn, $sql)) {
  header("Location: absen_tabel.php");
} else {
  echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
