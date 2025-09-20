<?php
include 'koneksi.php';

$id_absen = $_POST['id_absen'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO lembur (id_absen, jam_mulai, jam_selesai, keterangan)
        VALUES ('$id_absen', '$jam_mulai', '$jam_selesai', '$keterangan')";

if (mysqli_query($conn, $sql)) {
  echo "Data lembur berhasil disimpan.";
  echo "<br><a href='absen_tabel.php'>Kembali ke Tabel Absensi</a>";
} else {
  echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>

