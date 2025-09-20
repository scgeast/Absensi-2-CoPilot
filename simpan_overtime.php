<?php
include 'koneksi.php';

$id_absen = $_POST['id_absen'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$keterangan = $_POST['keterangan'];

$mulai = strtotime($jam_mulai);
$selesai = strtotime($jam_selesai);
$durasi = round(($selesai - $mulai) / 3600, 2); // dalam jam

$sql = "INSERT INTO lembur (id_absen, jam_mulai, jam_selesai, keterangan, durasi)
        VALUES ('$id_absen', '$jam_mulai', '$jam_selesai', '$keterangan', '$durasi')";

if (mysqli_query($conn, $sql)) {
  echo "Data lembur berhasil disimpan.<br>";
  echo "<a href='overtime_tabel.php'>Lihat Rekap Lembur</a>";
} else {
  echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
