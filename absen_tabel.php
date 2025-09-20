<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tabel Absensi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Data Absensi</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tanggal</th>
      <th>Jam Masuk</th>
      <th>Jam Keluar</th>
    </tr>

    <?php
    $no = 1;
    $query = mysqli_query($conn, "SELECT * FROM absen ORDER BY tanggal DESC");
    while ($data = mysqli_fetch_array($query)) {
      echo "<tr>
              <td>$no</td>
              <td>{$data['nama']}</td>
              <td>{$data['tanggal']}</td>
              <td>{$data['jam_masuk']}</td>
              <td>{$data['jam_keluar']}</td>
            </tr>";
      $no++;
    }
    ?>
  </table>
  <br>
  <a href="index.html">Kembali ke Form</a>
</body>
</html>

