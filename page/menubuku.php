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
    <link rel="stylesheet" type="text/css" href="../css/menubuku.css" />
    <link rel="stylesheet" href="../css/font.css" />
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
              <a class="nav-link fw-semibold me-1" aria-current="page" href="landingPage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-semibold me-1" href="menubuku.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" href="akunmenu.php">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- header -->
    <header class="header turun">
      <div class="hero">
        <h4 class="fontheader fw-bold text-light">Jangan Lupa <br />Membaca <span>Buku</span></h4>
      </div>
    </header>
    <!-- content -->
    <main>
      <!-- sortir -->
      <div class="sortir d-flex justify-content-center flex-wrap">
        <h3 class="d-inline text-black me-3 uppercase">Kategori :</h3>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <button type="button" class="btn btn-outline-primary" onclick="filterBuku(['fiksi'])">Fiksi</button>
          <button type="button" class="btn btn-outline-primary" onclick="filterBuku(['nofiksi'])">Non-Fiksi</button>
          <button type="button" class="btn btn-outline-primary" onclick="filterBuku(['fantasi'])">Fantasi</button>
          <button type="button" class="btn btn-outline-primary" onclick="filterBuku(['semua'])">Semua</button>
        </div>
      </div>

      <!-- buku -->
      <div class="buku-container d-flex justify-content-evenly flex-wrap mt-4">
        <div class="card buku fiksi mb-3 card-width">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/23/Where_the_Crawdads_Sing_%28film%29.jpg/220px-Where_the_Crawdads_Sing_%28film%29.jpg" class="card-img-top" alt="foto buku where the crawdads sing" />
          <div class="card-body">
            <h5 class="card-title">Where the Crawdads Sing</h5>
            <p class="card-text font-size-card">
              "Where the Crawdads Sing" adalah tentang Kya Clark, seorang gadis muda yang tinggal di rawa-rawa terpencil. Dia menghadapi perjuangan hidup, dan ketika seorang pria ditemukan mati di rawa-rawa...
            </p>
            <!-- <a href="#" class="btn btn-primary px-4 fw-semibold">Buy</a> -->
            <span class="material-symbols-outlined badge bg-warning">star <span class="fontrubik text-light">4.9</span></span>
            <span class="badge bg-secondary">Fiksi</span>
            <span class="badge bg-secondary">17+</span>
          </div>
        </div>
        <div class="card buku fiksi mb-3 card-width">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/df/The_Silent_Patient_early_2019_UK_edition.png/220px-The_Silent_Patient_early_2019_UK_edition.png" class="card-img-top" alt="the silent patient" />
          <div class="card-body">
            <h5 class="card-title">The Silent Patient</h5>
            <p class="card-text font-size-card">
              "The Silent Patient" adalah kisah tentang seorang pelukis bernama Alicia Berenson yang berhenti berbicara setelah membunuh suaminya. Seorang psikoterapis, Theo Faber, berusaha membantu mengungkap...
            </p>
            <span class="material-symbols-outlined badge bg-warning">star <span class="fontrubik text-light">4.7</span></span>
            <span class="badge bg-secondary">Fiksi</span>
            <span class="badge bg-secondary">17+</span>
          </div>
        </div>
        <div class="card buku nofiksi mb-3 card-width">
          <img src="https://m.media-amazon.com/images/I/51Pe5D36rML._SY291_BO1,204,203,200_QL40_FMwebp_.jpg" class="card-img-top" alt="Sapiens book" />
          <div class="card-body">
            <h5 class="card-title">Sapiens: A Brief History of Humankind</h5>
            <p class="card-text font-size-card">
              "Sapiens: A Brief History of Humankind" oleh Yuval Noah Harari adalah buku yang menjelaskan perjalanan evolusi manusia dari awal mula hingga zaman modern, termasuk peran agama, teknologi, dan sistem..."
            </p>
            <span class="material-symbols-outlined badge bg-warning">star <span class="fontrubik text-light">4.7</span></span>
            <span class="badge bg-secondary">Non-Fiksi</span>
            <span class="badge bg-secondary">14+</span>
          </div>
        </div>
        <div class="card buku nofiksi mb-3 card-width">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/09/Becoming_%28Michelle_Obama_book%29.jpg/220px-Becoming_%28Michelle_Obama_book%29.jpg" class="card-img-top" alt="Becoming book" />
          <div class="card-body">
            <h5 class="card-title">Becoming</h5>
            <p class="card-text font-size-card">"Becoming" adalah buku memoar Michelle Obama yang menceritakan perjalanan hidupnya hingga menjadi First Lady AS yang ikonik dan perjuangannya dalam mendukung isu-isu sosial."</p>
            <span class="material-symbols-outlined badge bg-warning">star <span class="fontrubik text-light">4.7</span></span>
            <span class="badge bg-secondary">Non-Fiksi</span>
            <span class="badge bg-secondary">SU</span>
          </div>
        </div>
        <div class="card buku fantasi mb-3 card-width">
          <img src="https://m.media-amazon.com/images/I/51HSkTKlauL._SX346_BO1,204,203,200_.jpg" class="card-img-top" alt="Harry Potter Sorcrer Stone" />
          <div class="card-body">
            <h5 class="card-title">Harry Potter and the Sorcerer's Stone</h5>
            <p class="card-text font-size-card">"Harry Potter and the Sorcerer's Stone" adalah awal kisah Harry Potter, seorang anak penyihir, saat dia masuk ke Hogwarts, mengungkap misteri Batu Bertuah, dan melawan Voldemort.</p>
            <span class="material-symbols-outlined badge bg-warning">star <span class="fontrubik text-light">4.7</span></span>
            <span class="badge bg-secondary">Fantasi</span>
            <span class="badge bg-secondary">SU</span>
          </div>
        </div>
        <div class="card buku fantasi mb-3 card-width">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/Harry_Potter_and_the_Chamber_of_Secrets.jpg/220px-Harry_Potter_and_the_Chamber_of_Secrets.jpg" class="card-img-top" alt="Harry Potter and the Chamber of Secrets" />
          <div class="card-body">
            <h5 class="card-title">Harry Potter and the Chamber of Secrets</h5>
            <p class="card-text font-size-card">
              "Di "Harry Potter and the Chamber of Secrets", Harry dan teman-temannya menyelidiki ancaman di Hogwarts, menemukan Chamber of Secrets, dan menghadapi bahaya dari penerus Voldemort, Tom Riddle. Petualangan...
            </p>
            <span class="material-symbols-outlined badge bg-warning">star <span class="fontrubik text-light">4.7</span></span>
            <span class="badge bg-secondary">Fantasi</span>
            <span class="badge bg-secondary">SU</span>
          </div>
        </div>
      </div>
    </main>
    <!-- content pagenation -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link active" href="#">1</a></li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    <!-- footer -->
    <footer class="footer bg-success">
      <div class="footer-left">
        <h5 class="font-josesif-sans">About The Store</h5>
        <p class="font-lexand">Toko ini menjual buku dari yang terlama sampai terbaru, dan yang terpupuler sampai tidak populer.</p>
        <div class="icon">
          <div class="fb">
            <a href=""> <img src="https://cdn-icons-png.flaticon.com/512/20/20673.png?w=740&t=st=1690522176~exp=1690522776~hmac=d315eef3870dde13957c5fbdcc388c1bb2dee3a091f8f88e26e8c77f7392e6ed" alt="" /></a>
          </div>
          <div class="ig">
            <a href=""><img src="https://cdn-icons-png.flaticon.com/512/747/747393.png?w=740&t=st=1690510791~exp=1690511391~hmac=69af4349d87b3c444607865ed2a261faad2ac62f7816de3367f31b4b2c2ad1db" alt="" /></a>
          </div>
          <div class="twit">
            <a href=""><img src="https://cdn-icons-png.flaticon.com/512/1051/1051331.png?w=740&t=st=1690510902~exp=1690511502~hmac=023fe63ac7a9a8c09beb510e47c2601180dc93e044ac1efc9400a884451f663e" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="footer-right">
        <h5 class="font-josesif-sans">Send Feedback</h5>
        <a class="btn btn-danger fw-bold" href="https://mail.google.com/mail/?view=cm&fs=1&to=sukribalor@gmail.com&su=SUBJECT&body=BODY&bcc=sukribalor@gmail.com" role="button" target="_blank"
          ><img src="https://cdn-icons-png.flaticon.com/512/281/281786.png?w=740&t=st=1690522339~exp=1690522939~hmac=0ff72059963244f06b0bd7e84d77f257335100db62ff9a808db58ad24db8570b" alt="" />Gmail</a
        >
        <a class="btn btn-success fw-bold" href="https://wa.me/6283139744994" role="button" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/220/220236.png?w=740&t=st=1690522689~exp=1690523289~hmac=536bc4bf9e388dd7e578115f9debb9f43891090be921498e8a45c60c87da5562" alt="" />WhatsApp</a
        >
      </div>
    </footer>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
      function filterBuku(kategori) {
        const allBuku = document.querySelectorAll(".buku");
        allBuku.forEach((buku) => {
          if (kategori.includes("semua") || kategori.some((item) => buku.classList.contains(item))) {
            buku.style.display = "block";
          } else {
            buku.style.display = "none";
          }
        });
      }
    </script>
  </body>
</html>
