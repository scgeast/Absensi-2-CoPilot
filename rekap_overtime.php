<?php
include 'koneksi.php';

$id_absen = $_GET['id_absen'];
$query = mysqli_query($conn, "SELECT * FROM absensi WHERE id_absen = $id_absen");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Rekap Lembur</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Form Rekap Lembur</h2>

  <form action="simpan_overtime.php" method="POST">
    <input type="hidden" name="id_absen" value="<?= $data['id_absen'] ?>">

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" readonly><br><br>

    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" readonly><br><br>

    <label>Jam Masuk:</label><br>
    <input type="time" value="<?= $data['jam_masuk'] ?>" readonly><br><br>

    <label>Jam Keluar:</label><br>
    <input type="time" value="<?= $data['jam_keluar'] ?>" readonly><br><br>

    <label>Jam Mulai Lembur:</label><br>
    <input type="time" name="jam_mulai" required><br><br>

    <label>Jam Selesai Lembur:</label><br>
    <input type="time" name="jam_selesai" required><br><br>

    <label>Keterangan:</label><br>
    <textarea name="keterangan" rows="4" cols="40"></textarea><br><br>

    <button type="submit">Simpan Lembur</button>
  </form>
</body>
</html>

