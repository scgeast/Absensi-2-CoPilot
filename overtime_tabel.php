<?php
include 'koneksi.php';
$query = mysqli_query($conn, "
  SELECT l.*, a.nama, a.tanggal 
  FROM lembur l 
  JOIN absensi a ON l.id_absen = a.id_absen
  ORDER BY a.tanggal DESC
");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Rekap Lembur</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Data Rekap Lembur</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tanggal</th>
      <th>Jam Mulai</th>
      <th>Jam Selesai</th>
      <th>Durasi (jam)</th>
      <th>Keterangan</th>
    </tr>

    <?php
    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
      echo "<tr>
              <td>$no</td>
              <td>{$data['nama']}</td>
              <td>{$data['tanggal']}</td>
              <td>{$data['jam_mulai']}</td>
              <td>{$data['jam_selesai']}</td>
              <td>{$data['durasi']}</td>
              <td>{$data['keterangan']}</td>
            </tr>";
      $no++;
    }
    ?>
  </table>
  <br>
  <a href="index.html">Kembali ke Form Absensi</a>
</body>
</html>

