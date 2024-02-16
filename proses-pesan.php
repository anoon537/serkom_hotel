<?php
include 'config.php';

$namaPemesan = $_POST['nama'];
$jenisKelamin = $_POST['jenis-kelamin'];
$nomorIdentitas = $_POST['nomor-identitas'];
$tipeKamar = $_POST['tipe-kamar'];
$tanggalPesan = $_POST['tanggal-pesan'];
$result = explode('/', $tanggalPesan);
$date = $result[0];
$month = $result[1];
$years = $result[2];
$new = $years . '-' . $month . '-' . $date;

if (isset($_POST['durasi-menginap'])) {
  $durasi_menginap = intval($_POST['durasi-menginap']);
  if ($durasi_menginap >= 3) {
    $diskon = 10;
  } else {
    $diskon = 0;
  }
}

$durasiMenginap = $_POST['durasi-menginap'];
$totalBayar = $_POST['total-bayar'];

$stmt = $conn->prepare("INSERT INTO `history` (`nama`, `jk`, `nomor`, `tipe`, `tanggal`, `durasi`, `Diskon`, `total`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssissidi", $namaPemesan, $jenisKelamin, $nomorIdentitas, $tipeKamar, $new, $durasiMenginap, $diskon, $totalBayar);

if ($stmt->execute()) {
  echo "Data berhasil disimpan ke dalam database";
  header("Location: list-booking.php");
  exit();
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
