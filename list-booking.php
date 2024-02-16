<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Pemesanan - Hotel Pulau Kapuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<link rel="stylesheet" href="style.css">

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <img src="img\hotelL.png" alt="Logo Hotel Pulau Kapuk" style="width: 50px; height: auto;">
      <a class="navbar-brand" href="index.php" style="margin-left: 5px;">Hotel Pulau Kapuk</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftar-harga.php">Daftar Harga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list-booking.php">List Pemesanan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section id="data-pemesanan" class="container py-5">
      <h2 class="text-center mb-4">Data Pemesanan</h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Pemesan</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Identitas</th>
              <th>Tipe Kamar</th>
              <th>Tanggal Pesan</th>
              <th>Durasi Menginap</th>
              <th>Diskon</th>
              <th>Total Bayar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'config.php';

            $sql = "SELECT `id`, `nama`, `jk`, `nomor`, `tipe`, `tanggal`, CONCAT(durasi, ' Hari') AS durasi, CONCAT(diskon, '%') AS diskon, CONCAT('Rp.', FORMAT(total, 0)) AS total FROM `history` WHERE 1";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["nama"] . "</td>
                                <td>" . $row["jk"] . "</td>
                                <td>" . $row["nomor"] . "</td>
                                <td>" . $row["tipe"] . "</td>
                                <td>" . $row["tanggal"] . "</td>
                                <td>" . $row["durasi"] . "</td>
                                <td>" . $row["diskon"] . "</td>
                                <td>" . $row["total"] . "</td>
                            </tr>";
              }
            } else {
              echo "0 hasil";
            }
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>