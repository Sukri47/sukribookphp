<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SUKRIBOOK - Perpustakaan Buku</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/201/201614.png?w=740&t=st=1690524988~exp=1690525588~hmac=aeb754baa84f0ba37dbb21c606b188976b50ec929750afdc8214d52600411c16" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Josefin+Sans:wght@700&family=Lexend+Deca:wght@300&family=Oswald:wght@500&family=Rubik:wght@500&family=Tilt+Warp&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/landingPage.css" />
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
              <a class="nav-link active fw-semibold me-1" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold me-1" href="menubuku.php">Book</a>
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
    <div class="containerLocal">
      <div class="sidebar">
        <h2 class="text-center m-0 pt-3 font-tilt-wrap">Menu</h2>
        <div class="accordion dflex m-3" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fontrubik" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Daftar Buku Populer
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="https://www.amazon.com/Kill-Mockingbird-Harper-Lee/dp/0446310786" target="_blank">"Harry Potter and the Chamber of Secrets"</a>
                    <span class="badge bg-danger rounded-pill">SU</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="https://www.amazon.com/1984-Signet-Classics-George-Orwell/dp/0451524934" target="_blank">"Becoming"</a>
                    <span class="badge bg-danger rounded-pill">SU</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="https://www.amazon.com/Great-Gatsby-F-Scott-Fitzgerald/dp/0743273567" target="_blank">"The Silent Patient"</a>
                    <span class="badge bg-danger rounded-pill">17+</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fontrubik" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">Tambah Buku</button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tambah Buku Fisik
                    <span class="badge bg-primary rounded-pill">+</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tambah E-Book
                    <span class="badge bg-primary rounded-pill">+</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fontrubik" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">Kategori</button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Fiksi
                    <span class="badge bg-primary rounded-pill">2</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Non-Fiksi
                    <span class="badge bg-primary rounded-pill">2</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Fantasy
                    <span class="badge bg-primary rounded-pill">2</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mainbar">
        <h2 class="text-center m-0 p-3 font-tilt-wrap">introduction</h2>
        <div class="first-mainbar">
          <div class="align-self-center text-content">
            <h3 class="font-josesif-sans fs-2">Mengapa Baca Buku Perlu?</h3>
            <p class="font-lexand">
              Membaca buku perlu karena memberikan pengetahuan baru, mengembangkan keterampilan berpikir, merangsang imajinasi, meningkatkan empati, dan memperkuat daya ingat. Selain itu, membaca juga memberi hiburan, mengurangi stres, dan
              memperkaya kehidupan dengan perspektif dan pengalaman baru. Ini adalah cara yang efektif untuk belajar, tumbuh, dan menghubungkan diri dengan dunia yang lebih luas.
            </p>
          </div>
          <div class="p-2 img-content">
            <img
              src="https://img.freepik.com/free-vector/three-wooden-bookshelves-with-various-books-flat-set-web-design_74855-14536.jpg?w=740&t=st=1690440532~exp=1690441132~hmac=b205f9f563b93a5ba545a5b8782c90eea2b6fddb34ecf54abf59e5a6a3397fbc"
              alt="foto content"
              class="imgwidth"
            />
          </div>
        </div>
        <div class="second-mainbar">
          <div class="align-self-center text-content">
            <h3 class="font-josesif-sans fs-2">Menyediakan Banyak Buku</h3>
            <p class="font-lexand">
              Selamat datang di perpustakaan kami, di mana kami menawarkan koleksi buku terlengkap yang akan memenuhi selera pembaca dari berbagai usia dan minat. Temukan bacaan menarik dari berbagai genre, sastra klasik hingga karya
              terbaru. Jelajahi dunia pengetahuan dan fantasi yang menunggu Anda di setiap sudut rak kami. Ayo, kunjungi perpustakaan kami sekarang dan nikmati pengalaman membaca yang tak terlupakan!
            </p>
          </div>
          <div class="p-2 img-content">
            <img
              src="https://img.freepik.com/free-vector/international-literacy-day-with-lots-books_23-2148608688.jpg?w=740&t=st=1690525708~exp=1690526308~hmac=c2925b0f130bd7a79bb9fae4d5100427fea9de645544530b05f94d55f289bfe0"
              alt="foto content"
              class="imgwidth"
            />
          </div>
        </div>
      </div>
    </div>
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
  </body>
</html>
