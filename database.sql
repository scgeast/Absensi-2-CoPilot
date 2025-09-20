CREATE DATABASE IF NOT EXISTS absensi;
USE absensi;

CREATE TABLE IF NOT EXISTS absen (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  tanggal DATE NOT NULL,
  jam_masuk TIME NOT NULL,
  jam_keluar TIME NOT NULL
);

CREATE TABLE lembur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_absen INT,
  jam_mulai TIME,
  jam_selesai TIME,
  keterangan TEXT,
  FOREIGN KEY (id_absen) REFERENCES absen(id)
);
