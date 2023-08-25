<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SUKRIBOOK - Perpustakaan Buku</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/201/201614.png?w=740&t=st=1690524988~exp=1690525588~hmac=aeb754baa84f0ba37dbb21c606b188976b50ec929750afdc8214d52600411c16" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Josefin+Sans:wght@700&family=Lexend+Deca:wght@300&family=Oswald:wght@500&family=Rubik:wght@500&family=Tilt+Warp&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/font.css" />
    <link rel="stylesheet" href="../../css/complete.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-success shadow fixed-top" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand fs-3 fw-bold font-bagel brand-text" href="#"> SUKRIBOOK </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-semibold me-1" aria-current="page" href="../../page/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold me-1" href="../../page/menubuku.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" href="../../page/akunmenu.php">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- breadcrumb -->
    <div class="container turun">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
        </ol>
      </nav>
    </div>
    <!-- form -->
    <div class="container">
      <h2 class="fw-bold fontrubik text-center mb-4">TAMBAH BUKU</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="../../database/tambahBuku.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label fw-semibold">Judul Buku</label>
              <input type="text" name="judulBuku" class="form-control" id="exampleFormControlInput1" required />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Sinopsis Buku</label>
              <textarea class="form-control" name="sinopsisBuku" id="exampleFormControlTextarea1" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label class="fw-semibold naik">Kategori Buku</label>
              <select class="form-select" aria-label="Default select example" name="kategoriBuku">
                <option selected>Pilih Kategori Buku</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Non-Fiksi">Non-Fiksi</option>
                <option value="Fantasi">Fantasi</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="fw-semibold naik">Batas Umur</label>
              <select class="form-select" aria-label="Default select example" name="batasUmur">
                <option selected>Pilih Batas Umur</option>
                <option value="SU">Semua Umur</option>
                <option value="R13+">Remaja</option>
                <option value="17+">Dewasa</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label fw-semibold">Sampul Buku</label>
              <input class="form-control" name="sampulBuku" type="file" id="formFile" required />
            </div>
            <input type="submit" value="Kirim" />
          </form>
        </div>
      </div>
    </div>
    <!-- akhir form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
