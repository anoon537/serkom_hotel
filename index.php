<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Pulau Kapuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<link rel="stylesheet" href="style.css">

<body>
  <header>
    <nav class="navbar navbar-expand-lg ">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="mr-auto">
          <a class="navbar-brand" href="index.php">
            <img src="img\hotelL.png" alt="Logo Hotel Pulau Kapuk" style="width: 50px; height: auto;">
            <span class="navbar-brand">Hotel Pulau Kapuk</span>
          </a>
        </div>
        <div class="mx-auto">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Produk</a></li>
            <li class="nav-item"><a class="nav-link" href="daftar-harga.php">Daftar Harga</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="list-booking.php">List Pemesanan</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="room-type">
            <h3 class="text-center">Kamar Standard</h3>
            <div class="media-content">
              <img src="img/S1.png" alt="Kamar Standard 1">
              <img src="img/S2.png" alt="Kamar Standard 2">
              <img src="img/S3.png" alt="Kamar Standard 3">
              <video controls>
                <source src="video/S.mp4" type="video/mp4">
              </video>
            </div>
            <div class="text-center mt-3">
              <button class="btn btn-primary" onclick="redirectToBooking('Kamar Standard')">Pesan Kamar Standard</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="room-type">
            <h3 class="text-center">Kamar Deluxe</h3>
            <div class="media-content">
              <img src="img/D1.png" alt="Kamar Deluxe 1">
              <img src="img/D2.png" alt="Kamar Deluxe 2">
              <img src="img/D3.png" alt="Kamar Deluxe 3">
              <video controls>
                <source src="video/D.mp4" type="video/mp4">
              </video>
            </div>
            <div class="text-center mt-3">
              <button class="btn btn-primary" onclick="redirectToBooking('Kamar Deluxe')">Pesan Kamar Deluxe</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="room-type">
            <h3 class="text-center">Kamar Executive</h3>
            <div class="media-content">
              <img src="img/E1.png" alt="Kamar Executive 1">
              <img src="img/E2.png" alt="Kamar Executive 2">
              <img src="img/E3.png" alt="Kamar Executive 3">
              <video controls>
                <source src="video/E.mp4" type="video/mp4">
              </video>
            </div>
            <div class="text-center mt-3">
              <button class="btn btn-primary" onclick="redirectToBooking('Kamar Executive')">Pesan Kamar Executive</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script>
    function redirectToBooking(roomType) {
      window.location.href = `booking.php`;
    }
  </script>
</body>

</html>